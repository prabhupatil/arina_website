<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Arina AI</title>
  <link rel="stylesheet" href="css/contact.css">
  <link rel="shortcut icon" href="logo/ARINA _favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>

form{max-width:600px;margin:auto}

input,textarea{
width:100%;
padding:10px;
margin-bottom:12px;
}

button{
padding:12px 25px;
cursor:pointer;
}

.msg{
margin-top:10px;
font-weight:600;
}

.success{color:green}
.error{color:red}


#text{
    font-size:18px;
}
</style>
</head>

<body>
<?php include 'menu.php';?>
  <main>

    <section class="about-hero" >
      <!-- <span class="section-label">Contact</span> -->
      <h1 class="section-title">We’d Love to <br>Hear From You</h1>
      <p class="section-desc" style="margin:0 auto">See how Arina can supercharge your SRE, NOC, DevSecOps, DataOps,
        ITOps, or Platform Engineering team. <br><br><b id="text">Book a personalized demo.</b></p>
    </section>
    <div class="contact-info1">
              <h3>Get in Touch</h3>
          <p>Whether you're evaluating AI for a single ops team or looking to unify all your technology operations under
            one platform, we'd love to show you what Arina can do.</p>
            </div>
    <section class="section" style="padding-top:0" id="bookademo">
      <div class="contact-grid">
        <div>
          <form class="contact-form" id="contact-form"  action="config.php" method="POST">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px">
              <div class="form-group"><label>First Name</label><input type="text" name="first_name" placeholder="Jane" required></div>
              <div class="form-group"><label>Last Name</label><input type="text" name="last_name"  placeholder="Smith" required></div>
            </div>
            <div class="form-group"><label>Work Email</label><input type="email" name="work_email" placeholder="jane@company.com"
                required></div>
            <div class="form-group"><label>Company</label><input type="text" name="company"placeholder="Acme Corp" required></div>
            <div class="form-group"><label>Your Role</label>
              <select name="role" required >
                <option value="" disabled selected >Select your role</option>
                <option>SRE / DevOps Engineer</option>
                <option>NOC Analyst / Manager</option>
                <option>Security Engineer / CISO</option>
                <option>Data Engineer / DataOps Lead</option>
                <option>IT Operations Manager</option>
                <option>Platform Engineer</option>
                <option>Engineering Manager / Director</option>
                <option>VP / CTO / CIO</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group"><label>Which ops domains are you interested in?</label>
              <select  name="ops_domains" required>
                <option value="" disabled selected  >Select primary interest</option>
                <option>SRE — Incident Detection &amp; Resolution</option>
                <option>NOC — Alert Management &amp; Triage</option>
                <option>DevSecOps — Vulnerability Triage &amp; Compliance</option>
                <option>DataOps — Pipeline Monitoring &amp; Data Quality</option>
                <option>ITOps — Service Management &amp; Ticketing</option>
                <option>Platform Engineering — Infrastructure Reliability</option>
                <option>Multiple / All of the above</option>
              </select>
            </div>
            <div class="form-group"
              style="display:flex;align-items:flex-start;gap:10px;padding:14px 16px;">
              <input type="checkbox" id="integration-interest" name="integration_interest" value="Yes"
                style="width:18px;height:18px;min-width:18px;margin-top:2px;accent-color:#4F7BF7;cursor:pointer">
              <label for="integration-interest"
                style="margin:0;font-size:14px;color:var(--text-secondary);cursor:pointer;line-height:1.5">I'm
                Interested in my product/tool integration with Arina.</label>
            </div>
            <div class="form-group"><label>How can we help?</label><textarea
                placeholder="Tell us about your operations challenges..." name="help_message"></textarea></div>

                <div class="g-recaptcha" data-sitekey="6Led8IIsAAAAADBlEX5dN_JojtGwE7cooGafSvpK"></div>

            <button type="submit" class="btn-primary " style="width:100%;justify-content:center" id="submitBtn"name="submit">Submit</button>
       <div id="formMessage" class="msg"></div>

          </form>


          <!-- <div id="contact-success" style="display:none;text-align:center;padding:80px 20px">
            <div style="font-size:48px;margin-bottom:16px">✓</div>
            <h3 style="font-family:var(--font-display);font-size:24px;font-weight:700;margin-bottom:8px">Thank you!</h3>
            <p style="color:var(--text-secondary)">We'll be in touch within 24 hours to schedule your personalized demo.
            </p>
          </div> -->
        </div>
        
        <div class="contact-info">
          <h3 class="text">Get in Touch</h3>
          <p  class="text">Whether you're evaluating AI for a single ops team or looking to unify all your technology operations under
            one platform, we'd love to show you what Arina can do.</p>
        
        <div class="info-bottom">
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="bi bi-envelope-at"  style="font-size:20px"></i></div>
            <div class="contact-detail-text">
              <div class="label" style="color:#0066ff">Email</div>
              <div class="value">info@softility.com</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="bi bi-phone" style="font-size:20px"></i></div>
            <div class="contact-detail-text">
              <div class="label"style="color:#0066ff">Phone</div>
              <div class="value">+1-703-853-1845</div>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i class="bi bi-globe" style="font-size:20px"></i></div>
            <div class="contact-detail-text">
              <div class="label"style="color:#0066ff">Headquarters</div>
              <div class="value">Herndon, VA 20170 USA</div>
            </div>
          </div>
        </div>
          <!-- <div class="contact-detail" style="border-bottom:none"><div class="contact-detail-icon">🔒</div><div class="contact-detail-text"><div class="label">Security</div><div class="value">SOC 2 Type II Certified</div></div></div> -->
      </div>
      </div>
    </section>

  </main>

