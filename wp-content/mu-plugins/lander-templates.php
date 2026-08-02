<?php
/**
 * Lander page template registration.
 *
 * Auto-discovers landers deployed to
 * wp-content/uploads/landers/{name}/template.php and makes each one
 * selectable as a Page Template in the editor (Page Attributes > Template),
 * independent of the active theme and independent of the WordPress page's
 * own slug/URL. Deploying a new lander is enough to make it appear in the
 * dropdown — nothing else needs registering by hand.
 *
 * Install: drop this file into wp-content/mu-plugins/
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LANDER_TEMPLATES_DIR', WP_CONTENT_DIR . '/uploads/landers' );

/**
 * Scan the landers directory and read each template's declared name from
 * its "Template Name:" header comment (same mechanism WordPress uses for
 * theme templates and plugin headers).
 */
function lander_templates_discover() {
    static $templates = null;
    if ( null !== $templates ) {
        return $templates;
    }

    $templates = array();

    if ( ! is_dir( LANDER_TEMPLATES_DIR ) ) {
        return $templates;
    }

    // Two glob passes: a lander's own template.php, plus one level of
    // nested "step" pages (e.g. {name}/step-2/template.php) for multi-step
    // funnels. Keyed by the full path relative to LANDER_TEMPLATES_DIR
    // (not just the immediate folder name) so two landers' same-named step
    // folders (both having a "step-2", say) don't collide.
    $files = array_merge(
        glob( LANDER_TEMPLATES_DIR . '/*/template.php' ),
        glob( LANDER_TEMPLATES_DIR . '/*/*/template.php' )
    );

    foreach ( $files as $file ) {
        $data = get_file_data( $file, array( 'name' => 'Template Name' ) );

        if ( empty( $data['name'] ) ) {
            continue;
        }

        $relative = trim( str_replace( LANDER_TEMPLATES_DIR, '', dirname( $file ) ), '/' );
        $key      = 'lander-' . str_replace( '/', '-', $relative ) . '.php';

        $templates[ $key ] = array(
            'label' => $data['name'],
            'file'  => $file,
        );
    }

    return $templates;
}

// Add each discovered lander to the Template dropdown in Page Attributes.
add_filter( 'theme_page_templates', function ( $page_templates ) {
    foreach ( lander_templates_discover() as $key => $tpl ) {
        $page_templates[ $key ] = $tpl['label'];
    }
    return $page_templates;
} );

// When a page using one of these templates is requested, serve the
// lander's file directly instead of the theme's normal template hierarchy.
add_filter( 'template_include', function ( $template ) {
    if ( ! is_page() ) {
        return $template;
    }

    $selected  = get_page_template_slug( get_the_ID() );
    $templates = lander_templates_discover();

    if ( isset( $templates[ $selected ] ) ) {
        return $templates[ $selected ]['file'];
    }

    return $template;
} );
