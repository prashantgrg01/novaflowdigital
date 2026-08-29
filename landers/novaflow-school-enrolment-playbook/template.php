<?php
/* Template Name: NovaFlow — School Enrolment Playbook */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The 2026 School Enrolment Playbook — NovaFlow Digital</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; }
  body { margin: 0; }
  @keyframes nf-marquee { from { transform: translateX(0); } to { transform: translateX(-100%); } }
  .nf-marquee-mask { -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); }
  .nf-marquee-track:hover { animation-play-state: paused; }
  .nf-reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.75s cubic-bezier(.22,.9,.32,1), transform 0.75s cubic-bezier(.22,.9,.32,1); will-change: opacity, transform; }
  .nf-reveal.nf-in { opacity: 1; transform: translateY(0); }
  .nf-hover-lift { transition: transform 0.32s ease, box-shadow 0.32s ease; }
  .nf-hover-lift:hover { transform: translateY(-6px); }
  .nf-hover-img:hover { transform: scale(1.045) !important; }
  @media (max-width: 640px) {
    .nf-imagine-grid { grid-template-columns: 1fr !important; gap: 16px !important; }
    .nf-stat-row { grid-template-columns: 1fr 1fr !important; }
    .nf-roadmap-row { grid-template-columns: 1fr !important; gap: 28px !important; }
    .nf-roadmap-row > div[style*="grid-column: 1 / -1"] { display: none; }
  }
  @media (max-width: 900px) {
    .nf-hero { grid-template-columns: 1fr !important; gap: 40px !important; }
    .nf-who-grid { grid-template-columns: 1fr !important; }
    .nf-stat-row { grid-template-columns: 1fr 1fr !important; }
  }
  @media (max-width: 900px) {
    .nf-credibility-grid { grid-template-columns: 1fr !important; }
  }
  @media (max-width: 760px) {
    .nf-final-cta { grid-template-columns: 1fr !important; }
    .nf-problem-solution { grid-template-columns: 1fr !important; }
    .nf-ps-border { border-right: none !important; border-bottom: 1px solid #E4EDEF; }
    .nf-proof-grid { grid-template-columns: 1fr !important; }
  }
  @media (max-width: 640px) {
    .nf-section { padding-top: 56px !important; padding-bottom: 56px !important; }
    .nf-logos { padding-top: 28px !important; padding-bottom: 32px !important; }
  }
</style>

<style>
  :root { --accent: #15A6AE; --accent-dark: #0E8C93; --ink: #16263F; }
  body { font-family: 'Poppins', system-ui, sans-serif; color: #45566A; background: #FFFFFF; -webkit-font-smoothing: antialiased; line-height: 1.6; margin: 0; }
  a { color: #15A6AE; }
  a:hover { color: #0E8C93; }
</style>
</head>
<body>


  <!-- ============ 01 HERO ============ -->
  <section style="background: radial-gradient(1100px 540px at 78% -8%, #E4F4F5 0%, rgba(228,244,245,0) 60%), linear-gradient(180deg, #F7FBFC 0%, #FFFFFF 100%); padding: 56px 0 88px; overflow: hidden;">
    <div style="max-width: 1180px; margin: 0 auto; padding: 0 24px;">
      <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/novaflow-logo.png" alt="NovaFlow Digital" style="height: 30px; width: auto; margin-bottom: 48px;">
      <div class="nf-hero" style="position: relative; display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 48px; align-items: center;">
        <div class="nf-reveal">
          <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 14px;">Free · 2026 Edition</div>
          <h1 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(32px, 4vw, 50px); line-height: 1.1; letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 22px; text-wrap: balance;">The 2026 School <span style="position: relative; white-space: nowrap;">Enrolment<svg width="100%" height="12" viewBox="0 0 140 12" preserveAspectRatio="none" style="position: absolute; left: 0; bottom: -6px; width: 100%;"><path d="M2 8 C 40 2, 100 2, 138 8" stroke="var(--accent, #15A6AE)" stroke-width="5" fill="none" stroke-linecap="round"></path></svg></span> Playbook.</h1>
          <p style="font-size: 17.5px; line-height: 1.65; color: #51637A; margin: 0 0 34px; max-width: 540px;">Everything you need to confidently plan your school's enrolment marketing—from annual campaigns and Open Days to benchmarking and budgeting—all in one practical guide.</p>

          <div id="hero-form" style="background: #fff; border: 1px solid #E4EDEF; border-radius: 16px; padding: 28px; box-shadow: 0 20px 44px rgba(22,38,63,0.1); max-width: 460px;">
            <!-- ActiveCampaign embed form ("School Enrolment Playbook"). Success
                 behavior (thank-you message / redirect to step 2) is configured
                 in ActiveCampaign's form settings, not in this page. -->
            <div class="_form_3"></div><script src="https://novaflowdigital.activehosted.com/f/embed.php?id=3" charset="utf-8"></script>
            <p style="text-align: center; font-size: 13px; color: #8294A2; margin: 10px 0 0;">Free — delivered in 5 minutes. We'll only use this to send your playbook.</p>
            <div style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 4px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"><rect x="5" y="11" width="14" height="9" rx="2" stroke="#9AACB8" stroke-width="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4" stroke="#9AACB8" stroke-width="2" stroke-linecap="round"></path></svg><span style="font-size: 11.5px; color: #93A2AD;">Your information is safe with us. We'll never share it.</span></div>
          </div>
        </div>

        <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/checklist-mockup.png" alt="The 2026 School Enrolment Playbook — cover and interior pages" class="nf-reveal nf-hover-lift" style="width: 118%; max-width: none; height: auto; display: block; transition-delay: 0.12s;">
      </div>
    </div>
  </section>

  <!-- ============ 02 THE SHIFT ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #F4F8F9;">
    <div class="nf-reveal" style="max-width: 900px; margin: 0 auto 48px; padding: 0 24px; text-align: center;">
      <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(26px, 3.2vw, 38px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 16px;">School marketing isn't getting easier.</h2>
      <p style="font-size: 17px; line-height: 1.7; color: #51637A; margin: 0;">Parents research longer before enquiring. Competition between independent schools has intensified. Advertising costs continue to rise. And campaign timing now matters more than it used to.</p>
    </div>
    <div class="nf-stat-row" style="max-width: 1080px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px;">
      <div class="nf-reveal nf-hover-lift" style="background: #fff; border-radius: 16px; padding: 26px 20px; text-align: center;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 32px; color: var(--accent, #15A6AE); margin-bottom: 8px;">1.48</div>
        <div style="font-size: 13.5px; color: #6C7E8E; line-height: 1.4;">Australia's fertility rate, lowest ever recorded (ABS)</div>
      </div>
      <div class="nf-reveal nf-hover-lift" style="background: #fff; border-radius: 16px; padding: 26px 20px; text-align: center; transition-delay: 0.06s;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 32px; color: var(--accent, #15A6AE); margin-bottom: 8px;">+21%</div>
        <div style="font-size: 13.5px; color: #6C7E8E; line-height: 1.4;">Rise in paid media cost per lead in 2025</div>
      </div>
      <div class="nf-reveal nf-hover-lift" style="background: #fff; border-radius: 16px; padding: 26px 20px; text-align: center; transition-delay: 0.12s;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 32px; color: var(--accent, #15A6AE); margin-bottom: 8px;">~60%</div>
        <div style="font-size: 13.5px; color: #6C7E8E; line-height: 1.4;">Google searches that end without a click</div>
      </div>
      <div class="nf-reveal nf-hover-lift" style="background: #fff; border-radius: 16px; padding: 26px 20px; text-align: center; transition-delay: 0.18s;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 32px; color: var(--accent, #15A6AE); margin-bottom: 8px;">6 weeks</div>
        <div style="font-size: 13.5px; color: #6C7E8E; line-height: 1.4;">Recommended Open Day campaign runway</div>
      </div>
    </div>
  </section>

  <!-- ============ 04 SOUND FAMILIAR ============ -->
  <section class="nf-section" style="padding: 88px 0; background: var(--ink, #16263F);">
    <div class="nf-reveal" style="max-width: 760px; margin: 0 auto; padding: 0 24px; text-align: center;">
      <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 32px); line-height: 1.35; letter-spacing: -0.02em; color: #fff; margin: 0 0 22px;">Most school campaigns don't fail because of creativity.</h2>
      <p style="font-size: 17px; line-height: 1.7; color: #B7C4D3; margin: 0 0 32px;">Most underfunded campaigns were never going to work. Short bursts at half the required spend mostly buy impressions, not enrolments — and cutting them just reinforces the belief that ads don't work for schools. The playbook explains why, and what to do instead.</p>
      <a href="#top" onclick="document.getElementById('hero-form').scrollIntoView({behavior:'smooth',block:'center'});return false;" style="display: inline-flex; align-items: center; gap: 9px; background: var(--accent, #15A6AE); color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; padding: 14px 28px; border-radius: 10px; text-decoration: none;" style-hover="background: var(--accent-dark, #0E8C93);">Get My Free Playbook</a>
    </div>
  </section>

  <!-- ============ 03 WHY WE CREATED THIS PLAYBOOK ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #fff;">
    <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 56px; align-items: center;" class="nf-hero">
      <div class="nf-reveal" style="position: relative;">
        <div style="background: #F4F8F9; border-radius: 20px; padding: 44px 40px; text-align: center;">
          <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 15px; letter-spacing: 0.04em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 20px;">What that's actually worth</div>
          <svg width="56" height="56" viewBox="0 0 24 24" fill="none" style="margin: 0 auto 8px;"><path d="M3 17l6-6 4 4 8-8" stroke="var(--accent, #15A6AE)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7h6v6" stroke="var(--accent, #15A6AE)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 64px; color: var(--ink, #16263F); line-height: 1; letter-spacing: -0.02em;">$1M+</div>
          <div style="font-size: 15px; color: #6C7E8E; margin: 10px 0 26px; font-weight: 500;">in recurring annual fees, from 50 extra enrolments</div>
          <p style="font-size: 14px; color: #51637A; line-height: 1.6; margin: 0; border-top: 1px solid #E4EDEF; padding-top: 20px;">"One college we partnered with moved from 1,250 to 1,300 enrolments over a single growth cycle."</p>
        </div>
      </div>
      <div class="nf-reveal" style="transition-delay: 0.08s;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 14px;">Why we created this playbook</div>
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 32px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 18px;">That's why we built this playbook.</h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #51637A; margin: 0 0 26px;">We built this playbook because we kept seeing the same gap: schools running solid campaigns without the timing, runway or proof points to convert real interest into enrolments. Every framework on the next page is drawn directly from work we've done with schools like the one above — not theory, not a template pulled off the shelf.</p>
        <a href="#top" onclick="document.getElementById('hero-form').scrollIntoView({behavior:'smooth',block:'center'});return false;" style="display: inline-flex; align-items: center; gap: 9px; background: var(--accent, #15A6AE); color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; padding: 14px 28px; border-radius: 10px; text-decoration: none;" style-hover="background: var(--accent-dark, #0E8C93);">Get My Free Playbook</a>
      </div>
    </div>
  </section>

  <!-- ============ 07 WHO IT'S FOR ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #F4F8F9;">
    <div style="max-width: 900px; margin: 0 auto; padding: 0 24px; text-align: center;">
      <h2 class="nf-reveal" style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(26px, 3.2vw, 38px); line-height: 1.15; letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 16px; text-wrap: balance;">Built for the people responsible for enrolment growth.</h2>
      <p class="nf-reveal" style="font-size: 18px; line-height: 1.7; margin: 0 0 44px; transition-delay: 0.06s;">Built for marketing managers, enrolment managers, principals and communications teams at Australian independent schools — especially if your school is facing rising ad costs, longer parent decision cycles or a shrinking student pool.</p>
      <div class="nf-who-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; text-align: left; margin-bottom: 24px;">
        <div class="nf-reveal nf-hover-lift" style="display: flex; gap: 16px; align-items: flex-start; background: #fff; border-top: 3px solid #E9A23B; border-radius: 14px; padding: 24px; box-shadow: 0 0 0 rgba(22,38,63,0);" style-hover="box-shadow: 0 14px 30px rgba(22,38,63,0.1);">
          <span style="flex: none; width: 44px; height: 44px; border-radius: 12px; background: #FCF0DD; display: inline-flex; align-items: center; justify-content: center;"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="#E9A23B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
          <div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12px; letter-spacing: 0.04em; text-transform: uppercase; color: #E9A23B; margin-bottom: 6px;">Marketing &amp; Enrolment Managers</div><span style="font-size: 15.5px; color: #2F3F52; font-weight: 500; line-height: 1.5;">Running the day-to-day campaign calendar</span></div>
        </div>
        <div class="nf-reveal nf-hover-lift" style="display: flex; gap: 16px; align-items: flex-start; background: #fff; border-top: 3px solid var(--accent, #15A6AE); border-radius: 14px; padding: 24px; box-shadow: 0 0 0 rgba(22,38,63,0); transition-delay: 0.06s;" style-hover="box-shadow: 0 14px 30px rgba(22,38,63,0.1);">
          <span style="flex: none; width: 44px; height: 44px; border-radius: 12px; background: #E4F4F5; display: inline-flex; align-items: center; justify-content: center;"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="18" rx="2" stroke="var(--accent, #15A6AE)" stroke-width="2"></rect><path d="M16 2v4M8 2v4M3 10h18" stroke="var(--accent, #15A6AE)" stroke-width="2" stroke-linecap="round"></path></svg></span>
          <div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12px; letter-spacing: 0.04em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 6px;">Principals &amp; Comms Teams</div><span style="font-size: 15.5px; color: #2F3F52; font-weight: 500; line-height: 1.5;">Reporting on enrolment outcomes</span></div>
        </div>
      </div>
      <p class="nf-reveal" style="font-size: 15px; color: #6C7E8E; line-height: 1.6; margin: 0; transition-delay: 0.12s;">Especially if your school is facing <strong style="color: #2F3F52;">rising ad costs</strong>, <strong style="color: #2F3F52;">longer parent decision cycles</strong> or a <strong style="color: #2F3F52;">shrinking student pool</strong>.</p>
    </div>
  </section>

  <!-- ============ 05 WHAT'S INSIDE ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #fff;">
    <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px;">
      <div class="nf-reveal" style="text-align: center; margin-bottom: 48px;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 10px;">Preview</div>
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 34px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0;">Everything you need to plan a stronger enrolment year.</h2>
      </div>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;" class="nf-hero">
        <div style="display: flex; gap: 22px; flex-wrap: wrap; justify-content: center; align-items: center;">
          <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/campaign-timeline.png" alt="Campaign Timeline playbook page preview" class="nf-reveal nf-hover-img" style="width: 200px; aspect-ratio: 3/4; object-fit: cover; object-position: top; border-radius: 14px; box-shadow: 0 16px 32px rgba(22,38,63,0.14); transform: rotate(-4deg); display: block; transition: transform 0.32s ease, box-shadow 0.32s ease, opacity 0.75s ease;">
          <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/annual-marketing-calendar.png" alt="Annual Campaign Planner playbook page preview" class="nf-reveal nf-hover-img" style="width: 220px; aspect-ratio: 3/4; object-fit: cover; object-position: top; border-radius: 14px; box-shadow: 0 20px 44px rgba(22,38,63,0.2); z-index: 2; transform: translateY(-18px); display: block; transition: transform 0.32s ease, box-shadow 0.32s ease, opacity 0.75s ease; transition-delay: 0.1s;">
          <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/openday-planner.png" alt="Open Day Blueprint playbook page preview" class="nf-reveal nf-hover-img" style="width: 200px; aspect-ratio: 3/4; object-fit: cover; object-position: top; border-radius: 14px; box-shadow: 0 16px 32px rgba(22,38,63,0.14); transform: rotate(4deg); display: block; transition: transform 0.32s ease, box-shadow 0.32s ease, opacity 0.75s ease; transition-delay: 0.2s;">
        </div>
        <div class="nf-reveal" style="display: flex; flex-direction: column; gap: 20px; transition-delay: 0.1s;">
          <div style="display: flex; gap: 14px; align-items: flex-start;"><span style="flex: none; width: 8px; height: 8px; border-radius: 50%; background: var(--accent, #15A6AE); margin-top: 8px;"></span><span style="font-size: 15.5px; color: #2F3F52; line-height: 1.5;"><strong style="color: var(--ink, #16263F);">Know exactly what to run, and when</strong> — the Annual Campaign Planner, a full 12-month view mapped to the school year</span></div>
          <div style="display: flex; gap: 14px; align-items: flex-start;"><span style="flex: none; width: 8px; height: 8px; border-radius: 50%; background: var(--accent, #15A6AE); margin-top: 8px;"></span><span style="font-size: 15.5px; color: #2F3F52; line-height: 1.5;"><strong style="color: var(--ink, #16263F);">Fill every Open Day</strong> — the 6-Week Open Day Blueprint, the exact framework used with every school Novaflow works with</span></div>
          <div style="display: flex; gap: 14px; align-items: flex-start;"><span style="flex: none; width: 8px; height: 8px; border-radius: 50%; background: var(--accent, #15A6AE); margin-top: 8px;"></span><span style="font-size: 15.5px; color: #2F3F52; line-height: 1.5;"><strong style="color: var(--ink, #16263F);">See what actually worked elsewhere</strong> — Real School Case Studies, named schools, real numbers</span></div>
          <div style="display: flex; gap: 14px; align-items: flex-start;"><span style="flex: none; width: 8px; height: 8px; border-radius: 50%; background: var(--accent, #15A6AE); margin-top: 8px;"></span><span style="font-size: 15.5px; color: #2F3F52; line-height: 1.5;"><strong style="color: var(--ink, #16263F);">Spend with confidence</strong> — the Budget Reality Check, what schools actually spend, and why bursts cost more</span></div>
          <div style="display: flex; gap: 14px; align-items: flex-start;"><span style="flex: none; width: 8px; height: 8px; border-radius: 50%; background: var(--accent, #15A6AE); margin-top: 8px;"></span><span style="font-size: 15.5px; color: #2F3F52; line-height: 1.5;"><strong style="color: var(--ink, #16263F);">Fix what's leaking leads</strong> — the Conversion Checklist, 41 practical items across landing pages, forms and tracking</span></div>
          <div style="display: flex; gap: 14px; align-items: flex-start;"><span style="flex: none; width: 8px; height: 8px; border-radius: 50%; background: var(--accent, #15A6AE); margin-top: 8px;"></span><span style="font-size: 15.5px; color: #2F3F52; line-height: 1.5;"><strong style="color: var(--ink, #16263F);">See exactly where you stand</strong> — the Marketing Scorecard, a 12-question self-assessment for your leadership team</span></div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 48px;"><a href="#top" onclick="document.getElementById('hero-form').scrollIntoView({behavior:'smooth',block:'center'});return false;" style="display: inline-flex; align-items: center; gap: 9px; background: var(--accent, #15A6AE); color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 16px; padding: 15px 30px; border-radius: 11px; text-decoration: none; box-shadow: 0 10px 26px rgba(21,166,174,0.3);" style-hover="background: var(--accent-dark, #0E8C93);">Get My Free Playbook</a></div>
    </div>
  </section>

  <!-- ============ 05B VISUAL ROADMAP (STANDOUT) ============ -->
  <section class="nf-section" style="padding: 96px 0; background: linear-gradient(135deg, #103440 0%, #16263F 60%, #0E1F33 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top: -160px; left: -120px; width: 420px; height: 420px; border-radius: 50%; background: radial-gradient(circle, rgba(21,166,174,0.2), transparent 70%); pointer-events: none;"></div>
    <div class="nf-reveal" style="max-width: 1080px; margin: 0 auto 56px; padding: 0 24px; text-align: center; position: relative;">
      <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent, #15A6AE); margin-bottom: 14px;">The Annual Campaign Planner</div>
      <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(26px, 3.2vw, 38px); letter-spacing: -0.02em; color: #fff; margin: 0 0 16px; text-wrap: balance;">One page. The whole school year, mapped.</h2>
      <p style="font-size: 16px; color: #93A4B8; max-width: 480px; margin: 0 auto;">Print it, pin it to the wall, and follow it term by term.</p>
    </div>
    <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px; position: relative;">
      <div class="nf-roadmap-row" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px; position: relative;">
        <div style="grid-column: 1 / -1; grid-row: 1; height: 2px; background-image: linear-gradient(to right, rgba(255,255,255,0.18) 0 10px, transparent 10px 20px); background-size: 20px 2px; margin-top: 33px;"></div>
        <div class="nf-reveal" style="grid-column: 1; grid-row: 1; display: flex; flex-direction: column; align-items: center; gap: 22px; position: relative;">
          <span style="width: 66px; height: 66px; border-radius: 50%; background: #16263F; border: 2px solid rgba(21,166,174,0.5); display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif; font-weight: 800; color: var(--accent, #15A6AE); font-size: 17px;">T1</span>
          <div style="text-align: center;"><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 4px;">Awareness</div><div style="font-size: 13px; color: #93A4B8;">Brand &amp; community content</div></div>
        </div>
        <div class="nf-reveal" style="grid-column: 2; grid-row: 1; display: flex; flex-direction: column; align-items: center; gap: 22px; position: relative; transition-delay: 0.08s;">
          <span style="width: 66px; height: 66px; border-radius: 50%; background: #16263F; border: 2px solid rgba(21,166,174,0.5); display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif; font-weight: 800; color: var(--accent, #15A6AE); font-size: 17px;">T2</span>
          <div style="text-align: center;"><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 4px;">Open Day Runway</div><div style="font-size: 13px; color: #93A4B8;">6-week campaign live</div></div>
        </div>
        <div class="nf-reveal" style="grid-column: 3; grid-row: 1; display: flex; flex-direction: column; align-items: center; gap: 22px; position: relative; transition-delay: 0.16s;">
          <span style="width: 66px; height: 66px; border-radius: 50%; background: #16263F; border: 2px solid rgba(21,166,174,0.5); display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif; font-weight: 800; color: var(--accent, #15A6AE); font-size: 17px;">T3</span>
          <div style="text-align: center;"><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 4px;">Enquiry Nurture</div><div style="font-size: 13px; color: #93A4B8;">Warm follow-up sequence</div></div>
        </div>
        <div class="nf-reveal nf-hover-lift" style="grid-column: 4; grid-row: 1; display: flex; flex-direction: column; align-items: center; gap: 22px; position: relative; transition-delay: 0.24s;">
          <span style="width: 66px; height: 66px; border-radius: 50%; background: var(--accent, #15A6AE); display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif; font-weight: 800; color: #fff; font-size: 17px; box-shadow: 0 10px 24px rgba(21,166,174,0.4);">T4</span>
          <div style="text-align: center;"><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 4px;">Enrolment Push</div><div style="font-size: 13px; color: #93A4B8;">Application deadline sprint</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ HUMAN VISUAL ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #F4F8F9;">
    <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center;" class="nf-hero">
      <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/team-planning.jpg" alt="School marketing team planning an Open Day campaign" class="nf-reveal" style="width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 20px; display: block;">
      <div class="nf-reveal" style="transition-delay: 0.08s;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 14px;">Built with real school teams</div>
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 32px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 18px;">Every framework was tested inside a real school marketing team.</h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #51637A; margin: 0;">Not written from the outside looking in. The planner, the blueprint and the checklist are the same tools we use sitting across the table from marketing managers, principals and business managers every term.</p>
      </div>
    </div>
  </section>

  <!-- ============ THE OUTCOME ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #fff;">
    <div class="nf-reveal" style="max-width: 760px; margin: 0 auto; padding: 0 24px; text-align: center;">
      <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 14px;">The Outcome</div>
      <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 32px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 36px;">After reading this playbook, you'll be able to...</h2>
      <div style="background: #F4F8F9; border-radius: 20px; padding: 40px 36px; text-align: left; display: flex; flex-direction: column; gap: 24px;">
        <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><span style="font-size: 16.5px; color: var(--ink, #16263F); font-weight: 500; line-height: 1.5;">Plan your entire enrolment year with confidence.</span></div>
        <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><span style="font-size: 16.5px; color: var(--ink, #16263F); font-weight: 500; line-height: 1.5;">Launch Open Day campaigns before your competitors.</span></div>
        <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><span style="font-size: 16.5px; color: var(--ink, #16263F); font-weight: 500; line-height: 1.5;">Identify weaknesses in your marketing strategy.</span></div>
        <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><span style="font-size: 16.5px; color: var(--ink, #16263F); font-weight: 500; line-height: 1.5;">Report marketing performance with confidence.</span></div>
        <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><span style="font-size: 16.5px; color: var(--ink, #16263F); font-weight: 500; line-height: 1.5;">Build a repeatable enrolment system instead of starting from scratch each year.</span></div>
      </div>
      <div style="text-align: center; margin-top: 40px;"><a href="#top" onclick="document.getElementById('hero-form').scrollIntoView({behavior:'smooth',block:'center'});return false;" style="display: inline-flex; align-items: center; gap: 9px; background: var(--accent, #15A6AE); color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 16px; padding: 15px 30px; border-radius: 11px; text-decoration: none; box-shadow: 0 10px 26px rgba(21,166,174,0.3);" style-hover="background: var(--accent-dark, #0E8C93);">Get My Free Playbook</a></div>
    </div>
  </section>

  <!-- ============ 06 SCORECARD ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #F4F8F9;">
    <div class="nf-reveal" style="max-width: 760px; margin: 0 auto; padding: 0 24px;">
      <div style="text-align: center; margin-bottom: 36px;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 10px;">Takes 30 seconds</div>
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 32px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 10px;">Score your school. Honestly.</h2>
        <p style="font-size: 15px; color: #6C7E8E; margin: 0; max-width: 480px; margin-left: auto; margin-right: auto;">Tap Y (2 pts), P (1 pt) or N (0 pts) for each — no cheating, the point is to see where you actually stand.</p>
      </div>
      <div style="background: #F4F8F9; border-radius: 16px; padding: 28px 32px; display: flex; flex-direction: column;">
          <div class="sc-row" data-q="1" style="display: flex; align-items: center; gap: 16px; padding: 16px 0; border-bottom: 1px solid #E4EDEF;">
            <span style="flex: none; width: 32px; height: 32px; border-radius: 50%; background: #E4F4F5; color: #0E8C93; font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 14px; display: flex; align-items: center; justify-content: center;">1</span>
            <div style="flex: 1; font-size: 15.5px; color: #16263F; font-weight: 500; line-height: 1.5;">Do you have a written 12-month marketing calendar by campaign type?</div>
            <div style="display: flex; gap: 8px; flex: none;">
              <button type="button" class="sc-opt" data-q="1" data-val="2" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">Y</button>
              <button type="button" class="sc-opt" data-q="1" data-val="1" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">P</button>
              <button type="button" class="sc-opt" data-q="1" data-val="0" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">N</button>
            </div>
          </div>
          <div class="sc-row" data-q="2" style="display: flex; align-items: center; gap: 16px; padding: 16px 0; border-bottom: 1px solid #E4EDEF;">
            <span style="flex: none; width: 32px; height: 32px; border-radius: 50%; background: #E4F4F5; color: #0E8C93; font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 14px; display: flex; align-items: center; justify-content: center;">2</span>
            <div style="flex: 1; font-size: 15.5px; color: #16263F; font-weight: 500; line-height: 1.5;">Do your Open Day campaigns run at least 6 weeks live, not 3?</div>
            <div style="display: flex; gap: 8px; flex: none;">
              <button type="button" class="sc-opt" data-q="2" data-val="2" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">Y</button>
              <button type="button" class="sc-opt" data-q="2" data-val="1" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">P</button>
              <button type="button" class="sc-opt" data-q="2" data-val="0" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">N</button>
            </div>
          </div>
          <div class="sc-row" data-q="3" style="display: flex; align-items: center; gap: 16px; padding: 16px 0; border-bottom: 1px solid #E4EDEF;">
            <span style="flex: none; width: 32px; height: 32px; border-radius: 50%; background: #E4F4F5; color: #0E8C93; font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 14px; display: flex; align-items: center; justify-content: center;">3</span>
            <div style="flex: 1; font-size: 15.5px; color: #16263F; font-weight: 500; line-height: 1.5;">Do you know your cost per lead and cost per enrolment, to the dollar?</div>
            <div style="display: flex; gap: 8px; flex: none;">
              <button type="button" class="sc-opt" data-q="3" data-val="2" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">Y</button>
              <button type="button" class="sc-opt" data-q="3" data-val="1" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">P</button>
              <button type="button" class="sc-opt" data-q="3" data-val="0" style="width: 40px; height: 40px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; border-radius: 9px; cursor: pointer; transition: all 0.2s ease; background: #fff; color: #16263F; border: 1.5px solid #DDE6EA;">N</button>
            </div>
          </div>
      </div>
      <div id="sc-result" style="display: none; background: #16263F; border-radius: 16px; padding: 32px; margin-top: 20px; text-align: center;">
        <div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 15px; letter-spacing: 0.04em; text-transform: uppercase; color: #15A6AE; margin-bottom: 10px;">Your teaser score: <span id="sc-score">0</span> / 6</div>
        <p id="sc-reveal-text" style="font-size: 17px; color: #fff; line-height: 1.6; margin: 0 0 22px; max-width: 480px; margin-left: auto; margin-right: auto;"></p>
        <a href="#hero-form" id="sc-cta" style="display: inline-flex; align-items: center; gap: 9px; background: #15A6AE; color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; padding: 13px 26px; border-radius: 10px; text-decoration: none;">Get the full 12-question scorecard →</a>
      </div>
      <p id="sc-hint" style="font-size: 15.5px; color: #51637A; line-height: 1.7; margin: 26px 0 0; text-align: center;">Answer all three to see your teaser score. The full 12-question scorecard is inside — have your whole leadership team take it separately and compare answers.</p>
    </div>
  </section>

  <!-- ============ 09 PROOF ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #fff;">
    <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px;">
      <h2 class="nf-reveal" style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(24px, 2.8vw, 32px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 40px; text-align: center;">Real schools. Real numbers.</h2>
      <div class="nf-proof-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
        <div class="nf-reveal nf-hover-lift" style="background: #F4F8F9; border-radius: 18px; padding: 38px;">
          <div style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 13px; color: #8294A2; margin-bottom: 20px;">Redlands College — a full year of always-on activity</div>
          <div style="display: flex; gap: 32px;">
            <div><div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 64px; color: var(--accent, #15A6AE); line-height: 1; letter-spacing: -0.02em;">548</div><div style="font-size: 13px; color: #6C7E8E; margin-top: 8px;">enrolment applications</div></div>
            <div><div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 64px; color: var(--accent, #15A6AE); line-height: 1; letter-spacing: -0.02em;">342</div><div style="font-size: 13px; color: #6C7E8E; margin-top: 8px;">Open Day &amp; Twilight Tour registrations</div></div>
          </div>
        </div>
        <div class="nf-reveal nf-hover-lift" style="background: var(--ink, #16263F); border-radius: 18px; padding: 38px; transition-delay: 0.08s;">
          <div style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 13px; color: #9DAFC1; margin-bottom: 20px;">Bundaberg Christian College — zero attribution to full traceability</div>
          <div><div style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 64px; color: var(--accent, #15A6AE); line-height: 1; letter-spacing: -0.02em;">75</div><div style="font-size: 13px; color: #9DAFC1; margin-top: 8px;">enrolment applications, each traceable to its campaign</div></div>
        </div>
      </div>
      <div style="margin: 56px 0 28px; border-top: 1px solid #E4EDEF;"></div>
      <div class="nf-credibility-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
        <div class="nf-reveal nf-hover-lift" style="background: #F4F8F9; border: 2px solid var(--accent, #15A6AE); border-radius: 18px; padding: 40px 34px; display: flex; flex-direction: column; justify-content: space-between;" style-hover="box-shadow: 0 18px 36px rgba(22,38,63,0.14);">
          <div>
            <svg width="34" height="26" viewBox="0 0 34 26" fill="none" style="margin-bottom: 18px;"><path d="M0 26V15.6C0 6.9 5.4 1.3 13.9 0l1.6 3.9C10 5.5 7 8.9 6.5 13.4H14V26H0ZM19.1 26V15.6c0-8.7 5.4-14.3 13.9-15.6L34.6 3.9c-5.5 1.6-8.5 5-9 9.5h7.5V26H19.1Z" fill="var(--accent, #15A6AE)" fill-opacity="0.22"></path></svg>
            <p style="font-size: 16.5px; line-height: 1.65; color: var(--ink, #16263F); margin: 0 0 24px;">They are specialists in schools marketing. They understand schools, they understand the needs of parents, but they also understand the needs of a school marketing team.</p>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <div style="width: 42px; height: 42px; border-radius: 50%; background: repeating-linear-gradient(135deg,#E7EFF1,#E7EFF1 6px,#DDE8EB 6px,#DDE8EB 12px); flex: none;"></div>
            <div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; color: var(--ink, #16263F); font-size: 14.5px;">Alice Thompson</div><div style="font-size: 12.5px; color: #6C7E8E;">Marketing &amp; Communications Manager, Bundaberg Christian College</div></div>
          </div>
        </div>
        <div class="nf-reveal nf-hover-lift" style="background: #F4F8F9; border: 1px solid #E4EDEF; border-radius: 18px; padding: 40px 34px; display: flex; flex-direction: column; justify-content: space-between; transition-delay: 0.08s;" style-hover="box-shadow: 0 18px 36px rgba(22,38,63,0.1);">
          <div>
            <svg width="34" height="26" viewBox="0 0 34 26" fill="none" style="margin-bottom: 18px;"><path d="M0 26V15.6C0 6.9 5.4 1.3 13.9 0l1.6 3.9C10 5.5 7 8.9 6.5 13.4H14V26H0ZM19.1 26V15.6c0-8.7 5.4-14.3 13.9-15.6L34.6 3.9c-5.5 1.6-8.5 5-9 9.5h7.5V26H19.1Z" fill="#C7D3DA"></path></svg>
            <p style="font-size: 16.5px; line-height: 1.65; color: var(--ink, #16263F); margin: 0 0 24px;">They understand our school's values and the heart of the school. That's been obvious in the ads, and it's put a fresh take on how we market.</p>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <div style="width: 42px; height: 42px; border-radius: 50%; background: repeating-linear-gradient(135deg,#E7EFF1,#E7EFF1 6px,#DDE8EB 6px,#DDE8EB 12px); flex: none;"></div>
            <div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; color: var(--ink, #16263F); font-size: 14.5px;">Emma Velthuis</div><div style="font-size: 12.5px; color: #6C7E8E;">Head of Engagement, Marketing &amp; Comms, Mount Alvernia College</div></div>
          </div>
        </div>
        <div class="nf-reveal nf-hover-lift" style="background: #F4F8F9; border: 1px solid #E4EDEF; border-radius: 18px; padding: 40px 34px; display: flex; flex-direction: column; justify-content: space-between; transition-delay: 0.16s;" style-hover="box-shadow: 0 18px 36px rgba(22,38,63,0.1);">
          <div>
            <svg width="34" height="26" viewBox="0 0 34 26" fill="none" style="margin-bottom: 18px;"><path d="M0 26V15.6C0 6.9 5.4 1.3 13.9 0l1.6 3.9C10 5.5 7 8.9 6.5 13.4H14V26H0ZM19.1 26V15.6c0-8.7 5.4-14.3 13.9-15.6L34.6 3.9c-5.5 1.6-8.5 5-9 9.5h7.5V26H19.1Z" fill="#C7D3DA"></path></svg>
            <p style="font-size: 16.5px; line-height: 1.65; color: var(--ink, #16263F); margin: 0 0 24px;">Clear communication, strong enrolment outcomes, and monthly reports that showed real impact. We'd highly recommend NovaFlow to any school.</p>
          </div>
          <div style="display: flex; align-items: center; gap: 12px;">
            <div style="width: 42px; height: 42px; border-radius: 50%; background: repeating-linear-gradient(135deg,#E7EFF1,#E7EFF1 6px,#DDE8EB 6px,#DDE8EB 12px); flex: none;"></div>
            <div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; color: var(--ink, #16263F); font-size: 14.5px;">Susanna Rossetto</div><div style="font-size: 12.5px; color: #6C7E8E;">Marketing &amp; Communications Officer, Grace Lutheran Primary School</div></div>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 44px;"><a href="#top" onclick="document.getElementById('hero-form').scrollIntoView({behavior:'smooth',block:'center'});return false;" style="display: inline-flex; align-items: center; gap: 9px; background: var(--accent, #15A6AE); color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 16px; padding: 15px 30px; border-radius: 11px; text-decoration: none; box-shadow: 0 10px 26px rgba(21,166,174,0.3);" style-hover="background: var(--accent-dark, #0E8C93);">Get My Free Playbook</a></div>
    </div>
  </section>

  <!-- ============ CLIENT LOGO GRID ============ -->
  <section class="nf-logos" style="padding: 12px 0 40px; background: #fff;">
        <div class="nf-reveal" style="max-width: 1180px; margin: 0 auto; padding: 0 24px;">
      <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/school-partner-logos.png" alt="Logos of partner Australian schools trusted by NovaFlow Digital" style="width: 100%; height: auto; display: block; border-radius: 14px;">
    </div>
  </section>

  <!-- ============ ONE LAST THING ============ -->
  <section class="nf-section" style="padding: 88px 0; background: #fff;">
    <div class="nf-reveal" style="max-width: 1080px; margin: 0 auto 56px; padding: 0 24px; text-align: center;">
      <div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 12.5px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-dark, #0E8C93); margin-bottom: 14px;">One Last Thing</div>
      <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(26px, 3.2vw, 38px); letter-spacing: -0.02em; color: var(--ink, #16263F); margin: 0 0 14px;">Everything you'll walk away with.</h2>
      <p style="font-size: 17px; color: #51637A; margin: 0;">One download. Months of better planning.</p>
    </div>
    <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: start;" class="nf-hero">
      <div class="nf-reveal">
        <p style="font-size: 15.5px; color: #6C7E8E; margin: 0 0 20px;">What you get.</p>
        <div style="background: var(--ink, #16263F); border-radius: 20px; padding: 36px; display: flex; flex-direction: column; gap: 22px;">
          <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 15px;">✓</span><span style="font-size: 15.5px; color: #fff; font-weight: 500; line-height: 1.5;">A full 12-month enrolment campaign planner, mapped to your school year</span></div>
          <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 15px;">✓</span><span style="font-size: 15.5px; color: #fff; font-weight: 500; line-height: 1.5;">The 6-week Open Day framework we use with every school we work with</span></div>
          <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 15px;">✓</span><span style="font-size: 15.5px; color: #fff; font-weight: 500; line-height: 1.5;">A 12-question scorecard to see where your own marketing is strong or slipping</span></div>
          <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 15px;">✓</span><span style="font-size: 15.5px; color: #fff; font-weight: 500; line-height: 1.5;">Real case studies from Australian independent schools, not theory</span></div>
          <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 15px;">✓</span><span style="font-size: 15.5px; color: #fff; font-weight: 500; line-height: 1.5;">A budget reality check most agencies won't put in writing</span></div>
          <div style="display: flex; gap: 12px; align-items: flex-start;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 15px;">✓</span><span style="font-size: 15.5px; color: #fff; font-weight: 500; line-height: 1.5;">A structure your team can reuse every year, not just this one</span></div>
        </div>
      </div>
      <div class="nf-reveal" style="transition-delay: 0.08s;">
        <p style="font-size: 15.5px; color: #6C7E8E; margin: 0 0 20px;">Inside the playbook.</p>
        <div style="background: #F4F8F9; border-radius: 20px; padding: 24px; position: relative; display: flex; align-items: center; justify-content: center;">
          <img src="/wp-content/uploads/landers/novaflow-school-enrolment-playbook/assets/checklist-mockup.png" alt="The 2026 School Enrolment Playbook — cover and interior pages" style="width: 100%; height: auto; display: block; border-radius: 10px;">
        </div>
        <div style="text-align: center; margin-top: 32px;"><a href="#top" onclick="document.getElementById('hero-form').scrollIntoView({behavior:'smooth',block:'center'});return false;" style="display: inline-flex; align-items: center; gap: 9px; background: var(--accent, #15A6AE); color: #fff; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 16px; padding: 15px 30px; border-radius: 11px; text-decoration: none; box-shadow: 0 10px 26px rgba(21,166,174,0.3);" style-hover="background: var(--accent-dark, #0E8C93);">Get My Free Playbook</a></div>
      </div>
    </div>
  </section>

  <!-- ============ 10 FINAL CTA ============ -->
  <section style="background: var(--ink, #16263F); padding: 88px 0;">
    <div class="nf-final-cta" style="max-width: 1080px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;">
      <div class="nf-reveal">
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(26px, 3vw, 36px); line-height: 1.25; letter-spacing: -0.02em; color: #fff; margin: 0 0 18px; text-wrap: balance;">Start planning your strongest enrolment year yet.</h2>
        <p style="font-size: 16.5px; line-height: 1.6; color: #B7C4D3; margin: 0 0 30px; max-width: 420px;">Get your free playbook today and start planning before your next enrolment season arrives.</p>
        <div style="display: flex; flex-direction: column;">
          <div style="display: flex; gap: 12px; align-items: flex-start; padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,0.1);"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; color: #fff; margin-bottom: 4px;">Annual Campaign Planner</div><div style="font-size: 14px; color: #93A4B8;">Plan campaigns across the entire school year.</div></div></div>
          <div style="display: flex; gap: 12px; align-items: flex-start; padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,0.1);"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; color: #fff; margin-bottom: 4px;">Marketing Scorecard</div><div style="font-size: 14px; color: #93A4B8;">Benchmark your current marketing system.</div></div></div>
          <div style="display: flex; gap: 12px; align-items: flex-start; padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,0.1);"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; color: #fff; margin-bottom: 4px;">Open Day Blueprint</div><div style="font-size: 14px; color: #93A4B8;">Run higher-performing Open Day campaigns.</div></div></div>
          <div style="display: flex; gap: 12px; align-items: flex-start; padding: 18px 0;"><span style="flex: none; color: var(--accent, #15A6AE); font-weight: 700; font-size: 16px;">✓</span><div><div style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 15.5px; color: #fff; margin-bottom: 4px;">Budget Planner &amp; Checklists</div><div style="font-size: 14px; color: #93A4B8;">Know what to prioritise and when.</div></div></div>
        </div>
      </div>
      <div id="final-form" class="nf-reveal" style="background: #fff; border-radius: 18px; padding: 36px; box-shadow: 0 24px 50px rgba(0,0,0,0.28); transition-delay: 0.1s;">
        <!-- ActiveCampaign embed form ("School Enrolment Playbook"). Same
             form as the hero — ActiveCampaign supports the same embed
             snippet appearing more than once on a page. -->
        <div class="_form_3"></div><script src="https://novaflowdigital.activehosted.com/f/embed.php?id=3" charset="utf-8"></script>
        <div style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none"><rect x="5" y="11" width="14" height="9" rx="2" stroke="#9AACB8" stroke-width="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4" stroke="#9AACB8" stroke-width="2" stroke-linecap="round"></path></svg><span style="font-size: 12px; color: #93A2AD;">Your information is safe with us. We'll never share it.</span></div>
      </div>
    </div>
    <p style="text-align: center; font-size: 12.5px; color: #7E8FA2; padding: 32px 24px 0; line-height: 1.6;">© 2026 NovaFlow Digital<br>★★★★★ Trusted by Australian independent schools.</p>
  </section>



<script>
// Reveal-on-scroll
(function(){
  var els = document.querySelectorAll('.nf-reveal');
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if (e.isIntersecting) { e.target.classList.add('nf-in'); io.unobserve(e.target); } });
  }, { threshold: 0.01, rootMargin: '0px 0px -40px 0px' });
  els.forEach(function(el){
    var r = el.getBoundingClientRect();
    if (r.top < window.innerHeight && r.bottom > 0) el.classList.add('nf-in');
    else io.observe(el);
  });
})();

// Hero + Final CTA forms are now ActiveCampaign embeds (see the
// _form_3 / embed.php?id=3 snippets above) — lead capture, the
// thank-you message, and the redirect to step 2 are all configured in
// ActiveCampaign's form settings, not in this page's JS.

// Scorecard
(function(){
  var answers = {1: null, 2: null, 3: null};
  document.querySelectorAll('.sc-opt').forEach(function(btn){
    btn.addEventListener('click', function(){
      var q = btn.dataset.q, val = parseInt(btn.dataset.val, 10);
      answers[q] = val;
      document.querySelectorAll('.sc-opt[data-q="' + q + '"]').forEach(function(b){
        var active = b === btn;
        b.style.background = active ? '#15A6AE' : '#fff';
        b.style.color = active ? '#fff' : '#16263F';
        b.style.borderColor = active ? '#15A6AE' : '#DDE6EA';
      });
      checkComplete();
    });
  });
  function checkComplete(){
    var vals = Object.values(answers);
    if (vals.every(function(v){ return v !== null; })) {
      var score = vals.reduce(function(a,b){ return a+b; }, 0);
      document.getElementById('sc-score').textContent = score;
      var reveal;
      if (score <= 2) reveal = "There's real room to tighten this up — the full scorecard shows you exactly where.";
      else if (score <= 4) reveal = "You're doing some things right. The full 12-question scorecard shows what's still missing.";
      else reveal = 'Strong start on these three. The full scorecard checks the other nine that matter just as much.';
      document.getElementById('sc-reveal-text').textContent = reveal;
      document.getElementById('sc-result').style.display = 'block';
      document.getElementById('sc-hint').style.display = 'none';
    }
  }
  document.getElementById('sc-cta') && document.getElementById('sc-cta').addEventListener('click', function(e){
    e.preventDefault();
    answers = {1:null,2:null,3:null};
    document.querySelectorAll('.sc-opt').forEach(function(b){ b.style.background='#fff'; b.style.color='#16263F'; b.style.borderColor='#DDE6EA'; });
    document.getElementById('sc-result').style.display = 'none';
    document.getElementById('sc-hint').style.display = 'block';
    document.getElementById('hero-form').scrollIntoView({behavior:'smooth', block:'center'});
  });
})();
</script>
</body>
</html>
