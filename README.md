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
2. Drop in the lander's ActiveCampaign embed form (see "Form submissions"
   below) wherever the page needs a form.
3. Push to `staging`, review the Pages preview, merge to `main`.
4. Nothing else to register — `lander-templates.php` picks up the new
   folder automatically on the next page load once deployed.

## Form submissions

Lead capture runs entirely through ActiveCampaign — no custom PHP or
admin-ajax endpoint. Each form is just ActiveCampaign's own embed snippet
dropped into the page:

```html
<div class="_form_ID"></div>
<script src="https://novaflowdigital.activehosted.com/f/embed.php?id=ID" charset="utf-8"></script>
```

The same snippet can appear more than once on a page (e.g. a hero
placement and a final-CTA placement both embedding the same form id).
Thank-you messaging and any post-submit redirect (e.g. step 1 sending
visitors to step 2) are configured in ActiveCampaign's own form settings,
not in the page's HTML/JS — there's nothing to wire up here.

Current forms:
- School Enrolment Playbook (step 1): form id `3`
- Book Your Free Strategy Session (step 2): form id `1`

## One-time manual setup (not done from this repo)

- SSH key auth to SiteGround, verified from a terminal.
- Site Tools → Devs → Git: connect this repository, set deployment path to
  `wp-content/uploads/landers/`.
- Add the `SITEGROUND_DEPLOY_WEBHOOK` repo secret once the above is
  connected, so `deploy-production.yml` can trigger the pull automatically.
- In ActiveCampaign, set each form's success action to redirect where the
  funnel needs it to go (e.g. form id `3`'s success action should redirect
  to step 2's real WordPress URL once that page exists and has a slug).

## Search engine indexing

Every lander's `<head>` includes `<meta name="robots" content="noindex, nofollow">`
so landers stay out of search results on both the GitHub Pages staging
preview and production, regardless of domain. Remove that tag from a
lander's `template.php` if it should ever become publicly indexable.
