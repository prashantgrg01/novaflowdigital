# NovaFlow landing pages

Self-contained landing pages, one folder per campaign, deployed into
WordPress as auto-registered Page Templates. Full design rationale lives in
the project spec; this file is the quick-reference for day-to-day use.

## Repo layout

```
/landers/{name}/template.php   — Template Name header + full markup
/landers/{name}/assets/        — images referenced via root-relative paths
/wp-content/mu-plugins/        — server-side WordPress plugins (see below)
```

## Branches

- `staging` → auto-deploys to GitHub Pages (`.github/workflows/pages.yml`)
  for visual review. Note: GitHub Pages serves `template.php` as a static
  file, not through PHP, so the `<?php ... ?>` header renders literally —
  fine for reviewing look/copy, not a preview of WordPress's template
  selection behavior.
- `main` → triggers a SiteGround production pull via
  `.github/workflows/deploy-production.yml`, only reached by merging from
  `staging` after review.

## Adding a new lander

1. Create `/landers/{new-name}/template.php` with a `Template Name:` header
   line and root-relative asset paths under
   `/wp-content/uploads/landers/{new-name}/assets/`.
2. Add a form submit handler that POSTs to `admin-ajax.php` with
   `action=lander_lead` and `lander={new-name}`, plus the honeypot
   `website` field (see `landers/novaflow-schools/template.php`).
3. Add a line to `lander_leads_recipient_map()` in
   `wp-content/mu-plugins/lander-leads.php` mapping `{new-name}` to the
   right inbox.
4. Push to `staging`, review the Pages preview, merge to `main`.
5. Nothing else to register — `lander-templates.php` picks up the new
   folder automatically on the next page load once deployed.

## One-time manual setup (not done from this repo)

- SSH key auth to SiteGround, verified from a terminal.
- Site Tools → Devs → Git: connect this repository, set deployment path to
  `wp-content/uploads/landers/`.
- Add the `SITEGROUND_DEPLOY_WEBHOOK` repo secret once the above is
  connected, so `deploy-production.yml` can trigger the pull automatically.
- Install an SMTP plugin (WP Mail SMTP or FluentSMTP) so `wp_mail()` in
  `lander-leads.php` reliably delivers instead of being spam-flagged.

## Known placeholders to replace before go-live

- `client@example.com` in `lander_leads_recipient_map()`
  (`wp-content/mu-plugins/lander-leads.php`).
- `https://example.com` in each lander's form fetch URL.
- `robots.txt` currently disallows all crawling on the staging preview by
  default — relax or remove once a lander is public.
