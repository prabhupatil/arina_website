<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Integrations | Arina AI</title>
 <link rel="stylesheet" href="css/integrations.css">
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
      font-size: clamp(36px, 6vw,62px);
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
      margin-bottom: 30px;
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
    }#text{
    font-size:18px;
}

#section-title
 {
    font-size: 62px;
}

  @media(max-width:900px){
    #section-title
 {
    font-size: 36px;
}


  }
 </style>
</head>
<body>
 <?php include 'menu.php';?>
  <main>

    <section class="about-hero">
      <!-- <span class="section-label">Integrations</span> -->
      <h1 class="section-title" style="max-width:900px;margin:0 auto 40px; margin-top: 80px !important;" id="section-title">Connects to Your <br>Entire Technology Estate</h1>
      <p class="section-desc" style="margin:0 auto">Arina integrates with 50+ tools across observability, incident management, security, data platforms, infrastructure, and communication. <br><br><b id="text">Powering every ops team from a single connected platform.</b></p>
    </section>
    <section class="section" style="padding-top:0">
      <div class="section-center">
        <div class="integrations-filter"><button class="filter-btn active" onclick="filterIntegrations('All',this)">All</button><button class="filter-btn" onclick="filterIntegrations('Cloud',this)">Cloud</button><button class="filter-btn" onclick="filterIntegrations('Code & CI/CD',this)">Code & CI/CD</button><button class="filter-btn" onclick="filterIntegrations('Communication',this)">Communication</button><button class="filter-btn" onclick="filterIntegrations('Data Platforms',this)">Data Platforms</button><button class="filter-btn" onclick="filterIntegrations('ITSM',this)">ITSM</button><button class="filter-btn" onclick="filterIntegrations('Incident Mgmt',this)">Incident Mgmt</button><button class="filter-btn" onclick="filterIntegrations('Infrastructure',this)">Infrastructure</button><button class="filter-btn" onclick="filterIntegrations('Observability',this)">Observability</button><button class="filter-btn" onclick="filterIntegrations('Project Mgmt',this)">Project Mgmt</button><button class="filter-btn" onclick="filterIntegrations('Security',this)">Security</button></div>
      </div>
      
      
      
 
          
          
    <div class="integrations-grid" id="integrations-grid">

<div class="integration-card" data-category="Code & CI/CD"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/27.png" height="50" width="50"></div><div class="name">Ansible</div><div class="cat">Code & CI/CD</div></div>

<div class="integration-card" data-category="Data Platforms"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/21.png" height="50" width="50"></div><div class="name">Apache Airflow</div><div class="cat">Data Platforms</div></div>

<div class="integration-card" data-category="Data Platforms"><div class="icon"><img src="newlogos/34.png" height="50" width="50"></div><div class="name">Apache Spark</div><div class="cat">Data Platforms</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="newlogos/26.png" height="50" width="50"></div><div class="name">AppDynamics</div><div class="cat">Observability</div></div>


<div class="integration-card" data-category="Cloud"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/12.png" height="50" width="50"></div><div class="name">AWS</div><div class="cat">Cloud</div></div>

<div class="integration-card" data-category="Data Platforms"><div class="icon"><img src="newlogos/30.png" height="50" width="50"></div><div class="name">BigQuery</div><div class="cat">Data Platforms</div></div>

<div class="integration-card" data-category="ITSM"><div class="icon"><img src="newlogos/38.png" height="50" width="50"></div><div class="name">BMC Remedy</div><div class="cat">ITSM</div></div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="newlogos/4.png" height="50" width="50"></div><div class="name">Cisco</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="newlogos/22.png" height="50" width="50"></div><div class="name">Ciena</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Project Mgmt"><div class="icon"><img src="newlogos/16.png" height="50" width="50"></div><div class="name">Confluence</div><div class="cat">Project Mgmt</div></div>

<div class="integration-card" data-category="Data Platforms"><div class="icon"><img src="newlogos/32.png" height="50" width="50"></div><div class="name">Databricks</div><div class="cat">Data Platforms</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/2.png" height="50" width="50"></div><div class="name">Datadog</div><div class="cat">Observability</div></div>



<div class="integration-card" data-category="Data Platforms"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/22.png" height="50" width="50"></div><div class="name">dbt</div><div class="cat">Data Platforms</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="newlogos/28.png" height="50" width="50"></div><div class="name">Dynatrace</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/18.png" height="50" width="50"></div><div class="name">Elasticsearch</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Cloud"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/14.png" height="50" width="50"></div><div class="name">GCP</div><div class="cat">Cloud</div></div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="newlogos/24.png" height="50" width="50"></div><div class="name">Generic CLI</div><div class="cat">Infrastructure</div></div>



<div class="integration-card" data-category="Code & CI/CD"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/15.png" height="50" width="50"></div><div class="name">GitHub</div><div class="cat">Code & CI/CD</div></div>

