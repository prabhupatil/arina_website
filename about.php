<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | Arina AI</title>
 <link rel="stylesheet" href="css/about.css">
 <link rel="shortcut icon" href="logo/ARINA _favicon.png" type="image/x-icon">

 <style>
  
    /* =========================
   HERO WRAPPER
========================= */

    .smart-cta-hero {
      background: radial-gradient(circle at 50% 20%, #161e90e3, transparent 60%), linear-gradient(180deg, #000000 0%, #000000 100%);
      border-radius: 28px;
      padding: 120px 20px;
      text-align: center;
      color: white;
      overflow: hidden;
    }

    /* =========================
   BADGE
========================= */

    .smart-cta-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 18px;
      background: #28272700;
      border-radius: 999px;
      font-size: 14px;
      color: #0066ff;
      margin-bottom: 40px;
    }


    /* =========================
   TITLE
========================= */

    .smart-cta-title {
      font-size: clamp(36px, 6vw, 62px);
      font-weight: 600;
      line-height: 1.1;
      margin-bottom: 30px;
    }

    /* =========================
   SUBTITLE
========================= */

    .smart-cta-text {
      max-width: 700px;
      margin: 0 auto 60px;
      font-size: 16px;
      line-height: 1.7;
      color: var(--text-secondary);
    }

    /* =========================
   BUTTON
========================= */

    .smart-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 24px;
      background: linear-gradient(90deg, #36c5f3, #0066ff);
      color: white;
      border: none;
      border-radius: 8px;
      font-family: var(--font-body);
      font-size: 18px;
      font-weight: 600;
          height: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      box-shadow: 0 0 20px rgba(79, 123, 247, 0.2);
    }

    .smart-cta-btn:hover {
      transform: translateY(-3px);

    }


    /* =========================
   RESPONSIVE
========================= */

    @media(max-width:768px) {



      .smart-cta-hero {
        padding: 80px 20px;
      }

      .smart-cta-text {
        font-size: 14px;
      }

      #badge {
        margin-top: 50px;
        padding-bottom: 100px;
      }

    }
/* Badge */
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0);
      padding: 8px 18px;
      color: white;
      border-radius: 30px;
      font-size: 14px;
      margin-bottom: 10px;
      backdrop-filter: blur(10px);
    }

    .badge span {
      width: 20px;
      height: 20px;
      color: white;
      background: #0066ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
    }



    /* Section */
.mission-section{
padding:120px 20px 0px;
display:flex;
justify-content:center;
}

/* Box with gradient inside */
.mission-box{

max-width:1200px;
padding:70px 60px;
text-align:center;
border-radius:14px;

/* gradient inside */
background: radial-gradient(circle at 50% 20%, #161e90e3, transparent 60%), linear-gradient(180deg, #000000 0%, #000000 100%);

border:1px solid rgba(255,255,255,0.08);
}

/* small heading */
.mission-tag{
font-size:14px;
letter-spacing:1px;
text-transform:uppercase;
color:#9fb3ff;
margin-bottom:20px;
}

/* title */
.mission-title{
font-size:48px;
font-weight:800;
line-height:1.2;
margin-bottom:25px;
}

/* text */
.mission-text{
font-size:17px;
line-height:1.7;
color:#c7d1e3;
}

/* responsive */
@media(max-width:768px){

.mission-title{
font-size:32px;
}

.mission-box{
padding:40px 25px;
}

}
#text{
    font-size:18px;
}


#section-title {
    font-size: 62px;
}

@media (max-width: 900px) {
    #section-title {
        font-size: 36px;
    }
    
    .section-desc{
    font-size:14px;
}

.platform-banner h3
 {
        text-align: center
         font-size:16px;
 }
 .platform-banner p{
font-size:14px;
 }
 
 .platform-ops-item{
font-size:14px;

 }
 .value-card h3{
     font-size:16px;
 }
 .value-card p{
     font-size:14px;
 }
}


 </style>
