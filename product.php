<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Platform | Arina AI</title>
  <link rel="stylesheet" href="css/product.css">
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
      font-size: 20px;
     
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

.help-section{

padding:100px 20px;
color:#fff;
}

.help-header{
text-align:center;
margin-bottom:60px;
}

.help-tag{
color:#5b7cff;
letter-spacing:2px;
display:block;
margin-bottom:10px;
}

.help-title{
font-size:60px;
font-weight:700;
}

.help-wrapper{
max-width:900px;
margin:auto;
}

.help-box{
border-bottom:1px solid rgba(255,255,255,0.1);
padding:20px 0;
cursor:pointer;
}
.help-box:hover{
border-bottom: 2px solid #0066ff;
}

.help-question{
display:flex;
justify-content:space-between;
align-items:center;
font-size:20px;
font-weight:500;
}

.help-symbol{
font-size:26px;
color:#6f8cff;
}

.help-content{
max-height:0;
overflow:hidden;
opacity:0;
transition:all .4s ease;
color: var(--text-secondary);
line-height:1.7;
margin-top:10px;
}

.help-box.open .help-content{
max-height:200px;
opacity:1;
}

#coretext{
display: contents;
    
}

#section-title{
    font-size: 62px;
}

@media (max-width: 900px) {
  #section-title{
    font-size: 36px;
}
    .section-desc {
    font-size: 14px;
    
}
#text {
    font-size: 16px;
}
}
 </style>
</head>

