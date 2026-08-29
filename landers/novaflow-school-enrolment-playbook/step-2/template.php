<?php
/* Template Name: NovaFlow — School Enrolment Playbook (Step 2 — Book a Session) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Novaflow Digital — Book Your Free Strategy Session</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; }
  body { margin: 0; font-family: 'Poppins', system-ui, sans-serif; color: #45566A; background: #FFFFFF; -webkit-font-smoothing: antialiased; line-height: 1.6; }
  a { color: #15A6AE; }
  a:hover { color: #0E8C93; }
  @keyframes nf2-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .nf2-marquee-track { display: inline-flex; align-items: center; gap: 56px; animation: nf2-marquee 26s linear infinite; }
  .nf2-marquee-mask { -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); }
  .nf2-cta, .nf2-link { transition: transform 0.18s ease, box-shadow 0.22s ease, background-color 0.2s ease; }
  .nf2-cta:hover { transform: translateY(-2px); background: #0E8C93 !important; }
  .nf2-carousel-btn:hover { background: #F7FBFC !important; }
  @media (prefers-reduced-motion: reduce) { .nf2-cta:hover { transform: none; } }
  input:focus, select:focus, textarea:focus { border-color: #15A6AE !important; }
  .nf2-img-slot { width: 100%; height: 100%; object-fit: cover; display: block; }
  @media (max-width: 900px) {
    .nf2-about { grid-template-columns: 1fr !important; gap: 32px !important; }
    .nf2-about img { max-width: 320px; margin: 0 auto; }
    .nf2-steps { grid-template-columns: repeat(2, 1fr) !important; }
    section { padding-left: 20px !important; padding-right: 20px !important; padding-top: 64px !important; padding-bottom: 64px !important; }
    .nf2-hero-pad { padding-left: 20px !important; padding-right: 20px !important; padding-top: 40px !important; padding-bottom: 40px !important; }
    .nf2-hero-stats { grid-template-columns: repeat(3, 1fr) !important; }
    .nf2-roadmap-grid { grid-template-columns: repeat(2, 1fr) !important; }
    .nf2-timeline-line { display: none !important; }
    .nf2-logos-grid { grid-template-columns: repeat(2, 1fr) !important; }
    .nf2-testimonial-card { flex: 0 0 calc(50% - 10px) !important; }
    .nf2-case-featured { grid-template-columns: 1fr !important; }
    .nf2-case-featured > div:last-child { min-height: 220px !important; border-radius: 0 0 18px 18px !important; }
  }
  @media (max-width: 560px) {
    .nf2-steps { grid-template-columns: 1fr !important; }
    .nf2-hero-stats { grid-template-columns: 1fr !important; }
    .nf2-case-kpis { grid-template-columns: 1fr !important; gap: 18px !important; }
    .nf2-case-kpis > div { display: grid !important; grid-template-columns: auto 1fr !important; column-gap: 14px !important; align-items: center !important; }
    .nf2-case-kpis > div > div:first-child { margin-bottom: 0 !important; grid-row: 1 / 3; }
    .nf2-case-kpis > div > div:nth-child(2) { margin-bottom: 4px !important; }
    .nf2-case-kpis > div > p, .nf2-case-kpis > div > span { grid-column: 2; }
    .nf2-logos-grid { grid-template-columns: repeat(2, 1fr) !important; }
    section { padding-top: 56px !important; padding-bottom: 56px !important; }
    section:first-of-type { padding-top: 16px !important; }
    .nf2-hero-pad { padding-top: 16px !important; padding-bottom: 32px !important; }
    .nf2-roadmap-grid { grid-template-columns: 1fr !important; }
    .nf2-includes-grid { grid-template-columns: 1fr !important; }
    .nf2-timeline-line { display: none !important; }
    .nf2-step-arrow { transform: rotate(90deg); }
    .nf2-founder-stats { grid-template-columns: 1fr !important; }
    .nf2-testimonial-card { flex: 0 0 100% !important; }
  }
  .nf2-testimonial-card { flex: 0 0 calc(33.333% - 14px); }

  .nf2-fade, .nf2-steps, .nf2-founder-stats, .nf2-case-featured, .nf2-testimonial-card {
    opacity: 0; transform: translateY(28px);
    transition: opacity 0.7s ease, transform 0.7s ease;
  }
  .nf2-fade.nf2-visible, .nf2-steps.nf2-visible, .nf2-founder-stats.nf2-visible,
  .nf2-case-featured.nf2-visible, .nf2-testimonial-card.nf2-visible { opacity: 1; transform: none; }
  .nf2-steps.nf2-visible > *:nth-child(1) { transition-delay: 0.05s; }
  .nf2-steps.nf2-visible > *:nth-child(2) { transition-delay: 0.12s; }
  .nf2-steps.nf2-visible > *:nth-child(3) { transition-delay: 0.19s; }
  .nf2-steps.nf2-visible > *:nth-child(4) { transition-delay: 0.26s; }
  .nf2-steps.nf2-visible > *:nth-child(5) { transition-delay: 0.33s; }
  @media (prefers-reduced-motion: reduce) {
    .nf2-fade, .nf2-steps, .nf2-founder-stats, .nf2-case-featured, .nf2-testimonial-card { opacity: 1; transform: none; transition: none; }
  }

  .nf2-card-hover { transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease; }
  .nf2-card-hover:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(22,38,63,0.14); border-color: #BFE0E0 !important; }
  .nf2-testimonial-card.nf2-card-hover {
    transition: opacity 0.7s ease, transform 0.35s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  }
  .nf2-testimonial-card.nf2-card-hover[style*="#16263F"]:hover { box-shadow: 0 26px 48px rgba(22,38,63,0.32) !important; }
  .nf2-logo-cell { transition: transform 0.25s ease, box-shadow 0.25s ease; }
  .nf2-logo-cell:hover { transform: translateY(-4px); box-shadow: 0 14px 28px rgba(22,38,63,0.1); }
  .nf2-howwedoit-item { transition: transform 0.25s ease; }
  .nf2-howwedoit-item:hover { transform: translateX(6px); }
  .nf2-carousel-btn { transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease; }
  .nf2-carousel-btn:hover { transform: translateY(-50%) scale(1.08); box-shadow: 0 12px 26px rgba(22,38,63,0.22); }
  .nf2-step-circle { transition: transform 0.3s ease, box-shadow 0.3s ease; }
  .nf2-step-circle:hover { transform: scale(1.08); }
</style>
</head>
<body>

<div style="font-family: 'Poppins', system-ui, sans-serif; color: #45566A; background: #FFFFFF; -webkit-font-smoothing: antialiased; line-height: 1.6;">

  <header style="position: relative; overflow: hidden; background: radial-gradient(700px 300px at 85% 0%, rgba(228,244,245,0.55) 0%, rgba(228,244,245,0) 60%), #F7FBFC;">
    <div style="max-width: 1080px; margin: 0 auto; padding: 24px 24px 20px;">
      <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/step-2/assets/novaflow-logo.png" alt="NovaFlow Digital" style="height: 30px; width: auto;">
    </div>
  </header>

  <!-- 01 HERO -->
  <section style="position: relative; overflow: hidden; background: radial-gradient(900px 560px at 85% 15%, rgba(228,244,245,0.55) 0%, rgba(228,244,245,0) 60%), #F7FBFC;">
    <div style="max-width: 1080px; margin: 0 auto; padding: 88px 24px; display: grid; grid-template-columns: 1.08fr 0.92fr; gap: 56px; align-items: center; position: relative; z-index: 1; padding-top: 35px; padding-bottom: 35px" class="nf2-about nf2-hero-pad">
      <div>
        <div style="display: inline-flex; align-items: center; gap: 8px; background: #E4F4F5; color: #0E8C93; font-weight: 700; font-size: 13px; padding: 8px 14px; border-radius: 100px; margin-bottom: 22px;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#0E8C93" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          Your playbook is on its way
        </div>
        <h1 style="font-weight: 800; font-size: clamp(32px, 4.2vw, 48px); line-height: 1.1; letter-spacing: -0.02em; color: #16263F; margin: 0 0 20px; text-wrap: balance;">Turn your playbook into a practical <span style="position: relative; display: inline-block;">marketing plan<svg width="100%" height="10" viewBox="0 0 200 10" preserveAspectRatio="none" style="position: absolute; left: 0; bottom: -6px; width: 100%;"><path d="M2 7 Q100 -2 198 7" stroke="#15A6AE" stroke-width="3" fill="none" stroke-linecap="round"></path></svg></span>.</h1>
        <p style="font-size: 18px; line-height: 1.6; color: #51637A; margin: 0 0 32px; max-width: 500px;">Get personalised recommendations for your school in a free 30-minute strategy session.</p>
        <div class="nf2-steps nf2-hero-stats" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; max-width: 560px; margin-bottom: 30px;">
          <div style="border: 1px solid #E4EDEF; border-radius: 14px; padding: 16px;">
            <div style="font-weight: 800; font-size: 26px; color: #16263F; line-height: 1;">80+</div>
            <p style="font-size: 12.5px; color: #6C7E8E; line-height: 1.35; margin: 6px 0 0;">Schools helped across AU &amp; international</p>
          </div>
          <div style="border: 1px solid #E4EDEF; border-radius: 14px; padding: 16px;">
            <div style="font-weight: 800; font-size: 26px; color: #16263F; line-height: 1;">90 days</div>
            <p style="font-size: 12.5px; color: #6C7E8E; line-height: 1.35; margin: 6px 0 0;">Enrolment Guarantee or we continue advertising free</p>
          </div>
          <div style="border: 1px solid #E4EDEF; border-radius: 14px; padding: 16px;">
            <div style="font-weight: 800; font-size: 26px; color: #16263F; line-height: 1;">100%</div>
            <p style="font-size: 12.5px; color: #6C7E8E; line-height: 1.35; margin: 6px 0 0;">Focused on Schools, ELC's and Universities</p>
          </div>
        </div>
        <a href="#strategy-form" class="nf2-cta" style="display: inline-flex; align-items: center; gap: 10px; background: #15A6AE; color: #fff; font-weight: 700; font-size: 17px; padding: 18px 34px; border-radius: 11px; text-decoration: none; box-shadow: 0 12px 30px rgba(21,166,174,0.32);">Book your free strategy session
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </a>
        <p style="font-size: 13.5px; color: #8394A5; margin: 16px 0 0;">Your playbook should land within five minutes — check spam or promotions if it's missing.</p>
      </div>
      <div style="position: relative; padding: 20px 0 20px 20px;">
        <div style="position: relative; width: 100%; aspect-ratio: 4/3;">
          <div style="position: absolute; inset: 0; border-radius: 20px; overflow: hidden; border: 1px solid #E7EEF1; z-index: 2; background: #FFFFFF;">
            <img class="nf2-img-slot" src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/step-2/assets/nf2-hero-strategy-photo.png" alt="Strategy session photo">
          </div>
          <div style="position: absolute; top: -10px; left: -28px; z-index: 4; background: #15A6AE; color: #fff; font-weight: 800; font-size: 12px; letter-spacing: 0.04em; padding: 8px 16px; transform: rotate(-6deg); box-shadow: 0 10px 20px rgba(21,166,174,0.35); clip-path: polygon(0 0, 100% 0, 92% 50%, 100% 100%, 0 100%);">MEET THE TEAM</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SCHOOL STRIP -->
  <section style="padding: 8px 0 24px; position: relative; z-index: 2;">
    <div class="nf2-marquee-mask" style="overflow: hidden;">
      <div class="nf2-marquee-track" style="width: max-content;">
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Bundaberg Christian College</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Mount Alvernia College</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Grace Lutheran Primary School</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Oasis International School</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">St Andrew's College</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Griffith University</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Bundaberg Christian College</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Mount Alvernia College</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Grace Lutheran Primary School</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Oasis International School</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">St Andrew's College</span>
        <span style="font-weight: 800; font-size: 20px; color: #A9B4BC; white-space: nowrap;">Griffith University</span>
      </div>
    </div>
  </section>

  <!-- 02 MEET THE FOUNDER -->
  <section style="position: relative; overflow: hidden; padding: 88px 24px;">
    <div style="position: relative; z-index: 1; max-width: 980px; margin: 0 auto;">
      <div class="nf2-fade" style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
        <div style="font-weight: 700; font-size: 13px; letter-spacing: 0.14em; text-transform: uppercase; color: #15A6AE; margin-bottom: 12px;">While your playbook is on its way</div>
        <h2 style="font-weight: 800; font-size: clamp(24px, 3vw, 30px); color: #16263F; margin: 0 0 14px;">Meet James Thomson, the founder behind the playbook</h2>
        <p style="font-size: 16px; color: #51637A; margin: 0;">Schools aren't short of marketing advice. They're short of marketing that actually moves enrolments.</p>
      </div>
      <div style="display: grid; grid-template-columns: 0.85fr 1.15fr; gap: 48px; align-items: center;" class="nf2-about">
        <div style="position: relative;">
          <div style="position: absolute; left: -20px; top: -20px; width: 90px; height: 60px; border: 2px solid #15A6AE; border-radius: 6px; opacity: 0.5; z-index: 0;"></div>
          <div style="position: absolute; right: -22px; bottom: -22px; width: 110px; height: 34px; background: #15A6AE; border-radius: 6px; opacity: 0.35; transform: rotate(-4deg); z-index: 0;"></div>
          <div style="position: relative; z-index: 1; aspect-ratio: 4/5; border-radius: 20px; overflow: hidden; box-shadow: 0 24px 48px rgba(22,38,63,0.22); border: 1px solid #E7EEF1;">
            <img class="nf2-img-slot" src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/step-2/assets/nf2-founder-photo.jpg" alt="James Thomson, founder" style="height: auto;">
          </div>
          <div style="position: relative; z-index: 1; margin-top: 16px; text-align: center;">
            <p style="font-weight: 800; font-size: 16px; color: #16263F; margin: 0;">James Thomson</p>
            <p style="font-size: 13px; color: #51637A; margin: 2px 0 0;">Founder &amp; Strategy Lead, Novaflow Digital</p>
          </div>
        </div>
        <div>
          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; margin-bottom: 26px;" class="nf2-founder-stats">
            <div style="border: 1px solid #E4EDEF; border-radius: 14px; padding: 20px 16px;">
              <div style="font-weight: 800; font-size: 32px; color: #16263F; line-height: 1;">7 yrs</div>
              <p style="font-size: 12px; color: #6C7E8E; line-height: 1.35; margin: 8px 0 0;">Working inside independent schools</p>
            </div>
            <div style="border: 1px solid #E4EDEF; border-radius: 14px; padding: 20px 16px;">
              <div style="font-weight: 800; font-size: 32px; color: #16263F; line-height: 1;">450→850</div>
              <p style="font-size: 12px; color: #6C7E8E; line-height: 1.35; margin: 8px 0 0;">Students grown at one school</p>
            </div>
            <div style="border: 1px solid #E4EDEF; border-radius: 14px; padding: 20px 16px;">
              <div style="font-weight: 800; font-size: 32px; color: #16263F; line-height: 1;">1250→1300</div>
              <p style="font-size: 12px; color: #6C7E8E; line-height: 1.35; margin: 8px 0 0;">A college back to full capacity</p>
            </div>
          </div>
          <p style="font-size: 15px; line-height: 1.65; color: #45566A; margin: 0 0 22px;">Before founding Novaflow Digital, James spent seven years growing enrolments inside independent schools. He wrote this playbook for marketers and principals staring down sharper competition and slower-deciding parents — operator-grade thinking from someone who has sat on your side of the table.</p>
          <div style="border-left: 3px solid #15A6AE; padding-left: 18px;">
            <p style="font-size: 15.5px; font-style: italic; line-height: 1.6; color: #16263F; margin: 0 0 8px;">"A good marketing campaign is like a good bottle of wine. It needs time. The Schools that try to compress 6 weeks of live campaign into 2 always end up paying more for less."</p>
            <p style="font-size: 12.5px; font-weight: 700; color: #15A6AE; margin: 0; text-transform: uppercase; letter-spacing: 0.04em;">James Thomson, Novaflow Digital</p>
          </div>
          <a href="#strategy-form" class="nf2-cta" style="display: inline-flex; align-items: center; gap: 10px; background: #15A6AE; color: #fff; font-weight: 700; font-size: 16px; padding: 15px 28px; border-radius: 11px; text-decoration: none; box-shadow: 0 12px 26px rgba(21,166,174,0.28); margin-top: 26px;">Book your free strategy session
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 03 WHY BOOK -->
  <section style="padding: 88px 24px;">
    <div style="max-width: 1080px; margin: 0 auto;">
      <h2 style="text-align: center; font-weight: 800; font-size: clamp(24px, 3vw, 30px); color: #16263F; margin: 0 0 12px;">What happens during the session?</h2>
      <p style="text-align: center; font-size: 16px; color: #51637A; margin: 0 0 40px;">Simple. Practical. Focused on your school.</p>
      <div class="nf2-steps" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 40px;">
        <div class="nf2-card-hover" style="background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 14px; padding: 22px; text-align: left;">
          <div style="width: 36px; height: 36px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M4 20V10M12 20V4M20 20v-7" stroke="#0E8C93" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          </div>
          <p style="font-weight: 700; font-size: 15.5px; color: #16263F; margin: 0 0 6px;">Understand your current enrolment goals</p>
          <p style="font-size: 13.5px; color: #6C7E8E; line-height: 1.5; margin: 0;">We start by understanding your school, current challenges and upcoming priorities.</p>
        </div>
        <div class="nf2-card-hover" style="background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 14px; padding: 22px; text-align: left;">
          <div style="width: 36px; height: 36px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8.5" stroke="#0E8C93" stroke-width="2.2"></circle><circle cx="12" cy="12" r="3" stroke="#0E8C93" stroke-width="2.2"></circle></svg>
          </div>
          <p style="font-weight: 700; font-size: 15.5px; color: #16263F; margin: 0 0 6px;">Review your marketing</p>
          <p style="font-size: 13.5px; color: #6C7E8E; line-height: 1.5; margin: 0;">We'll review your campaigns, Open Days and enrolment activity together.</p>
        </div>
        <div class="nf2-card-hover" style="background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 14px; padding: 22px; text-align: left;">
          <div style="width: 36px; height: 36px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect x="4" y="5" width="16" height="15" rx="2" stroke="#0E8C93" stroke-width="2.2"></rect><path d="M4 9.5h16M8 3v4M16 3v4" stroke="#0E8C93" stroke-width="2.2" stroke-linecap="round"></path></svg>
          </div>
          <p style="font-weight: 700; font-size: 15.5px; color: #16263F; margin: 0 0 6px;">Identify your biggest opportunities</p>
          <p style="font-size: 13.5px; color: #6C7E8E; line-height: 1.5; margin: 0;">We'll highlight the areas likely to have the biggest impact over the next few months.</p>
        </div>
        <div class="nf2-card-hover" style="background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 14px; padding: 22px; text-align: left;">
          <div style="width: 36px; height: 36px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M4 17l6-6 4 4 6-8" stroke="#0E8C93" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          </div>
          <p style="font-weight: 700; font-size: 15.5px; color: #16263F; margin: 0 0 6px;">Leave with a practical roadmap</p>
          <p style="font-size: 13.5px; color: #6C7E8E; line-height: 1.5; margin: 0;">You'll finish with clear priorities and practical next steps — not generic advice.</p>
        </div>
      </div>
      <div style="text-align: center;">
        <a href="#strategy-form" class="nf2-cta" style="display: inline-flex; align-items: center; gap: 10px; background: #15A6AE; color: #fff; font-weight: 700; font-size: 17px; padding: 18px 34px; border-radius: 11px; text-decoration: none; box-shadow: 0 12px 30px rgba(21,166,174,0.32);">Book your free strategy session
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- HOW WE DO IT -->
  <section style="background: #16263F; padding: 88px 24px;">
    <div style="max-width: 760px; margin: 0 auto;">
      <div style="font-weight: 700; font-size: 13px; letter-spacing: 0.14em; text-transform: uppercase; color: #15A6AE; text-align: center; margin-bottom: 14px;">Why schools find this session valuable</div>
      <h2 style="text-align: center; font-weight: 800; font-size: clamp(24px, 3vw, 30px); color: #fff; margin: 0 0 40px;">This isn't a sales call. It's a working session.</h2>
      <div class="nf2-howwedoit-item" style="display: flex; align-items: flex-start; gap: 24px; padding-bottom: 32px; border-bottom: 1px solid rgba(255,255,255,0.12);">
        <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 10px; background: rgba(255,255,255,0.08); color: #15A6AE; font-weight: 800; font-size: 17px; display: flex; align-items: center; justify-content: center;">01</div>
        <div>
          <h3 style="font-weight: 800; font-size: 21px; color: #fff; margin: 0 0 10px;">Every recommendation is tailored to your school.</h3>
          <p style="font-size: 15.5px; color: #A9BAC9; line-height: 1.6; margin: 0;">We don't use generic marketing templates. Every recommendation is based on your enrolment goals, campaign calendar, Open Days and current challenges.</p>
        </div>
      </div>
      <div class="nf2-howwedoit-item" style="display: flex; align-items: flex-start; gap: 24px; padding: 32px 0; border-bottom: 1px solid rgba(255,255,255,0.12);">
        <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 10px; background: rgba(255,255,255,0.08); color: #15A6AE; font-weight: 800; font-size: 17px; display: flex; align-items: center; justify-content: center;">02</div>
        <div>
          <h3 style="font-weight: 800; font-size: 21px; color: #fff; margin: 0 0 10px;">Practical advice you can act on immediately.</h3>
          <p style="font-size: 15.5px; color: #A9BAC9; line-height: 1.6; margin: 0;">You'll leave with clear priorities, practical next steps and ideas your team can start implementing straight away.</p>
        </div>
      </div>
      <div class="nf2-howwedoit-item" style="display: flex; align-items: flex-start; gap: 24px; padding-top: 32px;">
        <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 10px; background: rgba(255,255,255,0.08); color: #15A6AE; font-weight: 800; font-size: 17px; display: flex; align-items: center; justify-content: center;">03</div>
        <div>
          <h3 style="font-weight: 800; font-size: 21px; color: #fff; margin: 0 0 10px;">Built by people who understand school marketing.</h3>
          <p style="font-size: 15.5px; color: #A9BAC9; line-height: 1.6; margin: 0;">You'll speak directly with a Novaflow strategist who works exclusively with Australian schools — not a generalist reading from a script.</p>
        </div>
      </div>
      <div style="text-align: center; margin-top: 44px;">
        <a href="#strategy-form" class="nf2-cta" style="display: inline-flex; align-items: center; gap: 10px; background: #15A6AE; color: #fff; font-weight: 700; font-size: 17px; padding: 18px 34px; border-radius: 11px; text-decoration: none; box-shadow: 0 12px 30px rgba(21,166,174,0.32);">Book your free strategy session
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- 05 CASE STUDIES -->
  <section style="padding: 88px 24px; background: #F7FBFC;">
    <div style="max-width: 1080px; margin: 0 auto;">
      <h2 style="text-align: center; font-weight: 800; font-size: clamp(24px, 3vw, 30px); color: #16263F; margin: 0 0 12px;">Real Schools, Real Growth</h2>
      <p style="text-align: center; font-size: 16px; color: #51637A; margin: 0 0 40px;">Real results from Australian independent schools using structured enrolment marketing.</p>
      <div style="background: #fff; border: 1px solid #E7EEF1; border-radius: 22px; padding: 6px; box-shadow: 0 24px 50px rgba(22,38,63,0.1); margin-bottom: 24px; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 40px; right: 40px; height: 5px; background: #15A6AE; border-radius: 0 0 6px 6px;"></div>
        <div style="display: grid; grid-template-columns: 1.15fr 1fr; gap: 0; align-items: stretch;" class="nf2-case-featured">
          <div style="padding: 44px 40px 36px;">
            <p style="font-weight: 800; font-size: 26px; color: #16263F; margin: 0 0 4px;">Bundaberg Christian College</p>
            <p style="font-weight: 700; font-size: 12.5px; letter-spacing: 0.06em; text-transform: uppercase; color: #15A6AE; margin: 0 0 20px;">Full Attribution, Full Confidence</p>
            <p style="font-size: 15px; color: #51637A; line-height: 1.55; margin: 0 0 30px;">Zero attribution to full traceability in one campaign period.</p>
            <div class="nf2-case-kpis" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 24px;">
              <div>
                <div style="width: 46px; height: 46px; border-radius: 50%; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                  <svg width="21" height="21" viewBox="0 0 24 24" fill="none"><path d="M6 3h9l5 5v13H6z" stroke="#0E8C93" stroke-width="2"></path><path d="M9 12h6M9 16h6" stroke="#0E8C93" stroke-width="2" stroke-linecap="round"></path></svg>
                </div>
                <div style="font-weight: 800; font-size: 32px; color: #15A6AE; line-height: 1;">75</div>
                <p style="font-size: 12.5px; font-weight: 700; color: #16263F; margin: 8px 0 8px;">Traceable Applications</p>
                <span style="display: inline-block; background: #E4F4F5; color: #0E8C93; font-size: 11px; font-weight: 700; padding: 4px 9px; border-radius: 100px;">100% traced</span>
              </div>
              <div>
                <div style="width: 46px; height: 46px; border-radius: 50%; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                  <svg width="21" height="21" viewBox="0 0 24 24" fill="none"><path d="M12 2v20M17 6H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="#0E8C93" stroke-width="2" stroke-linecap="round"></path></svg>
                </div>
                <div style="font-weight: 800; font-size: 32px; color: #15A6AE; line-height: 1;">&lt;$25</div>
                <p style="font-size: 12.5px; font-weight: 700; color: #16263F; margin: 8px 0 8px;">Cost Per Application</p>
                <span style="display: inline-block; background: #E4F4F5; color: #0E8C93; font-size: 11px; font-weight: 700; padding: 4px 9px; border-radius: 100px;">below target</span>
              </div>
              <div>
                <div style="width: 46px; height: 46px; border-radius: 50%; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                  <svg width="21" height="21" viewBox="0 0 24 24" fill="none"><path d="M4 5h16v14H4z" stroke="#0E8C93" stroke-width="2" stroke-linejoin="round"></path><path d="M4 7l8 6 8-6" stroke="#0E8C93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </div>
                <div style="font-weight: 800; font-size: 32px; color: #15A6AE; line-height: 1;">67</div>
                <p style="font-size: 12.5px; font-weight: 700; color: #16263F; margin: 8px 0 8px;">Open Day Registrations</p>
                <span style="display: inline-block; background: #E4F4F5; color: #0E8C93; font-size: 11px; font-weight: 700; padding: 4px 9px; border-radius: 100px;">on campaign</span>
              </div>
            </div>
            <div style="background: #F7FBFC; border-radius: 14px; padding: 18px 20px; display: flex; gap: 12px; align-items: flex-start;">
              <span style="font-size: 26px; color: #15A6AE; font-weight: 800; line-height: 1;">"</span>
              <div>
                <p style="font-size: 14px; color: #16263F; line-height: 1.55; margin: 0 0 8px;">Novaflow's framework gave us full visibility into what was actually working — no more guessing.</p>
                <p style="font-size: 12px; font-weight: 700; color: #15A6AE; margin: 0; text-transform: uppercase; letter-spacing: 0.04em;">Marketing Manager • Bundaberg Christian College</p>
              </div>
            </div>
          </div>
          <div style="position: relative; min-height: 100%; border-radius: 0 18px 18px 0; overflow: hidden;">
            <img class="nf2-img-slot" src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/step-2/assets/nf2-case-bundaberg-photo.jpg" alt="Bundaberg Christian College campus">
            <div style="position: absolute; left: 20px; bottom: 20px; right: 20px; background: #16263F; border-radius: 12px; padding: 14px 18px; display: flex; align-items: center; gap: 10px;">
              <div style="width: 26px; height: 26px; border-radius: 50%; background: #15A6AE; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </div>
              <p style="font-weight: 700; font-size: 14px; color: #fff; margin: 0; line-height: 1.3;">Zero attribution.<br>Full traceability.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="nf2-steps" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        <div class="nf2-card-hover" style="background: #fff; border: 1px solid #E7EEF1; border-radius: 18px; padding: 30px; box-shadow: 0 14px 30px rgba(22,38,63,0.06);">
          <div style="width: 40px; height: 3px; background: #15A6AE; border-radius: 2px; margin-bottom: 18px;"></div>
          <p style="font-weight: 800; font-size: 18px; color: #16263F; margin: 0 0 4px;">Redlands College</p>
          <p style="font-weight: 700; font-size: 11.5px; letter-spacing: 0.06em; text-transform: uppercase; color: #15A6AE; margin: 0 0 14px;">Always-On Enrolment Strategy</p>
          <p style="font-size: 13.5px; color: #6C7E8E; line-height: 1.5; margin: 0 0 22px;">A full year of always-on activity across three sub-schools.</p>
          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px;">
            <div style="border-left: 2px solid #E7EEF1; padding-left: 12px;">
              <div style="font-weight: 800; font-size: 24px; color: #15A6AE; line-height: 1;">548</div>
              <p style="font-size: 11.5px; color: #51637A; margin: 5px 0 0; line-height: 1.3;">Enrolment Applications</p>
            </div>
            <div style="border-left: 2px solid #E7EEF1; padding-left: 12px;">
              <div style="font-weight: 800; font-size: 24px; color: #15A6AE; line-height: 1;">342</div>
              <p style="font-size: 11.5px; color: #51637A; margin: 5px 0 0; line-height: 1.3;">Open Day &amp; Twilight Registrations</p>
            </div>
            <div style="border-left: 2px solid #E7EEF1; padding-left: 12px;">
              <div style="font-weight: 800; font-size: 24px; color: #15A6AE; line-height: 1;">5.99%</div>
              <p style="font-size: 11.5px; color: #51637A; margin: 5px 0 0; line-height: 1.3;">Meta CTR (avg 1%)</p>
            </div>
          </div>
          <div style="margin-top: 18px; background: #F7FBFC; border-radius: 12px; padding: 14px 16px;">
            <p style="font-size: 13px; color: #16263F; line-height: 1.5; margin: 0 0 6px; font-style: italic;">"They understand our school's values and the heart of the school — it's put a fresh take on how we market."</p>
            <p style="font-size: 11.5px; font-weight: 700; color: #15A6AE; margin: 0; text-transform: uppercase; letter-spacing: 0.03em;">Marketing &amp; Communications Manager</p>
          </div>
        </div>
        <div class="nf2-card-hover" style="background: #fff; border: 1px solid #E7EEF1; border-radius: 18px; padding: 30px; box-shadow: 0 14px 30px rgba(22,38,63,0.06);">
          <div style="width: 40px; height: 3px; background: #15A6AE; border-radius: 2px; margin-bottom: 18px;"></div>
          <p style="font-weight: 800; font-size: 18px; color: #16263F; margin: 0 0 4px;">Mount Alvernia College</p>
          <p style="font-weight: 700; font-size: 11.5px; letter-spacing: 0.06em; text-transform: uppercase; color: #15A6AE; margin: 0 0 14px;">Record-Breaking Open Day</p>
          <p style="font-size: 13.5px; color: #6C7E8E; line-height: 1.5; margin: 0 0 22px;">A four-month campaign that broke the school's Open Day record.</p>
          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px;">
            <div style="border-left: 2px solid #E7EEF1; padding-left: 12px;">
              <div style="font-weight: 800; font-size: 24px; color: #15A6AE; line-height: 1;">51</div>
              <p style="font-size: 11.5px; color: #51637A; margin: 5px 0 0; line-height: 1.3;">Enrolment Applications</p>
            </div>
            <div style="border-left: 2px solid #E7EEF1; padding-left: 12px;">
              <div style="font-weight: 800; font-size: 24px; color: #15A6AE; line-height: 1;">62%</div>
              <p style="font-size: 11.5px; color: #51637A; margin: 5px 0 0; line-height: 1.3;">Web Traffic From Ads</p>
            </div>
            <div style="border-left: 2px solid #E7EEF1; padding-left: 12px;">
              <div style="font-weight: 800; font-size: 24px; color: #15A6AE; line-height: 1;">+400</div>
              <p style="font-size: 11.5px; color: #51637A; margin: 5px 0 0; line-height: 1.3;">Open Day Attendance YoY</p>
            </div>
          </div>
          <div style="margin-top: 18px; background: #F7FBFC; border-radius: 12px; padding: 14px 16px;">
            <p style="font-size: 13px; color: #16263F; line-height: 1.5; margin: 0 0 6px; font-style: italic;">"True experts who know the digital advertising landscape inside out — anything but 'set and forget,' with real care and strategy behind everything they do."</p>
            <p style="font-size: 11.5px; font-weight: 700; color: #15A6AE; margin: 0; text-transform: uppercase; letter-spacing: 0.03em;">Emma Velthuis • Head of Engagement</p>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 44px;">
        <a href="#strategy-form" class="nf2-cta" style="display: inline-flex; align-items: center; gap: 10px; background: #15A6AE; color: #fff; font-weight: 700; font-size: 17px; padding: 18px 34px; border-radius: 11px; text-decoration: none; box-shadow: 0 12px 30px rgba(21,166,174,0.32);">Book your free strategy session
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- SOCIAL PROOF -->
  <section style="padding: 88px 24px;">
    <div style="max-width: 1080px; margin: 0 auto;">
      <div class="nf2-fade" style="text-align: center; max-width: 640px; margin: 0 auto 36px;">
        <h2 style="font-weight: 800; font-size: clamp(24px, 3vw, 30px); color: #16263F; margin: 0 0 12px;">What school marketers say about working with us</h2>
        <p style="font-size: 15.5px; color: #51637A; margin: 0;">Real feedback from the school marketing teams we partner with.</p>
      </div>
      <div style="position: relative;" id="nf2-carousel-wrap">
        <div style="overflow: hidden;">
          <div id="nf2-testimonial-track" style="display: flex; transition: transform 0.4s ease; gap: 20px; transform: translateX(0);">
            <div style="flex: 0 0 calc(33.333% - 14px); background: #16263F; border: 1px solid #16263F; border-radius: 16px; padding: 30px; box-shadow: 0 20px 40px rgba(22,38,63,0.25); position: relative;" class="nf2-testimonial-card nf2-card-hover">
              <div style="position: absolute; top: 8px; right: 24px; z-index: 2; background: #15A6AE; color: #F7FBFC; font-weight: 700; font-size: 15px; letter-spacing: 0.06em; text-transform: uppercase; padding: 4px 10px; border-radius: 100px; box-shadow: 0 6px 14px rgba(21,166,174,0.35); white-space: nowrap">Featured</div>
              <div style="color: #F5A623; margin-bottom: 14px; letter-spacing: 2px; font-size: 15px;">★★★★★</div>
              <p style="font-size: 15px; line-height: 1.55; color: #fff; margin: 0 0 20px;">"They understand our School's values and the heart of the School. That's been obvious in the ads, and it's put a fresh take on how we market."</p>
              <p style="font-size: 14px; color: #E4F4F5; margin: 0; font-weight: 600;">Alice Thompson</p>
              <p style="font-size: 12.5px; color: #A9BAC9; margin: 2px 0 0;">Marketing &amp; Communications Manager, Bundaberg Christian College</p>
            </div><div style="flex: 0 0 calc(33.333% - 14px); background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 16px; padding: 30px;" class="nf2-testimonial-card">
              <div style="color: #F5A623; margin-bottom: 14px; letter-spacing: 2px; font-size: 15px;">★★★★★</div>
              <p style="font-size: 15px; line-height: 1.55; color: #16263F; margin: 0 0 20px;">"True experts: genuine, sharp, and great to work with. Real care and strategy behind everything they do. Anything but set and forget."</p>
              <p style="font-size: 14px; color: #51637A; margin: 0; font-weight: 600;">Emma Velthuis</p>
              <p style="font-size: 12.5px; color: #8394A5; margin: 2px 0 0;">Head of Engagement, Marketing &amp; Comms, Mount Alvernia College</p>
            </div>
            <div style="flex: 0 0 calc(33.333% - 14px); background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 16px; padding: 30px;" class="nf2-testimonial-card nf2-card-hover">
              <div style="color: #F5A623; margin-bottom: 14px; letter-spacing: 2px; font-size: 15px;">★★★★★</div>
              <p style="font-size: 15px; line-height: 1.55; color: #16263F; margin: 0 0 20px;">"Clear communication, strong enrolment outcomes, and monthly reports that showed real impact. We'd highly recommend Novaflow to any School."</p>
              <p style="font-size: 14px; color: #51637A; margin: 0; font-weight: 600;">Susanna Rossetto</p>
              <p style="font-size: 12.5px; color: #8394A5; margin: 2px 0 0;">Marketing &amp; Communications Officer, Grace Lutheran Primary School</p>
            </div>
            <div style="flex: 0 0 calc(33.333% - 14px); background: #F7FBFC; border: 1px solid #E7EEF1; border-radius: 16px; padding: 30px;" class="nf2-testimonial-card nf2-card-hover">
              <div style="color: #F5A623; margin-bottom: 14px; letter-spacing: 2px; font-size: 15px;">★★★★★</div>
              <p style="font-size: 15px; line-height: 1.55; color: #16263F; margin: 0 0 20px;">"The campaign delivered real results. Enrolment applications were directly attributable to their work. Reporting was exceptional and easy to share with leadership."</p>
              <p style="font-size: 14px; color: #51637A; margin: 0; font-weight: 600;">Narrelle Paige</p>
              <p style="font-size: 12.5px; color: #8394A5; margin: 2px 0 0;">Director of Marketing and Communications</p>
            </div>
          </div>
        </div>
        <button class="nf2-carousel-btn" onclick="nf2PrevTestimonial()" style="position: absolute; top: 50%; left: -18px; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: #fff; border: 1px solid #E7EEF1; box-shadow: 0 8px 20px rgba(22,38,63,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M15 6l-6 6 6 6" stroke="#16263F" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button class="nf2-carousel-btn" onclick="nf2NextTestimonial()" style="position: absolute; top: 50%; right: -18px; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: #fff; border: 1px solid #E7EEF1; box-shadow: 0 8px 20px rgba(22,38,63,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="#16263F" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
      </div>
      <div id="nf2-dots" style="display: flex; justify-content: center; gap: 8px; margin-top: 28px;"></div>
    </div>
  </section>

  <!-- TRUSTED LOGOS -->
  <section style="padding: 88px 24px;">
    <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
      <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/step-2/assets/school-partner-logos.png" alt="Trusted by leading Australian schools and educational partners" style="width: 100%; height: auto; display: block;">
    </div>
  </section>

  <!-- WHY NOW -->
  <section style="padding: 88px 24px; background: #F7FBFC;">
    <div style="max-width: 980px; margin: 0 auto;">
      <div class="nf2-fade" style="text-align: center; max-width: 640px; margin: 0 auto 48px;">
        <div style="font-weight: 700; font-size: 13px; letter-spacing: 0.14em; text-transform: uppercase; color: #15A6AE; margin-bottom: 12px;">Why now</div>
        <h2 style="font-weight: 800; font-size: clamp(24px, 3vw, 30px); color: #16263F; margin: 0 0 14px;">The window to act is getting narrower every year.</h2>
        <p style="font-size: 16px; color: #51637A; margin: 0;">Australia's student pool is shrinking, ad costs are climbing, and the schools compounding early are pulling further ahead. Waiting a term costs more than it saves.</p>
      </div>
      <div class="nf2-steps" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div class="nf2-card-hover" style="background: #fff; border: 1px solid #E7EEF1; border-radius: 14px; padding: 24px; text-align: left;">
          <div style="width: 34px; height: 34px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.35-9.5-8.8C.8 8.4 2.6 4.5 6.3 4c2-.27 3.6.7 5.7 3 2.1-2.3 3.7-3.27 5.7-3 3.7.5 5.5 4.4 3.8 8.2C19 16.65 12 21 12 21z" stroke="#0E8C93" stroke-width="2" stroke-linejoin="round"></path></svg>
          </div>
          <div style="font-weight: 800; font-size: 28px; color: #15A6AE; line-height: 1; margin-bottom: 10px;">1.48</div>
          <p style="font-weight: 700; font-size: 14.5px; color: #16263F; margin: 0 0 6px;">Australia's fertility rate</p>
          <p style="font-size: 13px; color: #6C7E8E; line-height: 1.5; margin: 0;">The lowest ever recorded — the pool of prospective students is shrinking every year.</p>
        </div>
        <div class="nf2-card-hover" style="background: #fff; border: 1px solid #E7EEF1; border-radius: 14px; padding: 24px; text-align: left;">
          <div style="width: 34px; height: 34px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"><path d="M3 17l6-6 4 4 8-9" stroke="#0E8C93" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 6h6v6" stroke="#0E8C93" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          </div>
          <div style="font-weight: 800; font-size: 28px; color: #15A6AE; line-height: 1; margin-bottom: 10px;">+21%</div>
          <p style="font-weight: 700; font-size: 14.5px; color: #16263F; margin: 0 0 6px;">Rise in ad cost per lead</p>
          <p style="font-size: 13px; color: #6C7E8E; line-height: 1.5; margin: 0;">Every term you delay, the same result costs more to achieve.</p>
        </div>
        <div class="nf2-card-hover" style="background: #fff; border: 1px solid #E7EEF1; border-radius: 14px; padding: 24px; text-align: left;">
          <div style="width: 34px; height: 34px; border-radius: 9px; background: #E4F4F5; display: flex; align-items: center; justify-content: center; margin-bottom: 14px;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none"><rect x="4" y="5" width="16" height="15" rx="2" stroke="#0E8C93" stroke-width="2.2"></rect><path d="M4 9.5h16M8 3v4M16 3v4" stroke="#0E8C93" stroke-width="2.2" stroke-linecap="round"></path></svg>
          </div>
          <div style="font-weight: 800; font-size: 28px; color: #15A6AE; line-height: 1; margin-bottom: 10px;">6 wks</div>
          <p style="font-weight: 700; font-size: 14.5px; color: #16263F; margin: 0 0 6px;">Minimum Open Day runway</p>
          <p style="font-size: 13px; color: #6C7E8E; line-height: 1.5; margin: 0;">Miss the window and your next serious shot is a full term away.</p>
        </div>
      </div>
      <p style="text-align: center; font-size: 15px; color: #51637A; max-width: 640px; margin: 32px auto 0;">The schools winning in 2026 aren't the ones with the biggest budgets — they're the ones making sharper decisions sooner. A 30-minute session now is the difference between planning for next term and reacting to it.</p>
    </div>
  </section>

  <!-- 04 FORM -->
  <section id="strategy-form" style="background: #16263F; padding: 88px 24px;">
    <div style="max-width: 640px; margin: 0 auto;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-weight: 800; font-size: clamp(26px, 3.2vw, 32px); color: #fff; margin: 0 0 12px;">Ready to turn your playbook into a practical action plan?</h2>
        <p style="font-size: 15.5px; color: #A9BAC9; margin: 0;">Downloading the playbook is the first step. Book your free strategy session and we'll help you prioritise the opportunities most likely to improve your enrolment marketing — no obligation, no sales pressure.</p>
      </div>
      <div id="nf2-form" style="background: #fff; border-radius: 18px; padding: 32px; box-shadow: 0 30px 60px rgba(0,0,0,0.25); display: flex; flex-direction: column; gap: 14px;">
        <!-- ActiveCampaign embed form ("Book Your Free Strategy Session").
             Lead capture, qualification fields (school/role/challenge), the
             thank-you message, and any redirect are all configured in
             ActiveCampaign's form settings, not in this page's JS. -->
        <div class="_form_1"></div><script src="https://novaflowdigital.activehosted.com/f/embed.php?id=1" charset="utf-8"></script>
        <div style="background: linear-gradient(135deg, #EAF6F6 0%, #F2F8F8 100%); border: 1px solid #DCEEEE; border-radius: 16px; padding: 22px 22px 18px; margin-bottom: 4px;">
          <p style="font-weight: 800; font-size: 15px; color: #16263F; margin: 0 0 14px;">Your session includes</p>
          <div class="nf2-includes-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px 14px;">
            <div style="display: flex; align-items: center; gap: 9px;">
              <div style="width: 24px; height: 24px; border-radius: 50%; background: #15A6AE; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </div>
              <p style="font-size: 13.5px; font-weight: 600; color: #16263F; margin: 0;">30-min strategy call</p>
            </div>
            <div style="display: flex; align-items: center; gap: 9px;">
              <div style="width: 24px; height: 24px; border-radius: 50%; background: #15A6AE; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </div>
              <p style="font-size: 13.5px; font-weight: 600; color: #16263F; margin: 0;">Marketing review</p>
            </div>
            <div style="display: flex; align-items: center; gap: 9px;">
              <div style="width: 24px; height: 24px; border-radius: 50%; background: #15A6AE; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </div>
              <p style="font-size: 13.5px; font-weight: 600; color: #16263F; margin: 0;">Campaign recommendations</p>
            </div>
            <div style="display: flex; align-items: center; gap: 9px;">
              <div style="width: 24px; height: 24px; border-radius: 50%; background: #15A6AE; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </div>
              <p style="font-size: 13.5px; font-weight: 600; color: #16263F; margin: 0;">Open Day advice</p>
            </div>
            <div style="display: flex; align-items: center; gap: 9px; grid-column: 1 / -1;">
              <div style="width: 24px; height: 24px; border-radius: 50%; background: #15A6AE; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              </div>
              <p style="font-size: 13.5px; font-weight: 600; color: #16263F; margin: 0;">Personalised roadmap</p>
            </div>
          </div>
        </div>
        <div style="display: flex; align-items: center; justify-content: center; gap: 18px; padding-top: 4px;">
          <div style="display: flex; align-items: center; gap: 6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M12 2l7 3.5v5.6c0 4.8-3 8.9-7 10.4-4-1.5-7-5.6-7-10.4V5.5L12 2z" stroke="#15A6AE" stroke-width="2" stroke-linejoin="round"></path></svg>
            <span style="font-size: 12.5px; color: #7C8CA0; font-weight: 600;">No obligation</span>
          </div>
          <div style="display: flex; align-items: center; gap: 6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#15A6AE" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <span style="font-size: 12.5px; color: #7C8CA0; font-weight: 600;">No sales pressure</span>
          </div>
          <div style="display: flex; align-items: center; gap: 6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><rect x="4" y="10" width="16" height="10" rx="2" stroke="#15A6AE" stroke-width="2"></rect><path d="M8 10V7a4 4 0 0 1 8 0v3" stroke="#15A6AE" stroke-width="2"></path></svg>
            <span style="font-size: 12.5px; color: #7C8CA0; font-weight: 600;">Details kept private</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 06 WHAT HAPPENS NEXT -->
  <section style="position: relative; overflow: hidden; background: radial-gradient(1000px 460px at 50% 110%, #E4F4F5 0%, rgba(228,244,245,0) 60%), linear-gradient(180deg, #FFFFFF 0%, #F7FBFC 100%); padding: 88px 24px;">
    <div style="max-width: 980px; margin: 0 auto; text-align: center;">
      <div style="font-weight: 700; font-size: 13px; letter-spacing: 0.14em; text-transform: uppercase; color: #15A6AE; margin-bottom: 14px;">Before you go</div>
      <h2 style="font-weight: 800; font-size: clamp(24px, 3.2vw, 32px); color: #16263F; margin: 0 0 14px;">What happens after you submit the form</h2>
      <p style="font-size: 16px; color: #51637A; max-width: 520px; margin: 0 auto 44px;">No hard sell, no waiting around — here's exactly what to expect once you hit submit.</p>
      <div style="position: relative;">
        <div class="nf2-timeline-line" style="position: absolute; top: 30px; left: 10%; right: 10%; height: 2px; background: repeating-linear-gradient(90deg, #BFE0E0 0, #BFE0E0 8px, transparent 8px, transparent 16px);"></div>
        <div class="nf2-steps" style="position: relative; display: grid; grid-template-columns: repeat(5, 1fr); gap: 22px;">
          <div style="text-align: center;">
            <div class="nf2-step-circle" style="width: 60px; height: 60px; border-radius: 50%; background: #16263F; color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; box-shadow: 0 10px 22px rgba(22,38,63,0.18); position: relative; z-index: 1;">
<svg class="nf2-step-arrow" width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 12h13M12 5l7 7-7 7" stroke="#15A6AE" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <h3 style="font-weight: 700; font-size: 16.5px; color: #16263F; margin: 0;">Submit your details</h3>
          </div>
          <div style="text-align: center;">
            <div class="nf2-step-circle" style="width: 60px; height: 60px; border-radius: 50%; background: #16263F; color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; box-shadow: 0 10px 22px rgba(22,38,63,0.18); position: relative; z-index: 1;">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 5h16v14H4z" stroke="#15A6AE" stroke-width="2.2" stroke-linejoin="round"></path><path d="M4 7l8 6 8-6" stroke="#15A6AE" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <h3 style="font-weight: 700; font-size: 16.5px; color: #16263F; margin: 0;">We review your school's challenges</h3>
          </div>
          <div style="text-align: center;">
            <div class="nf2-step-circle" style="width: 60px; height: 60px; border-radius: 50%; background: #16263F; color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; box-shadow: 0 10px 22px rgba(22,38,63,0.18); position: relative; z-index: 1;">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.5" stroke="#15A6AE" stroke-width="2.2"></circle><path d="M5 20c0-3.9 3.1-7 7-7s7 3.1 7 7" stroke="#15A6AE" stroke-width="2.2" stroke-linecap="round"></path></svg>
            </div>
            <h3 style="font-weight: 700; font-size: 16.5px; color: #16263F; margin: 0;">Meet with a Novaflow strategist</h3>
          </div>
          <div style="text-align: center;">
            <div class="nf2-step-circle" style="width: 60px; height: 60px; border-radius: 50%; background: #15A6AE; color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; box-shadow: 0 10px 26px rgba(21,166,174,0.35); position: relative; z-index: 1;">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <h3 style="font-weight: 700; font-size: 16.5px; color: #16263F; margin: 0;">Receive practical recommendations</h3>
          </div>
          <div style="text-align: center;">
            <div class="nf2-step-circle" style="width: 60px; height: 60px; border-radius: 50%; background: #16263F; color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; box-shadow: 0 10px 22px rgba(22,38,63,0.18); position: relative; z-index: 1;">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="#15A6AE" stroke-width="2.2" stroke-linecap="round"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="#15A6AE" stroke-width="2.2" stroke-linejoin="round"></path></svg>
            </div>
            <h3 style="font-weight: 700; font-size: 16.5px; color: #16263F; margin: 0;">Apply them using your playbook</h3>
          </div>
        </div>
      </div>
      <a href="#strategy-form" class="nf2-cta" style="display: inline-flex; align-items: center; gap: 10px; background: #16263F; color: #fff; font-weight: 700; font-size: 16px; padding: 16px 32px; border-radius: 11px; text-decoration: none; margin-top: 52px; box-shadow: 0 14px 28px rgba(22,38,63,0.2);">Book your free strategy session
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
      </a>
    </div>
  </section>

  <footer style="background: #F7FBFC; border-top: 1px solid #E7EEF1; padding: 28px 24px; text-align: center;">
    <p style="font-size: 13px; color: #8394A5; margin: 0;">© Novaflow Digital. Working exclusively with schools across Australia.</p>
  </footer>

</div>

<script>
  (function() {
    var targets = document.querySelectorAll('.nf2-fade, .nf2-steps, .nf2-founder-stats, .nf2-case-featured, .nf2-testimonial-card');
    if (!('IntersectionObserver' in window)) { targets.forEach(function(t){ t.classList.add('nf2-visible'); }); return; }
    var io = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) { entry.target.classList.add('nf2-visible'); io.unobserve(entry.target); }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    targets.forEach(function(t) { io.observe(t); });
  })();

  var nf2Index = 0, nf2Timer;
  function nf2CardStep() {
    var track = document.getElementById('nf2-testimonial-track');
    var cards = track.children;
    if (!cards.length) return 0;
    return cards[0].getBoundingClientRect().width + 20;
  }
  function nf2MaxIndex() {
    var wrap = document.getElementById('nf2-carousel-wrap');
    var track = document.getElementById('nf2-testimonial-track');
    var cards = track.children;
    var step = nf2CardStep();
    var visible = Math.max(1, Math.round(wrap.getBoundingClientRect().width / step));
    return Math.max(0, cards.length - visible);
  }
  function nf2RenderTestimonials() {
    var track = document.getElementById('nf2-testimonial-track');
    var max = nf2MaxIndex();
    if (nf2Index > max) nf2Index = max;
    track.style.transform = 'translateX(-' + (nf2Index * nf2CardStep()) + 'px)';
    var dots = document.getElementById('nf2-dots');
    var wanted = max + 1;
    if (dots.children.length !== wanted) {
      dots.innerHTML = '';
      for (var i = 0; i < wanted; i++) {
        var d = document.createElement('div');
        d.style.cssText = 'width: 8px; height: 8px; border-radius: 50%; cursor: pointer; transition: background-color 0.2s ease;';
        d.onclick = (function(idx) { return function() { nf2Index = idx; nf2RenderTestimonials(); nf2ResetAutoplay(); }; })(i);
        dots.appendChild(d);
      }
    }
    Array.prototype.forEach.call(dots.children, function(d, i) {
      d.style.background = i === nf2Index ? '#15A6AE' : '#DCE4E8';
    });
  }
  function nf2PrevTestimonial() { var max = nf2MaxIndex(); nf2Index = nf2Index <= 0 ? max : nf2Index - 1; nf2RenderTestimonials(); nf2ResetAutoplay(); }
  function nf2NextTestimonial() { var max = nf2MaxIndex(); nf2Index = nf2Index >= max ? 0 : nf2Index + 1; nf2RenderTestimonials(); nf2ResetAutoplay(); }
  function nf2ResetAutoplay() {
    clearInterval(nf2Timer);
    nf2Timer = setInterval(nf2NextTestimonial, 5000);
  }
  window.addEventListener('resize', nf2RenderTestimonials);
  nf2RenderTestimonials();
  nf2ResetAutoplay();
  document.getElementById('nf2-carousel-wrap').addEventListener('mouseenter', function() { clearInterval(nf2Timer); });
  document.getElementById('nf2-carousel-wrap').addEventListener('mouseleave', nf2ResetAutoplay);

  // The booking form is now an ActiveCampaign embed (see the _form_1 /
  // embed.php?id=1 snippet above) — lead capture, the qualification
  // fields, and the thank-you message are all configured in
  // ActiveCampaign's form settings, not in this page's JS.
</script>

</body>
</html>