</head>
<body>
<?php include 'menu.php';?>
  <main>

    <section class="about-hero">
      <!-- <span class="section-label">About Arina AI</span> -->
      <h1 class="section-title" style="max-width:1000px;margin:0 auto 40px; margin-top: 80px !important;" id="section-title">Unified Intelligence Layer 
for All Technology Operations</h1>
      <p class="section-desc" style="margin:0 auto">With decades of experience on-call across SRE, NOC, and platform teams, we saw siloed ops teams drowning in alerts, solving the same problems in isolation.<br><br><b id="text">Arina unifies these teams and connects their efforts.</b></p>
    </section>
    <!-- <section class="section section-center"  style="padding-top:150px;padding-bottom: 50px;">
      <span class="badge"><span>›</span>OUR MISSION</span>
      <h2 class="section-title">Make Every Ops Team Superhuman</h2>
      <p class="section-desc"> Every minute of downtime costs revenue, erodes trust, and burns out engineers. But the highest hidden cost is fragmentation — SRE, NOC, DevSecOps, DataOps, and ITOps all working with different tools, different data, and different contexts. We believe a single AI platform that serves all ops functions from a shared intelligence layer can fundamentally transform how technology organizations operate — shifting from reactive firefighting to proactive, autonomous resilience.</p>
    </section> -->
    <section class="mission-section">

<!-- <div class="mission-box">

<span class="badge"><span>›</span>OUR MISSION</span>

<h2 class="mission-title">
Make Every Ops Team Superhuman
</h2>

<p class="mission-text">
Every minute of downtime costs revenue, erodes trust, and burns out engineers.
But the highest hidden cost is fragmentation — SRE, NOC, DevSecOps, DataOps,
and ITOps all working with different tools, different data, and different contexts.
We believe a single AI platform that serves all ops functions from a shared
intelligence layer can fundamentally transform how technology organizations operate.
</p>

</div> -->

</section>
    <!-- <section class="section section-center" style="background:var(--bg-secondary)">
      <span class="badge"><span>›</span>LEADERSHIP</span>
      <h2 class="section-title">Meet the Team</h2>
      <div class="team-grid"><div class="team-card"><div class="team-avatar">PS</div><h3>Priya Sharma</h3><div class="role">CEO & Co-Founder</div><p class="bio">Former VP Engineering at a Fortune 500 infrastructure company. 15+ years building reliability platforms at scale.</p></div>