<body>
<?php include 'menu.php';?>
  <main>

    <section class="about-hero"style="height:600px" >
      <!-- <span class="section-label">Platform</span> -->
      <h1 class="section-title"  id="section-title" style="max-width:800px;margin:0 auto 40px;margin-top: 80px !important;  ">One Agentic AI Platform for Every TechOps Team</h1>
      <p class="section-desc" style="margin:0 auto">Arina isn't a point solution. Our unified platform adapts and integrates with workflows, signals, and priorities across all techops.<br><br><b id="text">Autonomous ops. Any stack. Your environment.
        </b> </p>
      <!-- <div class="hero-ops-pills" style="margin-top:28px;margin-bottom:0"><span class="ops-pill" style="border-color:#4F7BF740;color:#4F7BF7">⚡ SRE</span><span class="ops-pill" style="border-color:#22C55E40;color:#22C55E">📡 NOC</span><span class="ops-pill" style="border-color:#F59E0B40;color:#F59E0B">🔒 DevSecOps</span><span class="ops-pill" style="border-color:#A855F740;color:#A855F7">🗄️ DataOps</span><span class="ops-pill" style="border-color:#EC489940;color:#EC4899">🖥️ ITOps</span><span class="ops-pill" style="border-color:#06B6D440;color:#06B6D4">🏗️ Platform Eng.</span></div> -->
       <br><br>

      <!-- <div class="tabs newtabs" id="tabs-product"></div> -->
    </section>

    <!-- USE CASES -->
    <section class="section use-cases-section" id="use-cases">

      <div class="section-header">
        <span class="badge"><span>›</span> USE CASES</span>
        <h1>One Platform, Purpose-Built for Every Ops Team</h1>
        <p class="section-desc">Arina is the first vendor-agnostic agentic Ops intelligence platform delivering the operational outcomes your tools always promised but never delivered.</p>
      </div>

      <div class="tabs newtabs" id="tabs-product"></div>

      <div class="content-wrapper concenter">

        <div class="left" style="font-size: 16px;">
          <div class="left-icon">
            <img id="leftIcon-product">
          </div>

          <h2 id="title-product"></h2>
          <h4 id="subtitle-product"></h4>
          <p id="description-product"></p>
          <ul id="list-product"></ul>
        </div>

        <div class="right">
          <div class="card">
            <img id="cardIcon-product">
            <h3 id="stat-product"></h3>
            <p id="statText-product"></p>
            <p id="details-product"></p>
          </div>
        </div>

      </div>
    </section>

    <!-- CORE ENGINE -->
    <section class="section" >
      <div class="section-center">
         <span class="badge"><span>›</span> CORE ENGINE</span>
        <!-- <span class="section-label">Core Engine</span> -->
        <h1 class="section-title ">The Intelligence Layer Behind Every Ops Team</h1>
        <p class="section-desc" id="coretext">Three core engines power detection, investigation, and remediation, drawing from a unified knowledge graph spanning your tech estate.</p>
      </div>

      <!-- Detection -->
      <!-- <div class="product-feature-row">
        <div class="product-feature-text">
          <span class="section-label">Detection Engine</span>
          <h3>Catch Issues Before They Escalate</h3>
          <p>A shared detection engine that ingests signals from every ops domain — infrastructure metrics, security
            alerts, data quality checks, ITSM tickets — and identifies anomalies using contextual baselines.</p>
          <ul class="feature-list">
            <li>Multi-signal anomaly detection across metrics, logs, traces, and security events</li>
            <li>Contextual baselines that adapt to deployment cycles and traffic patterns</li>
            <li>Cross-domain alert correlation: infrastructure events linked to security and data signals</li>
            <li>87% average alert noise reduction across all ops domains</li>
          </ul>
        </div>
        <div class="product-feature-visual">
          <div class="arch-diagram">
            <div><span class="highlight">UNIFIED INGEST</span> ──────────────────────</div>
            <div>│ <span class="accent">SRE</span> → Metrics, Logs, Traces</div>
            <div>│ <span class="accent">NOC</span> → Alerts, SNMP, Syslog</div>
            <div>│ <span class="accent">SecOps</span> → CVEs, WAF, Audit Logs</div>
            <div>│ <span class="accent">DataOps</span>→ Pipeline Health, Schema Drift</div>
            <div>│ <span class="accent">ITOps</span> → Tickets, CMDB, Change Records</div>
            <div><span class="highlight">ANALYZE</span> ─────────────────────────────</div>
            <div>│ Cross-Domain Correlation ✓</div>
            <div>│ Contextual Baselines ✓</div>
            <div>│ Noise Reduction: <span class="success">87% fewer alerts</span></div>
            <div><span class="highlight">OUTPUT</span> ──────────────────────────────</div>
            <div>│ → <span class="success">Unified Incident Created</span></div>
            <div>│ → Routed to correct ops team</div>
          </div>
        </div>
      </div> -->

      <!-- Investigation -->
      <!-- <div class="product-feature-row reverse">
        <div class="product-feature-text">
          <span class="section-label">Investigation Engine</span>
          <h3>Root Cause in Minutes, Across All Domains</h3>
          <p>When an incident is detected, Arina investigates autonomously — pulling data from observability, code
            repos, security scanners, data catalogs, and ITSM systems to build a complete cross-domain picture.</p>
          <ul class="feature-list">
            <li>Automated correlation across 30+ data source types</li>
            <li>Change-aware analysis linking incidents to deployments, config changes, and security patches</li>
            <li>Blast radius assessment across services, pipelines, and dependent systems</li>
            <li>Natural-language investigation summaries delivered to the right team</li>
          </ul>
        </div>
        <div class="product-feature-visual">
          <div class="arch-diagram">
            <div><span class="highlight">INCIDENT</span> #4821 ───────────────────</div>
            <div>│ <span class="accent">Signal:</span> P99 latency &gt; 2s (payments)</div>
            <div>│</div>
            <div>│ <span class="highlight">CROSS-DOMAIN INVESTIGATION</span> ─────</div>
            <div>│ ├─ <span class="accent">SRE:</span> CPU spike on payments-*</div>
            <div>│ ├─ <span class="accent">Code:</span> Deploy #782 merged 12m ago</div>
            <div>│ ├─ <span class="accent">Sec:</span> No new CVE exposure</div>
            <div>│ ├─ <span class="accent">Data:</span> Downstream ETL unaffected</div>
            <div>│ └─ <span class="accent">ITSM:</span> Related to CHG-0045891</div>
            <div>│</div>
            <div>│ <span class="success">ROOT CAUSE IDENTIFIED</span></div>
            <div>│ Deploy #782 → N+1 query → OOM</div>
            <div>│ Confidence: <span class="success">94%</span></div>
          </div>
        </div>
      </div> -->

      <!-- Remediation -->
      <!-- <div class="product-feature-row">
        <div class="product-feature-text">
          <span class="section-label">Remediation Engine</span>
          <h3>Fix It Fast, Across Every Ops Workflow</h3>
          <p>Arina doesn't just diagnose — it acts. Each ops domain gets tailored remediation workflows: rollbacks for
            SRE, ticket routing for ITOps, vulnerability prioritization for DevSecOps, pipeline restarts for DataOps.
          </p>
          <ul class="feature-list">
            <li>Domain-specific remediation actions with configurable approval gates</li>
            <li>SRE: rollbacks, scaling, config changes with full audit trail</li>
            <li>NOC: automated escalation routing and L1 resolution guidance</li>
            <li>DevSecOps: risk-prioritized vulnerability fix recommendations</li>
            <li>ITOps: ticket auto-classification, routing, and resolution suggestions</li>
          </ul>
        </div>
        <div class="product-feature-visual">
          <div class="arch-diagram">
            <div><span class="highlight">REMEDIATION ENGINE</span> ─────────────</div>
            <div>│</div>
            <div>│ <span class="accent">SRE:</span> Rollback deploy #782</div>
            <div>│ <span class="success">✓ Approved &amp; executed</span></div>
            <div>│ <span class="accent">NOC:</span> Alert suppressed, status updated</div>
            <div>│ <span class="success">✓ Auto-resolved</span></div>
            <div>│ <span class="accent">ITSM:</span> INC-9921 closed, CHG linked</div>
            <div>│ <span class="success">✓ Auto-closed</span></div>
            <div>│</div>
            <div>│ <span class="highlight">POST-INCIDENT</span> ──────────────────</div>
            <div>│ Cross-domain timeline ✓</div>
            <div>│ Runbooks updated ✓</div>
            <div>│ Knowledge graph enriched ✓</div>
          </div>
        </div>
      </div> -->
      <div style="max-width:1200px;margin:0 auto;padding:0 60px;" class="perf-mobile">
        <div class="perf-grid">

          <!-- LEFT: Tab Menu -->
          <div class="perf-tabs-menu" id="tabMenu">

            <!-- ── ITEM 1: Detection Engine ── -->
            <div class="perf-item active" data-tab="1" data-color="blue">
              <div class="perf-question-flex">
                <div class="perf-question" style="-webkit-text-fill-color: transparent;
      font-size: 16px;
      margin-bottom: 20px;
       background: linear-gradient(90deg, rgb(0, 102, 255), rgb(54, 197, 243)) text;">Detection Engine</div>
                <svg class="perf-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
              <div class="perf-answer-wrap">
                <p class="perf-answer">A unified engine that ingests signals from every ops domain: metrics,
                  security alerts, data quality checks, ITSM tickets, and identifies anomalies using
                  contextual baselines that adapt over time.</p>
                <ul class="perf-answer-list">
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Multi-signal
                    anomaly detection across metrics, logs, traces, and security events</li>
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Contextual
                    baselines that adapt to deployment cycles and traffic patterns</li>
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Cross-domain
                    alert correlation: infrastructure events linked to security and data signals</li>
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>87%
                    average alert noise reduction across all ops domains</li>
                </ul>
                <!-- <div class="perf-stat"
                            style="background:rgba(79,123,247,0.08);border:1px solid rgba(79,123,247,0.18);">
                            <span
                                style="font-size:24px;font-weight:800;background:linear-gradient(90deg,#4F7BF7,#36c5f3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">87%</span>
                            <span style="color:rgba(240,241,245,0.6);font-size:12px;">Alert Noise Reduced</span>
                        </div> -->
              </div>
            </div>

            <!-- ── ITEM 2: Investigation Engine ── -->
            <div class="perf-item" data-tab="2" data-color="purple">
              <div class="perf-question-flex">
                <div class="perf-question"style="-webkit-text-fill-color: transparent;
    font-size: 16px;
    margin-bottom: 20px;
    background: linear-gradient(90deg, rgb(0, 102, 255), rgb(54, 197, 243)) text;">Investigation Engine</div>
                <svg class="perf-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
              <div class="perf-answer-wrap">
                <p class="perf-answer">When an incident is detected, Arina investigates autonomously, pulling
                  data from observability, code repos, security scanners, data catalogs, and ITSM systems to
                  build a complete cross-domain picture in minutes.</p>
                <ul class="perf-answer-list">
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Automated
                    correlation across 30+ data source types</li>
                  <li><span class="check"
                     style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Change-aware
                    analysis linking incidents to deployments, config changes, and patches</li>
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Blast
                    radius assessment across services, pipelines, and dependent systems</li>
                  <li><span class="check"
                     style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>94%
                    root cause accuracy with automated confidence scoring</li>
                </ul>
                <!-- <div class="perf-stat"
                            style="background:rgba(123,92,245,0.08);border:1px solid rgba(123,92,245,0.18);">
                            <span
                                style="font-size:24px;font-weight:800;background:linear-gradient(90deg,#7B5CF5,#A855F7);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">94%</span>
                            <span style="color:rgba(240,241,245,0.6);font-size:12px;">Root Cause Accuracy</span>
                        </div> -->
              </div>
            </div>

            <!-- ── ITEM 3: Remediation Engine ── -->
            <div class="perf-item" data-tab="3" data-color="green">
              <div class="perf-question-flex">
                <div class="perf-question" style="-webkit-text-fill-color: transparent;
    font-size: 16px;
    margin-bottom: 20px;
    background: linear-gradient(90deg, rgb(0, 102, 255), rgb(54, 197, 243)) text;">Remediation Engine</div>
                <svg class="perf-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
              <div class="perf-answer-wrap">
                <p class="perf-answer">Arina doesn't just diagnose, it acts. Each ops domain gets tailored
                  remediation workflows: rollbacks for SRE, ticket routing for ITOps, vulnerability
                  prioritization for DevSecOps, pipeline restarts for DataOps.</p>
                <ul class="perf-answer-list">
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>Domain-specific
                    remediation with configurable approval gates</li>
                  <li><span class="check"
                     style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>SRE:
                    rollbacks, scaling, config changes with full audit trail</li>
                  <li><span class="check"
                     style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>NOC:
                    automated escalation routing and L1 resolution guidance</li>
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>DevSecOps:
                    risk-prioritized vulnerability fix recommendations</li>
                  <li><span class="check"
                      style="background:rgba(79,123,247,0.15);border:1px solid rgba(79,123,247,0.3);color: var(--accent-1);">✓</span>ITOps:
                    ticket auto-classification, routing, and resolution suggestions</li>
                </ul>
                <!-- <div class="perf-stat"
                            style="background:rgba(34,197,94,0.07);border:1px solid rgba(34,197,94,0.18);">
                            <span
                                style="font-size:24px;font-weight:800;background:linear-gradient(90deg,#22C55E,#36c5f3);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">90%</span>
                            <span style="color:rgba(240,241,245,0.6);font-size:12px;">MTTR Reduction</span>
                        </div> -->
              </div>
            </div>

          </div><!-- /perf-tabs-menu -->

          <!-- RIGHT: Tab Content Panes -->
          <div class="perf-tabs-content" id="tabContent">

            <!-- Pane 1: Detection -->
            <div class="perf-pane active" data-pane="1">
              <div class="terminal-card">
                <div
                  style="position:absolute;top:-80px;right:-80px;width:300px;height:300px;background:radial-gradient(circle,rgba(79,123,247,0.12),transparent 70%);pointer-events:none;">
                </div>
                <!-- <div class="terminal-topbar">
                  <span class="dot dot-r"></span><span class="dot dot-y"></span><span class="dot dot-g"></span>
                  <span class="terminal-title">arina — detection-engine</span>
                </div> -->
                <div class="terminal-body">
                  <div><span class="t-h" style="color: var(--accent-1);">UNIFIED INGEST</span> <span class="t-d">──────────────────────</span>
                  </div>
                  <div>│ <span class="t-a">SRE</span> → Metrics, Logs, Traces</div>
                  <div>│ <span class="t-a">NOC</span> → Alerts, SNMP, Syslog</div>
                  <div>│ <span class="t-a">SecOps</span> → CVEs, WAF, Audit Logs</div>
                  <div>│ <span class="t-a">DataOps</span>→ Pipeline Health, Schema Drift</div>
                  <div>│ <span class="t-a">ITOps</span> → Tickets, CMDB, Change Records</div>
                  <div><span class="t-h" style="color: var(--accent-1);">ANALYZE</span> <span class="t-d">─────────────────────────────</span>
                  </div>
                  <div>│ Cross-Domain Correlation <span class="t-s">✓</span></div>
                  <div>│ Contextual Baselines <span class="t-s">✓</span></div>
                  <div>│ Noise Reduction: <span class="t-s" style="font-weight:700;">87% fewer alerts</span>
                  </div>
                  <div><span class="t-h"style="color: var(--accent-1);">OUTPUT</span> <span class="t-d">──────────────────────────────</span>
                  </div>
                  <div>│ → <span class="t-s" style="font-weight:700;">Unified Incident Created</span></div>
                  <div>│ → Routed to correct ops team</div>
                </div>
                <!-- <div class="terminal-statusbar"
                  style="background:rgba(34,197,94,0.05);border-top-color:rgba(34,197,94,0.12);color:#22C55E;">
                  <span class="status-dot" style="background:#22C55E;box-shadow:0 0 6px #22C55E;"></span>
                  Detection active · 14 sources monitored · 0 false positives
                </div> -->
              </div>
            </div>

            <!-- Pane 2: Investigation -->
            <div class="perf-pane" data-pane="2">
              <div class="terminal-card">
                <div
                  style="position:absolute;bottom:-60px;left:-60px;width:280px;height:280px;background:radial-gradient(circle,rgba(123,92,245,0.12),transparent 70%);pointer-events:none;">
                </div>
                <!-- <div class="terminal-topbar">
                  <span class="dot dot-r"></span><span class="dot dot-y"></span><span class="dot dot-g"></span>
                  <span class="terminal-title">arina — investigation-engine</span>
                </div> -->
                <div class="terminal-body">
                  <div><span class="t-ph"style="color: var(--accent-1);">INCIDENT</span> #4821 <span class="t-d">───────────────────</span>
                  </div>
                  <div>│ <span class="t-a">Signal:</span> P99 latency &gt; 2s (payments)</div>
                  <div>│</div>
                  <div>│ <span class="t-ph"style="color: var(--accent-1);">CROSS-DOMAIN INVESTIGATION</span> <span class="t-d">──</span>
                  </div>
                  <div>│ ├─ <span class="t-b">SRE:</span> CPU spike on payments-*</div>
                  <div>│ ├─ <span class="t-b">Code:</span> Deploy #782 merged 12m ago</div>
                  <div>│ ├─ <span class="t-b">Sec:</span> No new CVE exposure</div>
                  <div>│ ├─ <span class="t-b">Data:</span> Downstream ETL unaffected</div>
                  <div>│ └─ <span class="t-b">ITSM:</span> Related to CHG-0045891</div>
                  <div>│</div>
                  <div>│ <span class="t-s" style="font-weight:700;">ROOT CAUSE IDENTIFIED</span></div>
                  <div>│ Deploy #782 → N+1 query → OOM</div>
                  <div>│ Confidence: <span class="t-s" style="font-weight:800;">94%</span></div>
                </div>
                <!-- <div class="terminal-statusbar"
                  style="background:rgba(123,92,245,0.06);border-top-color:rgba(123,92,245,0.15);color:#7B5CF5;">
                  <span class="status-dot" style="background:#7B5CF5;box-shadow:0 0 6px #7B5CF5;"></span>
                  Investigation complete · 2m 14s · 30 sources correlated
                </div> -->
              </div>
            </div>

            <!-- Pane 3: Remediation -->
            <div class="perf-pane" data-pane="3">
              <div class="terminal-card">
                <div
                  style="position:absolute;top:-60px;right:-60px;width:280px;height:280px;background:radial-gradient(circle,rgba(34,197,94,0.1),transparent 70%);pointer-events:none;">
                </div>
                <!-- <div class="terminal-topbar">
                  <span class="dot dot-r"></span><span class="dot dot-y"></span><span class="dot dot-g"></span>
                  <span class="terminal-title">arina — remediation-engine</span>
                </div> -->
                <div class="terminal-body">
                  <div><span class="t-gh"style="color: var(--accent-1);">REMEDIATION ENGINE</span> <span class="t-d">─────────────</span>
                  </div>
                  <div>│</div>
                  <div>│ <span class="t-a">SRE:</span> Rollback deploy #782</div>
                  <div>│ <span class="t-s">✓ Approved &amp; executed</span></div>
                  <div>│ <span class="t-a">NOC:</span> Alert suppressed, status updated</div>
                  <div>│ <span class="t-s">✓ Auto-resolved</span></div>
                  <div>│ <span class="t-a">ITSM:</span> INC-9921 closed, CHG linked</div>
                  <div>│ <span class="t-s">✓ Auto-closed</span></div>
                  <div>│</div>
                  <div>│ <span class="t-h" style="font-weight:700; color: var(--accent-1);">POST-INCIDENT</span> <span
                      class="t-d">──────────────────</span></div>
                  <div>│ Cross-domain timeline <span class="t-s">✓</span></div>
                  <div>│ Runbooks updated <span class="t-s">✓</span></div>
                  <div>│ Knowledge graph enriched <span class="t-s">✓</span></div>
                </div>
                <!-- <div class="terminal-statusbar"
                  style="background:rgba(34,197,94,0.05);border-top-color:rgba(34,197,94,0.12);color:#22C55E;">
                  <span class="status-dot" style="background:#22C55E;box-shadow:0 0 6px #22C55E;"></span>
                  Resolved · 2m 14s total · NOC notified · ticket closed
                </div> -->
              </div>
            </div>

          </div><!-- /perf-tabs-content -->
        </div><!-- /perf-grid -->
      </div><!-- /alignment wrapper -->
