<?php
/**
 * Lander lead capture handler.
 *
 * Receives POSTs from any landing page's form (static HTML/JS, served
 * from WordPress or from an external static host) and emails the lead
 * to the right inbox based on which lander it came from.
 *
 * Install: drop this file into wp-content/mu-plugins/
 * (create that folder if it doesn't exist yet — mu-plugins load
 * automatically, no "activate" step needed, and it survives theme changes).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Map each lander's slug to where its leads should go.
 * Add one line per new lander. Anything not listed falls back to DEFAULT_TO.
 */
function lander_leads_recipient_map() {
    return array(
        'novaflow-schools'   => 'client@example.com',
        'novaflow-corporate' => 'client@example.com',
    );
}
define( 'LANDER_LEADS_DEFAULT_TO', 'client@example.com' );

add_action( 'wp_ajax_lander_lead', 'lander_leads_handle_submission' );
add_action( 'wp_ajax_nopriv_lander_lead', 'lander_leads_handle_submission' );

function lander_leads_handle_submission() {

    // Honeypot: a hidden field named "website" that real visitors never
    // fill in. If it has a value, silently pretend success and stop.
    if ( ! empty( $_POST['website'] ) ) {
        wp_send_json_success();
    }

    $lander = isset( $_POST['lander'] ) ? sanitize_title( wp_unslash( $_POST['lander'] ) ) : '';
    $name   = isset( $_POST['firstName'] ) ? sanitize_text_field( wp_unslash( $_POST['firstName'] ) ) : '';
    $email  = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $phone  = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please provide a valid name and email.' ), 400 );
    }

    $map = lander_leads_recipient_map();
    $to  = isset( $map[ $lander ] ) ? $map[ $lander ] : LANDER_LEADS_DEFAULT_TO;

    $site_domain = wp_parse_url( home_url(), PHP_URL_HOST );

    $subject = sprintf( 'New lead: %s', $lander ? $lander : 'unknown lander' );

    $body  = "New lander form submission\n\n";
    $body .= "Lander: {$lander}\n";
    $body .= "Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n";
    $body .= 'Submitted: ' . current_time( 'mysql' ) . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Lander Forms <noreply@' . $site_domain . '>',
        'Reply-To: ' . $email,
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( ! $sent ) {
        wp_send_json_error( array( 'message' => 'Email could not be sent.' ), 500 );
    }

    wp_send_json_success( array( 'message' => 'Received.' ) );
}