<div class="team-card"><div class="team-avatar">JC</div><h3>James Chen</h3><div class="role">CTO & Co-Founder</div><p class="bio">Ex-Google SRE lead. Architected observability systems handling 10M+ events per second.</p></div>
<div class="team-card"><div class="team-avatar">AO</div><h3>Aisha Okafor</h3><div class="role">VP of Product</div><p class="bio">Previously led product for incident management at a leading DevOps platform.</p></div>
<div class="team-card"><div class="team-avatar">DK</div><h3>David Kim</h3><div class="role">Head of AI/ML</div><p class="bio">PhD in distributed systems. Former researcher at a top AI lab focused on autonomous operations.</p></div>
</div> -->
    </section>
     <section class="section1">
  <div style="max-width:800px;margin:-100px auto 0;text-align:center">
        <span class="badge" ><span>›</span>OUR MISSION</span>
      </div>
      <div class="platform-banner">
        
        <div>
          <h3>Make Every Ops Team Superhuman</h3>
          <p>Every minute of downtime costs revenue, erodes trust, and burns out engineers. But the highest hidden cost is fragmentation with all ops teams working with different tools, different data, and different contexts. We believe a single AI platform that serves all ops functions from a shared intelligence layer can fundamentally transform how technology organizations operate.</p>
        </div>
         <div class="platform-ops-list">
          <div class="platform-ops-item"><span class="dot" style="background:  white"></span>SRE</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>NOC</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>DevSecOps</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>DataOps</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>ITOps</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>Platform Eng.</div>
        </div> 
      </div>
    </section>
    <section class="section section-center" id="section2">
      <!-- <span class="section-label">Our Values</span>  -->
      <span class="badge"><span>›</span>OUR VALUES</span>
      <h2 class="section-title">What Drives Us</h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="feature-icon"><img src="logo/Ops-First Design.png" height="35px" width="35px" alt="Ops-First Design"></div>
          <h3>Ops-First Design</h3><p>We build for every ops practitioner: SREs, NOC analysts, security engineers, data engineers, and IT operators. Every feature reduces toil across disciplines.</p>
        </div>
        <div class="value-card">
          <div class="feature-icon"><img src="logo/Transparency in AI.png" height="35px" width="35px" alt="Transparency in AI"></div>
          <h3>Transparency in AI</h3><p>Arina always shows its reasoning. No black boxes. Every diagnosis comes with evidence, confidence scores, and cross-domain context.</p>
        </div>
        <div class="value-card">
          <div class="feature-icon"><img src="logo/One Platform.png" height="35px" width="35px" alt="One Platform"></div>
          <h3>Unified Platform</h3><p>The industry has too many siloed tools. We believe one unified AI platform serving all ops teams creates exponentially more value than separate tools for each.</p>
        </div>
        <div class="value-card">
          <div class="feature-icon"><img src="logo/Continuous Learning.png" height="35px" width="35px" alt="Continuous Learning"></div>
          <h3>Continuous Learning</h3><p>Arina improves with every incident across every ops domain. Cross-domain feedback loops drive accuracy and surface patterns no single team could find alone.</p>
        </div>
        <div class="value-card">
          <div class="feature-icon"><img src="logo/Integrate.png" height="35px" width="35px" alt="Integrate Don't Replace"></div>
          <h3> No Replacement </h3><p>We enhance your existing tools (Datadog, PagerDuty, ServiceNow, Snyk, and Snowflake) instead of asking you to rip and replace.</p>
        </div>
        <div class="value-card">
          <div class="feature-icon"><img src="logo/Security Without Compromise.png" height="35px" width="35px" alt="Security Without Compromise"></div>
          <h3>Fully Secure</h3><p>Enterprise-grade security is table stakes. VPC deployable, read-only by default, with per-team governance controls</p>
        </div>
      </div>
    </section>
    <!-- <div class="cta-banner">
  <h2>One Platform. Every Ops Team. Instant Impact.</h2>
  <p>Whether you run SRE, NOC, DevSecOps, DataOps, or ITOps — Arina AI adapts to your workflows and starts resolving incidents autonomously from day one.</p>
  <a class="btn-primary" href="contact.php">Book a Demo →</a>
</div> -->

<section class="smart-cta-hero">

      <div class="smart-cta-badge">
        <span class="badge"><span>›</span>Contact Us</span>
      </div>

      <h1 class="smart-cta-title">
        One Platform. Every Ops Team. Instant Impact.
      </h1>

      <p class="smart-cta-text">
        Whether you run SRE, NOC, DevSecOps, DataOps, or ITOps, Arina adapts to your workflows and starts resolving
        incidents autonomously from day one.
      </p>

      <a href="contact.php#bookademo" class="smart-cta-btn">
        Book a Demo
      </a>

    </section>
  </main>
<?php include 'footer.php';?>

  <script>
/* ── Arina AI Microsite — Vanilla JS ── */

// ─── Navbar scroll effect ───────────────────────────────
window.addEventListener('scroll', function() {
  var nb = document.getElementById('navbar');
  if (nb) nb.classList.toggle('scrolled', window.scrollY > 40);
});