</section>

    <!-- SECURITY -->
    <section class="section section-center">
      <span class="badge "><span>›</span> ENTERPRISE-READY</span>
      <!-- <span class="section-label">Enterprise Ready</span> -->
      <h2 class="section-title">Built for Security and Scale</h2>
      <p class="section-desc">Designed from the ground up for enterprise environments, Arina ensures your data stays yours, and governance controls for every ops team.</p>

      <div class="features-grid">

     
   <div class="feature-card">
          <div class="feature-icon"><img src="why_arina_iocns/30-plus integrations.png" height="35px" width="35px">
          </div>
          <h3>VPC Deployment</h3>
          <p>Deploy Arina in your own VPC or use our managed SaaS. Full data residency controls for regulated
            industries. Data never leaves your infrastructure.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><img src="why_arina_iocns/real-time detection.png" height="35px" width="35px"></div>
          <h3>Read-Only by Default</h3>
          <p>Read-only API access with per-domain approval gates. Each ops team configures its own remediation
            permissions independently.</p>
        </div>
   <div class="feature-card">
          <div class="feature-icon"><img src="why_arina_iocns/fluctuation.png" height="35px" width="35px">
          </div>
          <h3>Multi-Domain <br>Correlation at Scale</h3>
          <p>
Simultaneously correlates signals across observability, security, data pipelines, and ITSM in real time. No degradation whether you run 50 services or 5,000.</p>
        </div>


      </div>
    </section>


    <!-- FAQ -->
    <!-- <section class="section section-center" style="background:var(--bg-secondary)">
      <span class="section-label">FAQ</span>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span>How long does it take to set up Arina
              AI?</span><span class="faq-arrow">+</span></button>
          <div class="faq-answer">Most teams are fully integrated within 30 minutes. Arina connects via read-only API
            access to your existing tools across observability, ITSM, security, and data platforms — no code changes, no
            agents to install.</div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span>Does Arina replace our existing monitoring
              tools?</span><span class="faq-arrow">+</span></button>
          <div class="faq-answer">No. Arina enhances your current stack. It sits on top of your observability, security,
            data, and ITSM tools — adding AI-powered investigation and remediation without replacing anything.</div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span>Can different ops teams use Arina
              independently?</span><span class="faq-arrow">+</span></button>
          <div class="faq-answer">Yes. Each ops domain — SRE, NOC, DevSecOps, DataOps, ITOps — can configure its own
            workflows, escalation policies, and approval gates. But they all benefit from a shared knowledge graph and
            cross-domain signal correlation.</div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span>Is Arina AI safe to use in
              production?</span><span class="faq-arrow">+</span></button>
          <div class="faq-answer">Arina uses read-only access by default. Remediation actions require explicit approval
            unless you configure autonomous mode. SOC 2 Type II certified with VPC deployment options.</div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span>How does Arina learn about our specific
              systems?</span><span class="faq-arrow">+</span></button>
          <div class="faq-answer">Arina builds a unified knowledge graph from your telemetry, code, runbooks, security
            policies, data schemas, past incidents, and team communications. It continuously learns from feedback across
            all ops domains.</div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span>What size of team is Arina designed
              for?</span><span class="faq-arrow">+</span></button>
          <div class="faq-answer">From 5-person startups to enterprise organizations with hundreds of engineers across
            multiple ops functions. The platform scales to match your needs.</div>
        </div>
      </div>
    </section> -->

    <!-- <div class="cta-banner">
      <h2>One Platform. Every Ops Team. Instant Impact.</h2>
      <p>Whether you run SRE, NOC, DevSecOps, DataOps, or ITOps — Arina AI adapts to your workflows and starts resolving
        incidents autonomously from day one.</p>
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
    window.addEventListener('scroll', function () {
      var nb = document.getElementById('navbar');
      if (nb) nb.classList.toggle('scrolled', window.scrollY > 40);
    });

    // ─── Use Case Tabs (same as index.php but uses product-specific IDs) ────
    var dataProduct = [
      {
        name: "SRE",
        icon: "icons/performance-report.png",
        title: "Site Reliability Engineering",
        subtitle: "Autonomous incident response for always-on reliability",
        description: "Arina acts as your AI SRE, detecting anomalies, correlating signals across your observability stack, identifying root cause, and executing remediation. Reduce MTTR from hours to minutes and give your on-call engineers their nights back.",
        list: [
          "Real-time anomaly detection across metrics, logs, and traces",
          "Automated root cause analysis with 94%+ accuracy",
          "Change-aware investigation linking incidents to deployments",
          "Auto-remediation with rollbacks, scaling, and config changes",
          "Post-incident report generation and runbook updates",
        ],
        stat: "90%",
        statText: "Reduction in MTTR",
        details: "Measured across production deployments with Arina handling SRE workflows autonomously.",
        statColor: "#0066ff"
      },
      {
        name: "NOC",
        icon: "icons/internet.png",
        title: "Network Operations Center",
        subtitle: "Intelligent alert management for 24/7 operations teams",
        description: "Transform your NOC from a reactive alert-watching operation into an intelligent command center. Arina correlates thousands of alerts into actionable incidents, eliminates noise, and provides L1 operators with guided investigation paths, thereby dramatically reducing escalations.",
        list: [
          "Intelligent alert correlation and deduplication across all sources",
          "Automated triage and severity classification",
          "Guided investigation workflows for L1 operators",
          "Escalation reduction through context-rich diagnosis",
          "Real-time operational dashboards and SLA tracking"
        ],
        stat: "70%",
        statText: "Fewer Escalations",
        details: "Measured across production deployments with Arina handling NOC workflows autonomously.",
        statColor: "#66a3ff"
      },
      {
        name: "DevSecOps",
        icon: "icons/settings.png",
        title: "DevSecOps",
        subtitle: "Shift-left security with AI-powered vulnerability triage",
        description: "Arina bridges the gap between security scanning and engineering action. It automatically triages vulnerability findings, correlates them with runtime behavior and deployment context, and prioritizes what actually matters, so your team fixes real risks, not noise.",
        list: [
          "Automated vulnerability triage and prioritization",
          "Runtime-aware risk scoring based on actual exposure",
          "Security incident correlation with infrastructure events",
          "Compliance drift detection and automated alerting",
          "Integration with Snyk, SonarQube, Vault, and CI/CD pipelines"
        ],
        stat: "5x",
        statText: "Faster vulnerability Remediation",
        details: "Measured across production deployments with Arina handling DevSecOps workflows autonomously.",
        statColor: "#86dcf7"
      },
      {
        name: "DataOps",
        icon: "icons/data-processing.png",
        title: "Data Operations",
        subtitle: "Proactive data pipeline monitoring and anomaly detection",
        description: "Data pipelines are critical infrastructure, but they break silently. Arina monitors your data workflows end-to-end, detecting schema changes, data quality issues, pipeline failures, and freshness anomalies before downstream consumers are affected.",
        list: [
          "End-to-end data pipeline health monitoring",
          "Schema change detection and impact analysis",
          "Data freshness and quality anomaly detection",
          "Automated root cause analysis for failed workflows",
          "Integration with Snowflake, Airflow, dbt, and Spark"
        ],
        stat: "60%",
        statText: "Fewer Data Incidents",
        details: "Measured across production deployments with Arina handling DataOps workflows autonomously.",
        statColor: "#36c5f3"
      },
      {
        name: "ITOps",
        icon: "icons/reliability.png",
        title: "IT Operations",
        subtitle: "Intelligent service management and infrastructure health",
        description: "Arina supercharges your IT operations by automating ticket triage, correlating infrastructure health signals, and providing service desk teams with instant diagnosis. Resolve tickets faster, reduce repeat incidents, and maintain infrastructure health at scale.",
        list: [
          "Automated ticket classification and routing",
          "Infrastructure health correlation across hybrid environments",
          "Repeat incident detection and problem management insights",
          "Change impact analysis before and after maintenance windows",
          "ServiceNow and Zendesk integration for seamless workflows"
        ],
        stat: "45%",
        statText: "Faster Ticket Resolution",
        details: "Measured across production deployments with Arina handling ITOps workflows autonomously.",
        statColor: "#00e5e5"
      },
      {
        name: "Platform Engineering",
        icon: "icons/cloud-network.png",
        title: "Platform Engineering",
        subtitle: "Self-healing infrastructure and developer experience",
        description: "Empower your platform team with AI-driven insights into infrastructure reliability, developer friction points, and deployment health. Arina identifies patterns across your internal developer platform to proactively surface issues and optimize the path to production.",
        list: [
          "Deployment health scoring and rollback recommendations",
          "Developer experience metrics and bottleneck detection",
          "Infrastructure cost anomaly detection",
          "Self-healing automation for common infrastructure failures",
          "Golden path compliance monitoring across teams"
        ],
        stat: "3x",
        statText: "Faster Deploy Cycles",
        details: "Measured across production deployments with Arina handling Platform Engineering workflows autonomously.",
        statColor: "#00ffc2"
      }
    ];

    var tabsContainerProduct = document.getElementById("tabs-product");

    var urlParams = new URLSearchParams(window.location.search);
    var tabParam = urlParams.get('tab');
    var initialTabIndex = 0;

    if (tabParam) {
      tabParam = tabParam.toLowerCase();
      var foundIndex = dataProduct.findIndex(function(item) {
        var n = item.name.toLowerCase();
        if (tabParam === 'platform' && n.includes('platform')) return true;
        return n.replace(/\s+/g, '') === tabParam;
      });
      if (foundIndex !== -1) {
        initialTabIndex = foundIndex;
      }
    }

    dataProduct.forEach(function (item, index) {
      var tab = document.createElement("div");
      tab.className = "tab";
      if (index === initialTabIndex) tab.classList.add("active");
      tab.innerHTML = '<img src="' + item.icon + '"> ' + item.name;
      tabsContainerProduct.appendChild(tab);

      tab.addEventListener("click", function () {
        tabsContainerProduct.querySelectorAll(".tab").forEach(function (t) { t.classList.remove("active"); });
        tab.classList.add("active");
        loadContentProduct(item);
      });
    });

    function loadContentProduct(item) {
      document.getElementById("leftIcon-product").src = item.icon;
      document.getElementById("cardIcon-product").src = item.icon;
      document.getElementById("title-product").textContent = item.title;
      document.getElementById("subtitle-product").textContent = item.subtitle;
      document.getElementById("description-product").textContent = item.description;
      document.getElementById("stat-product").textContent = item.stat;
      document.getElementById("statText-product").textContent = item.statText;
      document.getElementById("details-product").textContent = item.details;

      var list = document.getElementById("list-product");
      list.innerHTML = "";
      item.list.forEach(function (li) {
        var element = document.createElement("li");
        element.textContent = li;
        list.appendChild(element);
      });

      var statEl = document.getElementById("stat-product");
      if (item.statColor) {
        if (item.statColor.includes("gradient")) {
          statEl.style.background = item.statColor;
          statEl.style.webkitBackgroundClip = "text";
          statEl.style.webkitTextFillColor = "transparent";
        } else {
          statEl.style.background = "none";
          statEl.style.webkitBackgroundClip = "unset";
          statEl.style.webkitTextFillColor = item.statColor;
          statEl.style.color = item.statColor;
        }
      } else {
        statEl.style.background = "";
        statEl.style.webkitBackgroundClip = "";
        statEl.style.webkitTextFillColor = "";
        statEl.style.color = "";
      }
    }

    loadContentProduct(dataProduct[initialTabIndex]);


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
      // use case tabs initialized inline above
    });

  </script>
  <!-- <script>
    const items = document.querySelectorAll('.perf-item');
    const panes = document.querySelectorAll('.perf-pane');

    items.forEach(function (item) {
      item.addEventListener('click', function () {
        const tabId = item.getAttribute('data-tab');

        // If already active, do nothing (or optionally collapse — here we keep open)
        if (item.classList.contains('active')) return;

        // Deactivate all
        items.forEach(function (i) { i.classList.remove('active'); });
        panes.forEach(function (p) { p.classList.remove('active'); });

        // Activate clicked
        item.classList.add('active');
        document.querySelector('.perf-pane[data-pane="' + tabId + '"]').classList.add('active');
      });
    });

    
  </script> -->

