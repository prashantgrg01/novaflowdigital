# Instructions for AI coding tools working in this repo

This repo hosts NovaFlow Digital's marketing landing pages ("landers"),
deployed into WordPress as auto-registered Page Templates. It's designed to
be edited by prompting an AI coding tool directly — these instructions
apply regardless of which tool you're using (Claude Code, Cursor, Copilot,
Codex, etc.).

## Workflow — read this first

1. **Never push directly to `main`.** `main` is production: merging into
   it automatically deploys to the live WordPress site via GitHub Actions
   (SSH + rsync). Direct pushes to `main` are also blocked by a GitHub
   branch protection rule — you'll need to open a pull request.
2. Make changes on `staging` (or a feature branch off `staging`).
3. Every push to `staging` auto-deploys a preview to GitHub Pages:
   - `https://<github-username>.github.io/novaflowdigital/landers/{lander-name}/`
   - and `.../landers/{lander-name}/step-2/` for a lander with a second step
4. **Always check the staging preview before merging to `main`.** Note:
   this preview shows the visual result only — the WordPress "select this
   as a page's Template" behavior only exists once it's actually deployed
   to WordPress, not on GitHub Pages.
5. When it looks right, open a pull request from `staging` into `main`.
   Merging the PR triggers the production deploy automatically — nothing
   else to do.

## What's safe to edit vs. what's shared/risky

- **Safe, isolated to one lander:** `landers/{lander-name}/template.php`
  and `landers/{lander-name}/assets/*`.
- **Shared — edit with care:** `wp-content/mu-plugins/lander-templates.php`.
  This is what makes every lander's `Template Name` show up in the
  WordPress admin's Template dropdown. A mistake here can affect **every**
  lander at once, not just the one you're working on.
- **Infrastructure — don't touch unless you know what you're doing:**
  `.github/workflows/*.yml` (the staging preview and production deploy
  automation) and any GitHub repo secrets (SSH key, server paths). These
  are already configured and working; changing them can break deploys for
  every lander.

## Adding a new lander

1. Copy an existing lander's folder as a starting point, e.g.
   `landers/novaflow-school-enrolment-playbook/`.
2. Rename the folder to something identifying the new campaign. This name
   is internal only (it's baked into asset URLs and the folder path) — the
   client picks whatever page title/slug they want in WordPress separately
   and independently of this name.
3. Update the `Template Name:` header comment at the top of `template.php`
   to a human-readable name for the campaign — this is exactly what shows
   in the WordPress Template dropdown.
4. Replace the copy, images (in `assets/`), and the ActiveCampaign embed
   form id (see "Forms" below).
5. Push to `staging`, check the GitHub Pages preview, then open a PR into
   `main`.

A lander can also have a nested second step (see
`landers/novaflow-school-enrolment-playbook/step-2/` for an example, used
for a two-step funnel) — same pattern, one folder level deeper.

## Forms (ActiveCampaign)

Every lander's lead-capture form is ActiveCampaign's own embed snippet —
no custom backend code lives in this repo:

```html
<div class="_form_ID"></div>
<script src="https://novaflowdigital.activehosted.com/f/embed.php?id=ID" charset="utf-8"></script>
```

To point a lander at a different ActiveCampaign form, swap both `ID`
occurrences (the class name and the `id=` in the script URL) for the new
form's id from the ActiveCampaign account. The same snippet can be pasted
more than once on a page if a lander needs a form in multiple places.
Success messaging and any post-submit redirect are configured inside
ActiveCampaign's own form settings — not in this repo.

## Search engine indexing

Every lander includes `<meta name="robots" content="noindex, nofollow">`
in its `<head>`, so it never appears in search results on staging or
production. Only remove this if a lander should intentionally become
publicly discoverable.

## If something breaks in production

1. Check the "Deploy to SiteGround production" workflow run under the
   repo's **Actions** tab for the error.
2. A broken `wp-content/mu-plugins/lander-templates.php` is the highest-risk
   failure mode: mu-plugins load on *every* page of the WordPress site, so
   a syntax error there can take the whole site down, not just the
   landers. If that happens, revert the change in git and merge that
   revert into `main` to redeploy the last-known-good version immediately.

See `README.md` for more background on the overall system (branching
model, repo layout, one-time setup already completed).