<div class="integration-card" data-category="Code & CI/CD"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/16.png" height="50" width="50"></div><div class="name">GitLab</div><div class="cat">Code & CI/CD</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/3.png" height="50" width="50"></div><div class="name">Grafana</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="newlogos/10.png" height="50" width="50"></div><div class="name">Grafana Tempo</div><div class="cat">Observability</div></div>

 <div class="integration-card" data-category="Code & CI/CD">
        <div class="icon">
            <img
                src="newlogos/2.png"
                height="50px"
                width="50px"
                alt=""
                srcset=""
            />
        </div>
        <div class="name">Harness</div>
        <div class="cat">Code & CI/CD</div>
    </div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="newlogos/6.png" height="50" width="50"></div><div class="name">Juniper</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Code & CI/CD"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/17.png" height="50" width="50"></div><div class="name">Jenkins</div><div class="cat">Code & CI/CD</div></div>

  <!--<div class="integration-card" data-category="Project Mgmt">-->
  <!--      <div class="icon">-->
  <!--          <img-->
  <!--              src="Arina_Integration_Logos/Arina_Integration_Logos/6.png"-->
  <!--              height="50px"-->
  <!--              width="50px"-->
  <!--              alt=""-->
  <!--              srcset=""-->
  <!--          />-->
  <!--      </div>-->
  <!--      <div class="name">Jira</div>-->
  <!--      <div class="cat">Project Mgmt</div>-->
  <!--  </div>-->


<div class="integration-card" data-category="ITSM"><div class="icon"> <img src="newlogos/20.png" height="50px" width="50px" alt="" srcset=""/></div><div class="name">Jira</div>
        <div class="cat">ITSM</div>
    </div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="newlogos/18.png" height="50" width="50"></div><div class="name">Kafka</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/19.png" height="50" width="50"></div><div class="name">Kubernetes</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Cloud"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/13.png" height="50" width="50"></div><div class="name">Microsoft Azure</div><div class="cat">Cloud</div></div>

<div class="integration-card" data-category="Communication"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/5.png" height="50" width="50"></div><div class="name">Microsoft Teams</div><div class="cat">Communication</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/11.png" height="50" width="50"></div><div class="name">New Relic</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="newlogos/8.png" height="50" width="50"></div><div class="name">OpenSearch</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Incident Mgmt"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/8.png" height="50" width="50"></div><div class="name">OpsGenie</div><div class="cat">Incident Mgmt</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="newlogos/14.png" height="50" width="50"></div><div class="name">OTEL</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Incident Mgmt"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/1.png" height="50" width="50"></div><div class="name">PagerDuty</div><div class="cat">Incident Mgmt</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/10.png" height="50" width="50"></div><div class="name">Prometheus</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Communication"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/4.png" height="50" width="50"></div><div class="name">Slack</div><div class="cat">Communication</div></div>

<div class="integration-card" data-category="Data Platforms"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/20.png" height="50" width="50"></div><div class="name">Snowflake</div><div class="cat">Data Platforms</div></div>

<div class="integration-card" data-category="Security"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/25.png" height="50" width="50"></div><div class="name">SonarQube</div><div class="cat">Security</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/9.png" height="50" width="50"></div><div class="name">Splunk</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="Security"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/24.png" height="50" width="50"></div><div class="name">Snyk</div><div class="cat">Security</div></div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/26.png" height="50" width="50"></div><div class="name">Terraform</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Infrastructure"><div class="icon"><img src="newlogos/40.png" height="50" width="50"></div><div class="name">VMWare</div><div class="cat">Infrastructure</div></div>

<div class="integration-card" data-category="Observability"><div class="icon"><img src="newlogos/12.png" height="50" width="50"></div><div class="name">Zabbix</div><div class="cat">Observability</div></div>

<div class="integration-card" data-category="ITSM"><div class="icon"><img src="Arina_Integration_Logos/Arina_Integration_Logos/28.png" height="50" width="50"></div><div class="name">Zendesk</div><div class="cat">ITSM</div></div>

</div>

</div>

</div>
   
      <div style="text-align:center;margin-top:100px">
        <p style="color: var(--text-secondary);margin-bottom:24px;font-size:16px"> Don't see your tool?</p>
        <a class="btn-secondary" href="contact.php">Request an Integration</a>
      </div>
      <!-- <div style="max-width:800px;margin:64px auto 0;text-align:center ; padding:150px">
        <span class="badge" ><span>›</span>WHY IT MATTERS</span>
      </div> -->
    </section>
    <!-- <div class="cta-banner">
  <h2>One Platform. Every Ops Team. Instant Impact.</h2>
  <p>Whether you run SRE, NOC, DevSecOps, DataOps, or ITOps — Arina AI adapts to your workflows and starts resolving incidents autonomously from day one.</p>
  <a class="btn-primary" href="contact.php">Book a Demo →</a>
</div> -->

 <section class="section">
  <div style="max-width:800px;margin:-100px auto 0;text-align:center">
        <span class="badge" ><span>›</span>WHY IT MATTERS</span>
      </div>
      <div class="platform-banner">
        
        <div>
          <h3>Cross-Domain Signals, <br>Cross-Domain Intelligence</h3>
          <p>When your SRE tools, NOC alerts, security scanners, data platforms, and ITSM systems all feed into one AI platform, Arina can see patterns that siloed tools never will. A security patch that causes a data pipeline failure that triggers an SRE alert: Arina connects all three in seconds.</p>
        </div>
         <div class="platform-ops-list">
          <div class="platform-ops-item"><span class="dot" style="background: white"></span>SRE</div>
          <div class="platform-ops-item"><span class="dot" style="background: white"></span>NOC</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>DevSecOps</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>DataOps</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>ITOps</div>
          <div class="platform-ops-item"><span class="dot" style="background:white"></span>Platform Eng.</div>
        </div>
      </div>
    </section>


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