// ─── Use Case Tabs (renders on Home + Product pages) ────
var USE_CASES = [
  { id:"sre", label:"SRE", title:"Site Reliability Engineering", tagline:"Autonomous incident response for always-on reliability", icon:"\u26A1", color:"#4F7BF7",
    description:"Arina acts as your AI SRE \u2014 detecting anomalies, correlating signals across your observability stack, identifying root cause, and executing remediation. Reduce MTTR from hours to minutes and give your on-call engineers their nights back.",
    capabilities:["Real-time anomaly detection across metrics, logs, and traces","Automated root cause analysis with 94%+ accuracy","Change-aware investigation linking incidents to deployments","Auto-remediation with rollbacks, scaling, and config changes","Post-incident report generation and runbook updates"],
    metric:"90%", metricLabel:"Reduction in MTTR" },
  { id:"noc", label:"NOC", title:"Network Operations Center", tagline:"Intelligent alert management for 24/7 operations teams", icon:"\uD83D\uDCE1", color:"#22C55E",
    description:"Transform your NOC from a reactive alert-watching operation into an intelligent command center. Arina correlates thousands of alerts into actionable incidents, eliminates noise, and provides L1 operators with guided investigation paths \u2014 dramatically reducing escalations.",
    capabilities:["Intelligent alert correlation and deduplication across all sources","Automated triage and severity classification","Guided investigation workflows for L1 operators","Escalation reduction through context-rich diagnosis","Real-time operational dashboards and SLA tracking"],
    metric:"70%", metricLabel:"Fewer Escalations" },
  { id:"devsecops", label:"DevSecOps", title:"DevSecOps", tagline:"Shift-left security with AI-powered vulnerability triage", icon:"\uD83D\uDD12", color:"#F59E0B",
    description:"Arina bridges the gap between security scanning and engineering action. It automatically triages vulnerability findings, correlates them with runtime behavior and deployment context, and prioritizes what actually matters \u2014 so your team fixes real risks, not noise.",
    capabilities:["Automated vulnerability triage and prioritization","Runtime-aware risk scoring based on actual exposure","Security incident correlation with infrastructure events","Compliance drift detection and automated alerting","Integration with Snyk, SonarQube, Vault, and CI/CD pipelines"],
    metric:"5x", metricLabel:"Faster Vuln Remediation" },
  { id:"dataops", label:"DataOps", title:"Data Operations", tagline:"Proactive data pipeline monitoring and anomaly detection", icon:"\uD83D\uDDC4\uFE0F", color:"#A855F7",
    description:"Data pipelines are critical infrastructure, but they break silently. Arina monitors your data workflows end-to-end \u2014 detecting schema changes, data quality issues, pipeline failures, and freshness anomalies before downstream consumers are affected.",
    capabilities:["End-to-end data pipeline health monitoring","Schema change detection and impact analysis","Data freshness and quality anomaly detection","Automated root cause analysis for failed workflows","Integration with Snowflake, Airflow, dbt, and Spark"],
    metric:"60%", metricLabel:"Fewer Data Incidents" },
  { id:"itops", label:"ITOps", title:"IT Operations", tagline:"Intelligent service management and infrastructure health", icon:"\uD83D\uDDA5\uFE0F", color:"#EC4899",
    description:"Arina supercharges your IT operations by automating ticket triage, correlating infrastructure health signals, and providing service desk teams with instant diagnosis. Resolve tickets faster, reduce repeat incidents, and maintain infrastructure health at scale.",
    capabilities:["Automated ticket classification and routing","Infrastructure health correlation across hybrid environments","Repeat incident detection and problem management insights","Change impact analysis before and after maintenance windows","ServiceNow and Zendesk integration for seamless workflows"],
    metric:"45%", metricLabel:"Faster Ticket Resolution" },
  { id:"platform", label:"Platform Eng.", title:"Platform Engineering", tagline:"Self-healing infrastructure and developer experience", icon:"\uD83C\uDFD7\uFE0F", color:"#06B6D4",
    description:"Empower your platform team with AI-driven insights into infrastructure reliability, developer friction points, and deployment health. Arina identifies patterns across your internal developer platform to proactively surface issues and optimize the path to production.",
    capabilities:["Deployment health scoring and rollback recommendations","Developer experience metrics and bottleneck detection","Infrastructure cost anomaly detection","Self-healing automation for common infrastructure failures","Golden path compliance monitoring across teams"],
    metric:"3x", metricLabel:"Faster Deploy Cycles" }
];

