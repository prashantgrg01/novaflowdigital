<?php
/* Template Name: NovaFlow — Schools */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NovaFlow for Schools</title>
<style>
  :root { --brand: #1a56db; --ink: #0f172a; --muted: #64748b; }
  * { box-sizing: border-box; }
  body { margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; color: var(--ink); }
  .hero { max-width: 960px; margin: 0 auto; padding: 64px 24px; text-align: center; }
  .hero img.logo { height: 40px; margin-bottom: 32px; }
  .hero h1 { font-size: 2.25rem; line-height: 1.2; margin: 0 0 16px; }
  .hero p.subhead { font-size: 1.125rem; color: var(--muted); margin: 0 0 40px; }
  .hero img.mockup { max-width: 100%; border-radius: 12px; box-shadow: 0 12px 32px rgba(0,0,0,0.12); margin-bottom: 48px; }
  form.lead-form { max-width: 420px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px; }
  form.lead-form input { padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 1rem; }
  form.lead-form button { padding: 12px 14px; border: none; border-radius: 8px; background: var(--brand); color: #fff; font-size: 1rem; font-weight: 600; cursor: pointer; }
  form.lead-form button:hover { opacity: 0.92; }
  .success-message { display: none; max-width: 420px; margin: 0 auto; padding: 16px; background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 8px; }
</style>
</head>
<body>
  <section class="hero">
    <img class="logo" src="/wp-content/uploads/landers/novaflow-schools/assets/logo.png" alt="NovaFlow">
    <h1>Give your school the tools it deserves</h1>
    <p class="subhead">NovaFlow helps administrators and teachers save hours every week — placeholder copy, replace per campaign.</p>
    <img class="mockup" src="/wp-content/uploads/landers/novaflow-schools/assets/hero-mockup.png" alt="Product preview">

    <form class="lead-form" id="lead-form">
      <input type="text" name="firstName" placeholder="First name" required>
      <input type="email" name="email" placeholder="Email address" required>
      <input type="tel" name="phone" placeholder="Phone (optional)">
      <!-- Honeypot: hidden via inline position, not display:none, so bots that skip display:none fields still get caught -->
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;">
      <button type="submit">Request a demo</button>
    </form>
    <div class="success-message" id="success-message">Thanks — we'll be in touch shortly.</div>
  </section>

  <script>
    (function () {
      var form = document.getElementById('lead-form');
      var success = document.getElementById('success-message');

      form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Staging preview: skip the live submit so test edits don't email the client.
        if (window.location.hostname.indexOf('github.io') !== -1) {
          form.style.display = 'none';
          success.style.display = 'block';
          return;
        }

        var data = new FormData(form);
        data.append('action', 'lander_lead');
        data.append('lander', 'novaflow-schools'); // this lander's folder name

        // TODO: replace with the real production domain before go-live.
        fetch('https://example.com/wp-admin/admin-ajax.php', { method: 'POST', body: data })
          .then(function (r) { return r.json(); })
          .then(function (res) {
            if (res.success) {
              form.style.display = 'none';
              success.style.display = 'block';
            }
          });
      });
    })();
  </script>
</body>
</html>