<?php include 'footer.php';?>

  <script>
    /* ── Arina AI Microsite — Vanilla JS ── */

    // ─── Navbar scroll effect ───────────────────────────────
    window.addEventListener('scroll', function () {
      var nb = document.getElementById('navbar');
      if (nb) nb.classList.toggle('scrolled', window.scrollY > 40);
    });

    // ─── Use Case Tabs (renders on Home + Product pages) ────
    var USE_CASES = [
      {
        id: "sre", label: "SRE", title: "Site Reliability Engineering", tagline: "Autonomous incident response for always-on reliability", icon: "\u26A1", color: "#4F7BF7",
        description: "Arina acts as your AI SRE \u2014 detecting anomalies, correlating signals across your observability stack, identifying root cause, and executing remediation. Reduce MTTR from hours to minutes and give your on-call engineers their nights back.",
        capabilities: ["Real-time anomaly detection across metrics, logs, and traces", "Automated root cause analysis with 94%+ accuracy", "Change-aware investigation linking incidents to deployments", "Auto-remediation with rollbacks, scaling, and config changes", "Post-incident report generation and runbook updates"],
        metric: "90%", metricLabel: "Reduction in MTTR"
      },
      {
        id: "noc", label: "NOC", title: "Network Operations Center", tagline: "Intelligent alert management for 24/7 operations teams", icon: "\uD83D\uDCE1", color: "#22C55E",
        description: "Transform your NOC from a reactive alert-watching operation into an intelligent command center. Arina correlates thousands of alerts into actionable incidents, eliminates noise, and provides L1 operators with guided investigation paths \u2014 dramatically reducing escalations.",
        capabilities: ["Intelligent alert correlation and deduplication across all sources", "Automated triage and severity classification", "Guided investigation workflows for L1 operators", "Escalation reduction through context-rich diagnosis", "Real-time operational dashboards and SLA tracking"],
        metric: "70%", metricLabel: "Fewer Escalations"
      },
      {
        id: "devsecops", label: "DevSecOps", title: "DevSecOps", tagline: "Shift-left security with AI-powered vulnerability triage", icon: "\uD83D\uDD12", color: "#F59E0B",
        description: "Arina bridges the gap between security scanning and engineering action. It automatically triages vulnerability findings, correlates them with runtime behavior and deployment context, and prioritizes what actually matters \u2014 so your team fixes real risks, not noise.",
        capabilities: ["Automated vulnerability triage and prioritization", "Runtime-aware risk scoring based on actual exposure", "Security incident correlation with infrastructure events", "Compliance drift detection and automated alerting", "Integration with Snyk, SonarQube, Vault, and CI/CD pipelines"],
        metric: "5x", metricLabel: "Faster Vuln Remediation"
      },
      {
        id: "dataops", label: "DataOps", title: "Data Operations", tagline: "Proactive data pipeline monitoring and anomaly detection", icon: "\uD83D\uDDC4\uFE0F", color: "#A855F7",
        description: "Data pipelines are critical infrastructure, but they break silently. Arina monitors your data workflows end-to-end \u2014 detecting schema changes, data quality issues, pipeline failures, and freshness anomalies before downstream consumers are affected.",
        capabilities: ["End-to-end data pipeline health monitoring", "Schema change detection and impact analysis", "Data freshness and quality anomaly detection", "Automated root cause analysis for failed workflows", "Integration with Snowflake, Airflow, dbt, and Spark"],
        metric: "60%", metricLabel: "Fewer Data Incidents"
      },
      {
        id: "itops", label: "ITOps", title: "IT Operations", tagline: "Intelligent service management and infrastructure health", icon: "\uD83D\uDDA5\uFE0F", color: "#EC4899",
        description: "Arina supercharges your IT operations by automating ticket triage, correlating infrastructure health signals, and providing service desk teams with instant diagnosis. Resolve tickets faster, reduce repeat incidents, and maintain infrastructure health at scale.",
        capabilities: ["Automated ticket classification and routing", "Infrastructure health correlation across hybrid environments", "Repeat incident detection and problem management insights", "Change impact analysis before and after maintenance windows", "ServiceNow and Zendesk integration for seamless workflows"],
        metric: "45%", metricLabel: "Faster Ticket Resolution"
      },
      {
        id: "platform", label: "Platform Eng.", title: "Platform Engineering", tagline: "Self-healing infrastructure and developer experience", icon: "\uD83C\uDFD7\uFE0F", color: "#06B6D4",
        description: "Empower your platform team with AI-driven insights into infrastructure reliability, developer friction points, and deployment health. Arina identifies patterns across your internal developer platform to proactively surface issues and optimize the path to production.",
        capabilities: ["Deployment health scoring and rollback recommendations", "Developer experience metrics and bottleneck detection", "Infrastructure cost anomaly detection", "Self-healing automation for common infrastructure failures", "Golden path compliance monitoring across teams"],
        metric: "3x", metricLabel: "Faster Deploy Cycles"
      }
    ];

    function renderUseCaseTabs() {
      var tabsEl = document.getElementById('usecase-tabs');
      var panelEl = document.getElementById('usecase-panel');
      if (!tabsEl || !panelEl) return;

      // Build tabs
      var tabsHTML = '';
      USE_CASES.forEach(function (uc) {
        tabsHTML += '<button class="usecase-tab' + (uc.id === 'sre' ? ' active' : '') + '" data-uc="' + uc.id + '">' + uc.icon + ' ' + uc.label + '</button>';
      });
      tabsEl.innerHTML = tabsHTML;

      // Tab click handler
      tabsEl.addEventListener('click', function (e) {
        var btn = e.target.closest('.usecase-tab');
        if (!btn) return;
        tabsEl.querySelectorAll('.usecase-tab').forEach(function (t) { t.classList.remove('active'); });
        btn.classList.add('active');
        renderUseCasePanel(btn.getAttribute('data-uc'));
      });

      renderUseCasePanel('sre');
    }

    function renderUseCasePanel(id) {
      var panelEl = document.getElementById('usecase-panel');
      if (!panelEl) return;
      var uc = USE_CASES.find(function (u) { return u.id === id; });
      if (!uc) return;

      var capsHTML = '';
      uc.capabilities.forEach(function (cap) {
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
      document.querySelectorAll('.faq-answer.open').forEach(function (a) { a.classList.remove('open'); });
      document.querySelectorAll('.faq-arrow.open').forEach(function (a) { a.classList.remove('open'); });

      if (!isOpen) {
        answer.classList.add('open');
        arrow.classList.add('open');
      }
    }

    // ─── Integrations Filter ────────────────────────────────
    function filterIntegrations(category, btn) {
      // Update active button
      document.querySelectorAll('.integrations-filter .filter-btn').forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');

      // Filter cards
      document.querySelectorAll('#integrations-grid .integration-card').forEach(function (card) {
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
    document.addEventListener('DOMContentLoaded', function () {
      renderUseCaseTabs();
    });

  </script>
<script>

document.getElementById("contact-form").addEventListener("submit",function(e){

e.preventDefault();

let btn=document.getElementById("submitBtn");
let msg=document.getElementById("formMessage");

btn.innerHTML="Submitting...";
btn.disabled=true;

let formData=new FormData(this);

fetch("config.php",{
method:"POST",
body:formData
})
.then(res=>res.text())
.then(data=>{

btn.innerHTML="Submit";
btn.disabled=false;

msg.innerHTML=data;

})
.catch(()=>{

btn.innerHTML="Submit";
btn.disabled=false;

msg.innerHTML="<span class='error'>Something went wrong</span>";

});

});

</script>

</body>

</html>