<script>
    const items = document.querySelectorAll('.perf-item');
    const panes = document.querySelectorAll('.perf-pane');

    function setPerfTabsHeight() {
      const tabsContent = document.getElementById('tabContent');
      const firstPane = document.querySelector('.perf-pane[data-pane="1"]');
      
      // Only apply JS height locking on desktop screens (>900px matching the grid break in CSS)
      if (window.innerWidth > 900) {
        if (tabsContent && firstPane) {
          // Temporarily remove max/min limits to get the true height if we resized
          tabsContent.style.minHeight = '';
          tabsContent.style.maxHeight = '';
          
          const h = firstPane.offsetHeight;
          if (h > 0) {
            tabsContent.style.minHeight = h + 'px';
            tabsContent.style.maxHeight = (h + 1) + 'px';
            tabsContent.style.overflow = 'hidden';
          }
        }
      } else {
        // Reset styles for mobile
        if (tabsContent) {
          tabsContent.style.minHeight = '';
          tabsContent.style.maxHeight = '';
          tabsContent.style.overflow = '';
        }
      }
    }

    window.addEventListener('load', setPerfTabsHeight);
    window.addEventListener('resize', setPerfTabsHeight);

    items.forEach(function (item) {
      item.addEventListener('click', function () {
        const tabId = item.getAttribute('data-tab');

        // If already active, do nothing (or optionally collapse — here we keep open)
        if (item.classList.contains('active')) return;

        // Deactivate all
        items.forEach(function (i) { i.classList.remove('active'); });
        panes.forEach(function (p) { p.classList.remove('active'); });

        // Activate clicked
        item.classList.add('active');
        document.querySelector('.perf-pane[data-pane="' + tabId + '"]').classList.add('active');
      });
    });


  </script>

  <script>

const helpBoxes = document.querySelectorAll(".help-box");

helpBoxes.forEach(box => {

box.addEventListener("click", () => {

if(box.classList.contains("open")){

box.classList.remove("open");
box.querySelector(".help-symbol").innerHTML = "+";

}else{

helpBoxes.forEach(item=>{
item.classList.remove("open");
item.querySelector(".help-symbol").innerHTML = "+";
});

box.classList.add("open");
box.querySelector(".help-symbol").innerHTML = "×";

}

});

});

</script>



</body>

</html>