function renderUseCaseTabs() {
  var tabsEl = document.getElementById('usecase-tabs');
  var panelEl = document.getElementById('usecase-panel');
  if (!tabsEl || !panelEl) return;

  // Build tabs
  var tabsHTML = '';
  USE_CASES.forEach(function(uc) {
    tabsHTML += '<button class="usecase-tab' + (uc.id === 'sre' ? ' active' : '') + '" data-uc="' + uc.id + '">' + uc.icon + ' ' + uc.label + '</button>';
  });
  tabsEl.innerHTML = tabsHTML;

  // Tab click handler
  tabsEl.addEventListener('click', function(e) {
    var btn = e.target.closest('.usecase-tab');
    if (!btn) return;
    tabsEl.querySelectorAll('.usecase-tab').forEach(function(t) { t.classList.remove('active'); });
    btn.classList.add('active');
    renderUseCasePanel(btn.getAttribute('data-uc'));
  });

  renderUseCasePanel('sre');
}

function renderUseCasePanel(id) {
  var panelEl = document.getElementById('usecase-panel');
  if (!panelEl) return;
  var uc = USE_CASES.find(function(u) { return u.id === id; });
  if (!uc) return;

  var capsHTML = '';
  uc.capabilities.forEach(function(cap) {
    capsHTML += '<li><span class="check" style="color:' + uc.color + '">✓</span>' + cap + '</li>';
  });

  panelEl.innerHTML =
    '<div>' +
      '<div class="usecase-panel-icon" style="background:' + uc.color + '12;border-color:' + uc.color + '30">' + uc.icon + '</div>' +
      '<h3>' + uc.title + '</h3>' +
      '<div class="tagline">' + uc.tagline + '</div>' +
      '<p class="desc">' + uc.description + '</p>' +
      '<ul class="usecase-capabilities">' + capsHTML + '</ul>' +
    '</div>' +
    '<div class="usecase-metric-card">' +
      '<div style="font-size:48px;margin-bottom:24px">' + uc.icon + '</div>' +
      '<div class="usecase-metric-number" style="color:' + uc.color + '">' + uc.metric + '</div>' +
      '<div class="usecase-metric-label">' + uc.metricLabel + '</div>' +
      '<div class="usecase-metric-context">Measured across production deployments with Arina AI handling ' + uc.title + ' workflows autonomously.</div>' +
    '</div>';
}

// ─── FAQ Accordion ──────────────────────────────────────
function toggleFaq(btn) {
  var item = btn.parentElement;
  var answer = item.querySelector('.faq-answer');
  var arrow = btn.querySelector('.faq-arrow');
  var isOpen = answer.classList.contains('open');

  // Close all
  document.querySelectorAll('.faq-answer.open').forEach(function(a) { a.classList.remove('open'); });
  document.querySelectorAll('.faq-arrow.open').forEach(function(a) { a.classList.remove('open'); });

  if (!isOpen) {
    answer.classList.add('open');
    arrow.classList.add('open');
  }
}

// ─── Integrations Filter ────────────────────────────────
function filterIntegrations(category, btn) {
  // Update active button
  document.querySelectorAll('.integrations-filter .filter-btn').forEach(function(b) { b.classList.remove('active'); });
  btn.classList.add('active');

  // Filter cards
  document.querySelectorAll('#integrations-grid .integration-card').forEach(function(card) {
    if (category === 'All' || card.getAttribute('data-category') === category) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  });
}

// ─── Contact Form ───────────────────────────────────────
function handleContactSubmit(e) {
  e.preventDefault();
  document.getElementById('contact-form').style.display = 'none';
  document.getElementById('contact-success').style.display = 'block';
}

// ─── Init on DOM Ready ──────────────────────────────────
document.addEventListener('DOMContentLoaded', function() {
  renderUseCaseTabs();
});

</script>
</body>
</html>