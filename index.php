<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arina, Agentic AI Platform for All Ops | By Softility</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="logo/ARINA _favicon.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
    /* ===== RESET ===== */




    /* Grid overlay */
    .hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
        background-size: 120px 120px;
        opacity: .3;
        pointer-events: none;
    }

    #text1 {
        font-weight: 600;
        font-size: 20px;
    }

    /* Floating glow */
    .hero::after {
        content: "";
        position: absolute;
        width: 700px;
        height: 700px;
        background: radial-gradient(circle, rgba(0, 150, 255, 0.45) 0%, transparent 70%);
        top: -250px;
        left: 50%;
        transform: translateX(-50%);
        filter: blur(80px);
        animation: floatGlow 8s ease-in-out infinite;
    }

    @keyframes floatGlow {

        0%,
        100% {
            transform: translateX(-50%) translateY(0px);
        }

        50% {
            transform: translateX(-50%) translateY(50px);
        }
    }

    /* ===== CONTENT ===== */
    .hero-content {
        position: relative;
        top: -50px;
        z-index: 2;
        max-width: 900px;
        margin: auto;
    }

    @media (max-width: 768px) {
        .hero-content {
            position: relative;
            top: 60px;
            z-index: 2;
            max-width: 900px;
            margin: auto;
        }

        .hero {
            position: relative;
            padding: 160px 48px 120px;
            text-align: center;
            overflow: hidden;
            min-height: 120vh;
        }

        .container {
            padding-top: 180px;
        }

        .buttons {

            padding-top: 50px;
        }
    }

    /* Tabs Wrapper */
    .tabs {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Tab Style */
    .tab {
        padding: 10px 22px;
        border-radius: 10px;
        /* border: 2px solid #0066ff; */
        color: #9ca3af;
        font-size: 14px;
        cursor: pointer;
        backdrop-filter: blur(6px);
    }

    /* Hover */
    .tab:hover {
        color: #fff;
        border-color: #0066ff;
        border: 1px solid #0066ff;
        height: 40px;
        width: auto;
        background: #000411;

    }

    /* Active Tab */
    .tab.active {
        color: #fff;
        border-color: #008ff5;
        background: rgba(0, 143, 245, 0.1);
        box-shadow: 0 0 20px rgba(0, 143, 245, 0.6);
    }

    /* Responsive */
    @media(max-width:768px) {
        .tab {
            padding: 8px 18px;
            font-size: 13px;
        }
    }

    @media(max-width:480px) {
        .tabs {
            gap: 10px;
        }

        .tab {
            padding: 7px 14px;
            font-size: 12px;
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
        font-size: 14px;
    }

    /* Title */
    .hero h1 {
        font-size: 64px;
        font-weight: 600;
        line-height: 1.15;

    }

    /* Subtitle */
    .hero p {
        font-size: 16px;
        color: white;
        margin-bottom: 40px;
        padding-top: 30px;
    }

    /* Buttons */
    .buttons {
        display: block;
        margin-top: -50px;
    }

    .btn {
        padding: 14px 30px;
        border-radius: 12px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        transition: 0.3s;

    }

    .btn-primary1 {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 24px;
        background: linear-gradient(90deg, #36c5f3, #0066ff);
        color: white;
        border: none;
        border-radius: 8px;
        font-family: var(--font-body);
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
      
        text-decoration: none;
        box-shadow: 0 0 20px rgba(79, 123, 247, 0.2);
    }


    

    /* ===== DASHBOARD IMAGE ===== */
    .dashboard {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -350px;
        width: 100%;
        display: flex;
        justify-content: center;
        z-index: 3;
    }

    .dashboard img {
        width: 1250px;
        max-width: 95%;
        border-radius: 20px;
        box-shadow:
            0 0 120px rgba(0, 150, 255, 0.6),
            0 0 200px rgba(0, 100, 255, 0.4);
        z-index: 11;
    }

    @media(max-width:900px) {

        .dashboard {
            bottom: -300px;
        }
    }

    /* ===== RESPONSIVE ===== */
    @media(max-width:768px) {

        .hero {
            padding: 100px 20px 100px;
        }

        .hero h1 {
            font-size: 38px;
        }

        .hero p {
            font-size: 15px;
        }

        .dashboard {
            bottom: -250px;
        }
    }


    @media (min-width: 1200px) and (max-width: 1439px) {
        .dashboard {
            bottom: -500px;
        }

        .badge1 {
            padding: 320px 20px;
        }

        .left {
            flex: 0.2;
            padding-left: 100px;
        }

    }

    @media (min-width: 1440px) and (max-width: 1919px) {

        .dashboard {
            bottom: -500px;

        }

        .badge1 {
            padding: 320px 20px;
        }

        .left {
            flex: 0.2;
            padding-left: 100px;
        }

    }



    /* SECTION */
    .section1 {
        padding: 100px 0px 0px;
        text-align: center;
    }

    .badge1 {
        display: inline-block;
        padding: 8px 20px;
        font-size: 14px;
        background: #f1f1f1;
        color: #0066ff;
        border-radius: 30px;
        margin-bottom: 25px;
    }

    .section1 h2 {
        font-size: 46px;
        font-weight: 700;
        line-height: 1.2;
    }

    .section1 h2 span {
        color: #0066ff;
    }

    /* WRAPPER */
    .scroll-wrapper {
        position: relative;
        overflow: hidden;

    }

    /* FADE EDGES */
    .scroll-wrapper::before,
    .scroll-wrapper::after {
        content: "";
        position: absolute;
        top: 0;
        width: 180px;
        height: 100%;
        z-index: 10;
        pointer-events: none;
    }

    .scroll-wrapper::before {
        left: 0;
        background: linear-gradient(to right, #000000, rgba(0, 0, 0, 0));
        width: 800px;
    }

    .scroll-wrapper::after {
        right: 0;
        background: linear-gradient(to left, #000000, rgba(255, 255, 255, 0));
        width: 800px;
    }

    /* TRACK */
    .scroll-track {
        display: flex;
        height: 300px;
        width: max-content;
        animation: scrollLeft 50s linear infinite;
        will-change: transform;
        padding-top: 30px;
    }

    /* ICON BOX */
    .icon-box img {
        width: 200px;
        height: 200px;
        object-fit: scale-down;
    }

    /* PERFECT NON STOP ANIMATION */
    @keyframes scrollLeft {
        0% {
            transform: translate3d(0, 0, 0);
        }

        100% {
            transform: translate3d(-50%, 0, 0);
        }
    }


    /* RESPONSIVE */
    @media(max-width:992px) {
        .section1 h2 {
            font-size: 32px;
        }

        .icon-box img {
            width: 150px;
            height: 150px;
        }

        .scroll-wrapper::before,
        .scroll-wrapper::after {
            width: 120px;
        }
    }

    @media(max-width:600px) {
        .section1 {
            padding: 70px 15px;
        }

        .section1 h2 {
            font-size: 28px;
        }

        .icon-box img {
            width: 150px;
            height: 150px;
        }

        .scroll-track {
            gap: 18px;
            animation-duration: 40s;
        }

        .scroll-wrapper::before,
        .scroll-wrapper::after {
            width: 70px;
        }

        #container1 {
         margin-top: -300px;
        }

        .dashboard-wrapper {
            margin-top: -150px;
        }
    }


    .stats-section {
        padding: 150px 8% 0px;
        text-align: center;
    }

    .stats-wrapper {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 40px;
        max-width: 1100px;
        margin: auto;
    }

    .stat-box {
        flex: 1;
        min-width: 200px;
    }

    .stat-number {
        font-size: 56px;
        font-weight: 700;
        background: linear-gradient(90deg, #0066ff, #36c5f3);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
    }

    .stat-label {
        margin-top: 10px;
        color: var(--text-secondary);
        font-size: 16px;
    }

    /* Responsive */
    @media(max-width:768px) {
        .stats-wrapper {
            flex-direction: column;
            gap: 60px;
        }
    }

   

    /* ================= SECTION ================= */
    .section {
        padding: 50px 8% 100px;
        background: radial-gradient(circle at top, #000409 0%, #000000 60%);
    }

    /* ================= HEADER ================= */
    .section-header {
        text-align: center;
        max-width: 100%;
        margin: auto;
    }

    .section-header span {
        color: #ffffff;
        font-size: 14px;
        letter-spacing: 2px;
    }

    .section-header h1 {
        font-size: clamp(28px, 4vw, 46px);
    }

    .section-header p {
        color: var(--text-secondaryy);
        font-size: 16px;
        justify-self: center;

    }

    /* ================= TABS ================= */
    .tabs {
        margin-top: -20px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        padding-bottom: 50px;
    }

    .tab {
     display: flex;
    height: 40px;
    width: auto;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    border-radius: 10px;
    background: #0f111f;
    cursor: pointer;
    font-size: 15px;
    color: #9ba3b4;
    white-space: nowrap;
  border: 2px solid transparent;
    }

  .tab:hover {
    border: 2px solid #0066ff;
    border-radius: 10px;
    height: 40px;
    width: auto;

    }



    .tab img {
        width: 16px;
        height: 16px;
    }

    .tab.active {
        background: linear-gradient(90deg, #36c5f3, #0066ff);
        color: #fff;
        border-radius: 10px;
        /* border-color: #2ea8ff; */
    }

    /*#tabbtn1 {*/
    /*    border: 1px solid #292a2a !important;*/
    /*    transition: all 0.3s;*/
    /*}*/

    /*#tabbtn1:hover {*/
    /*    transform: translatex(0px) !important;*/
    /*    border-radius: 10px;*/
    /*    cursor: default;*/
    /*}*/

    /*#tabbtn2 {*/
    /*    border: 1px solid #292a2a !important;*/
    /*    transition: all 0.3s;*/
    /*}*/

    /*#tabbtn2:hover {*/
    /*    transform: translateY(-4px);*/
    /*    border-radius: 10px;*/
    /*    cursor: default;*/
    /*}*/

    /*#tabbtn3 {*/
    /*    border: 1px solid #292a2a !important;*/
    /*    transition: all 0.3s;*/
    /*}*/

    /*#tabbtn3:hover {*/
    /*    transform: translateY(-4px);*/
    /*    border-radius: 10px;*/
    /*    cursor: default;*/
    /*}*/

    /*#tabbtn4 {*/
    /*    border: 1px solid #292a2a !important;*/
    /*    transition: all 0.3s;*/
    /*}*/

    /*#tabbtn4:hover {*/
    /*    transform: translateY(-4px);*/
    /*    border-radius: 10px;*/
    /*    cursor: default;*/
    /*}*/

    /*#tabbtn5 {*/
    /*    border: 1px solid #292a2a !important;*/
    /*    transition: all 0.3s;*/
    /*}*/

    /*#tabbtn5:hover {*/
    /*    transform: translateY(-4px);*/
    /*    border-radius: 10px;*/
    /*    cursor: default;*/
    /*}*/

    /*#tabbtn6 {*/
    /*    border: 1px solid #292a2a !important;*/
    /*    t;*/
    /*    transition: all 0.3s;*/
    /*}*/

    /*#tabbtn6:hover {*/
    /*    transform: translateY(-4px);*/
    /*    border-radius: 10px;*/
    /*    cursor: default;*/
    /*}*/

    /* ================= CONTENT ================= */
    .content-wrapper {
        margin-top: 70px;
        display: flex;
        gap: 60px;
        align-items: flex-start;
    }

    /* LEFT */
    .left {
        /* flex: 1; */
        padding-left: 100px;

    }

    @media(min-width:2000px) {
        .left {
            flex: 0;
            padding-left: 100px;
        }
    }

    .left-icon {
        width: 60px;
        height: 60px;
        background: #0d1b33;
        border-radius: 14px;
        display: contents;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .left-icon img {
        width: 32px;
        display: none;

    }

    .left h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .left h4 {

        background: linear-gradient(90deg, #0066ff, #36c5f3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .left p {
        color: var (--text-secondary);
        line-height: 1.6;
        margin-bottom: 20px;
        width: 560px;
        font-size: 16px;
        font-weight: 400;
    }

    .left ul {
        list-style: none;
    }

    .left ul li {
        margin-bottom: 10px;
        color: var (--text-secondary);
        font-size: 16px;
    }

    .left ul li::before {
        content: "✔";

        background: linear-gradient(90deg, #0066ff, #36c5f3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 8px;
    }

    /* RIGHT CARD */
    .right {
        width: 400px;
        position: sticky;
        top: 20px;
        align-self: flex-start;
    }

    .card {
        background: #0f111f;
        border-radius: 20px;
        padding: 30px 25px;
        text-align: center;
        border: 2px solid transparent;
    }

    .card:hover {
        border: 2px solid #0066ff;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);

    }

    .card img {
        width: 50px;
        margin-bottom: 20px;
    }

    .card h3 {
        font-size: 78px;
        color: #66a3ff;
    }



    .card p {
        color: var (--text-secondary);
        margin-top: 10px;
        font-size: 16px;
    }

    .concenter {
        justify-content: center;
    }

    /* ================= RESPONSIVE ================= */

    /* Tablets */
    @media(max-width:992px) {
        .content-wrapper {
            flex-direction: column;
            gap: 40px;
        }

        .left,
        .right {
            width: 100%;

        }

        .left {
            width: 100%;
            padding-left: 40px;
        }


        .card {
            max-width: 500px;
            margin: auto;
        }

        .feature-img {
            position: relative;
            opacity: 1;
            transform: none;
            display: none;
        }
    }
   @media (max-width: 768px) {
    .content-wrapper {
        display: flex;
        flex-direction: column-reverse;
    }
    .right {
        position: static !important;
        top: auto !important;
    }
}

    /* Mobile */
    @media(max-width:768px) {

        .section {
            padding: 70px 20px;
        }

        .section h2{
            font-size:28px;
        }
        .section p{
            font-size:16px;
        }
        .section .feature-card p{
            font-size:14px;
        }
        .section h3{
            font-size:25px;
            padding-bottom:20px;
        }
        .section-header h1 {
            font-size: 24px;
        }

        .section-header p {
            font-size: 14px;
        }

        /* horizontal scroll tabs */
        .tabs {
            flex-wrap: wrap;
            overflow-x: auto;
            justify-content: flex-start;
            padding-bottom: 10px;
            padding-left: 40px;
        }

        .tabs::-webkit-scrollbar {
            display: none;
        }

        .tab {
            flex: 0 0 auto;
        }

        .left h2 {
            font-size: 16px;
        }
        .right p{
            font-size:14px
        }

        .card {
            padding: 35px 25px;
        }

        .card h3 {
            font-size: 36px;
        }

        .left p {
            color: var (--text-secondary);
            line-height: 1.6;
            margin-bottom: 20px;
            width: auto;
            font-weight: 400;
            font-size:14px;
        }
        .left ul li{
            font-size:14px;
        }

        .feature-img {
            position: relative;
            opacity: 1;
            transform: none;
            display: none;
        }

        .smart-content {
            flex: 1;
            min-width: 0;
            padding-left: 0px;
            margin-left: -100px;
        }

    }

    /* Small phones */
    @media(max-width:480px) {

        .section {
            padding: 60px 15px;
        }

        .section-header h1 {
            font-size: clamp(28px, 4vw, 48px);
        }

        .section-header p {
            font-size: 16px;
        }

        .left-icon {
            width: 50px;
            height: 50px;
        }

        .left-icon img {
            width: 16px;
        }

        .left h2 {
            font-size: 20px;
        }

        .card h3 {
            font-size: 30px;
        }

        .left p {
            color: var (--text-secondary);
            line-height: 1.6;
            margin-bottom: 20px;
            width: auto;
            font-weight: 400;
        }

        .feature-img {
            position: relative;
            opacity: 1;
            transform: none;
            display: none;
        }

        .smart-content {
            flex: 1;
            min-width: 0;
            padding-left: 0px;
            margin-left: -100px;
        }
    }

    #statText {
        font-weight: bold;
    }
   


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



    }

    #badge {
        margin-top: 50px;
        margin-bottom: -100px;
    }


    .hero-terminal::before {
        content: "";
        position: absolute;
        top: -3px;
        left: -3px;
        width: 300px;
        /* corner width */
        height: 200px;
        /* corner height */
        /* border-top:10px solid transparent;
  border-left:10px solid transparent; */
        border-radius: 20px 0 0 0;
        background: linear-gradient(90deg, #36c5f3, #0066ff);
        -webkit-mask:
            linear-gradient(#000 0 0) padding-box,
            linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }

    .hero-terminal {

        background: #000000;
        border-radius: 20px;
        color: white;
        overflow: hidden;
        margin-top: -160px;
        height: 500px;

        /* Animated Shadow */
        animation: glowShadow 4s ease-in-out infinite alternate;
    }

    /* Animated glowing shadow */
    @keyframes glowShadow {
        0% {
            box-shadow:
                0 0 10px #36c5f3,
                0 0 20px #0066ff;
        }

        100% {
            box-shadow:
                0 0 25px #36c5f3,
                0 0 50px #0066ff;
        }
    }

    @media (max-width: 1200px) {
        .hero-terminal {
            margin-top: -100px;
        }

        .btn-primary {
            display: none;
        }
    }

    @media (max-width: 1400px) {
        .hero-terminal {
            margin-top: -200px;
        }

        .btn-primary {
            display: none;
        }
    }

    @media screen and (min-width: 1600px) {
        .hero-terminal {
            margin-top: -230px;
        }
    }

    @media screen and (max-width: 1280px) {
        .hero-terminal {
            margin-top: -230px;
        }
    }

    @media (max-width: 700px) {
        .hero-terminal {
            margin-top: 50px;
        }

        .btn-primary {
            display: none;
        }
    }


    #section {
        padding: 0px 0px 50px !important;
        margin-top: -100px;
        z-index: 999;
    }

    /* SECTION */

    .section {
        max-width: 1200px;
        margin: auto;
        padding: 100px 20px;
    }

    /* HEADER */

    .header {
        text-align: center;
        margin-bottom: 80px;
    }

    .header h2 {
        font-size: 42px;
        margin-bottom: 15px;
    }

    .header p {
        color: #9aa0a6;
        max-width: 500px;
        margin: auto;
    }

    .btn {
        display: inline-block;
        margin-top: 25px;
        padding: 15px 28px;
        border-radius: 10px;
        background: linear-gradient(90deg, #00c3ff, #2563ff);
        color: #fff;
        text-decoration: none;
    }

    #btn-secondary1 {
        display: inline;
        margin-top: 25px;
        padding: 11px 28px;
        border-radius: 10px;
        color: #fff;
        text-decoration: none;
        background: #0d1b33;
        border: 2px solid transparent;
        background: rgba(255, 255, 255, 0.08);
    }

    #btn-secondary1:hover {
        background: rgba(60, 58, 58, 0.15);
        border: 2px solid #0066ff;
    }
    
@media (max-width: 768px) {
  #btn-secondary1{
         display: inline-block;
         margin-top:13px 
  }
}

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        margin-top: -180px;
    }



    /* SECTION CENTER */

    .section {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 80px 20px 0px;

    }

    /* HEADER */

    .header {
        text-align: center;
        margin-bottom: 80px;
    }

    .header h2 {
        font-size: 42px;
        margin-bottom: 15px;
    }

    .header p {
        color: #9aa0a6;
        max-width: 500px;
        margin: auto;
    }

    .btn {
        display: inline-block;
        margin-top: 50px;
        padding: 11px 28px;
        border-radius: 10px;
        background: linear-gradient(90deg, #00c3ff, #2563ff);
        color: #fff;
        text-decoration: none;
    }

    /* TIMELINE */

    .timeline {
        position: relative;
    }

    /* BASE LINE */

    .timeline:before {
        content: "";
        position: absolute;
        left: 50%;
        top: 0;
        width: 2px;
        height: 100%;
        background: #333;
        transform: translateX(-50%);
    }

    /* PROGRESS LINE */

    .progress-line {
        position: absolute;
        left: 50%;
        top: 0;
        width: 2px;
        height: 0;
        background: #00c3ff;
        transform: translateX(-50%);
        transition: height .2s linear;
    }

    /* ITEM */

    .item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 120px 0;
        position: relative;

        opacity: 0.4;
        transform: translateY(40px);
        transition: .6s;
    }

    .item.active {
        opacity: 1;
        transform: translateY(0);
    }

    .item:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* CONTENT */

    .content {
        width: 40%;
    }

    .content h3 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .content p {
        color: #9aa0a6;
        line-height: 1.6;
    }

    /* IMAGE */

    .image {
        width: 40%;
    }

    .image img {
        width: 100%;
        border-radius: 12px;
        transform: scale(.9);
        opacity: .5;
        transition: .5s;
    }

    .item.active img {
        transform: scale(1);
        opacity: 1;
    }

    /* NUMBER */

    .number {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, -50%);
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #111;
        border: 1px solid #333;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    .item.active .number {
        background: linear-gradient(135deg, #2563ff, #00c3ff);
        box-shadow: 0 0 20px rgba(0, 195, 255, .8);
        transform: translate(-50%, -50%) scale(1.1);
    }

    /* MOBILE */

    @media(max-width:900px) {

        .timeline:before,
        .progress-line {
            left: 20px;
        }

        .item {
            flex-direction: column !important;
            align-items: flex-start;
            margin: 80px 0;
            padding-left: 60px;
        }

        .number {
            left: 20px;
        }

        .content,
        .image {
            width: 100%;
        }

        .image {
            margin-top: 20px;
        }

        .header h2 {
            font-size: 30px;
        }

    }



    /* SECTION */

    .story-section {
        max-width: 1200px;
        margin: auto;
        padding: 40px 100px;
        margin-top: -150px;
    }
    
    
    
/* Tablet (iPad) */
@media (max-width: 768px) {
   .story-section {
        max-width: 1200px;
        margin: auto;
        padding: 40px 40px;
        margin-top: -150px;
    }
    .story-section h3{
        font-size:16px !important;
    }
    .story-section p{
        font-size:14px;
    }
    .story-section p{
        font-size:14px !important;
    }
}

/* Large Mobile */
@media (max-width: 576px) {
}

/* Small Mobile (iPhone SE etc.) */
@media (max-width: 480px) {
}

/* Extra Small Mobile */
@media (max-width: 360px) {
}
    /* HEADER */

    .story-header {
        text-align: center;
        margin-bottom: 80px;
    }

    .story-header h2 {
        font-size: 42px;
        margin-bottom: 15px;
    }

    .story-header p {
        color: #9aa0a6;
        max-width: 500px;
        margin: auto;
    }

    /* TIMELINE */

    .story-timeline {
        position: relative;
    }

    /* CENTER GREY LINE */

    .story-timeline::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 0;
        width: 2px;
        height: 100%;
        background: #333;
        transform: translateX(-50%);
    }

    /* BLUE SCROLL LINE */

    .story-progress-bar {
        position: absolute;
        left: 50%;
        top: 0;
        width: 2px;
        height: 0;
        background: #00c3ff;
        transform: translateX(-50%);
        z-index: 0;
    }

    /* ITEM */

    .story-step {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 120px 0;
        position: relative;
        opacity: .4;
        transform: translateY(40px);
        transition: .6s;
    }

    .story-step.active {
        opacity: 1;
        transform: translateY(0);
    }

    .story-step:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* CONTENT */

    .story-text {
        width: 40%;
    }

    .story-text h3 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .story-text p {
        color: var(--text-secondary);
        line-height: 1.6;
        font-size:16px;
    }

    /* IMAGE */

    .story-image {
        width: 40%;
        box-shadow: 0 0 10px #0066ff,
            0 0 20px #0066ff,
            0 0 40px #0066ff;
        border-radius: 20px;
    }

    .story-image img {
        width: 100%;
        border-radius: 12px;
        transform: scale(.9);
        opacity: .5;
        transition: .5s;
    }

    .story-step.active img {
        transform: scale(1);
        opacity: 1;
    }

    /* NUMBER */

    .story-count {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #111;
        border: 1px solid #333;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        z-index: 2;
    }

    .story-step.active .story-count {
        background: linear-gradient(135deg, #2563ff, #00c3ff);
        box-shadow: 0 0 20px rgba(0, 195, 255, .8);
    }

    /* MOBILE */

    @media(max-width:900px) {

        .story-timeline::before,
        .story-progress-bar {
            left: 20px;
        }

        .story-step {
            flex-direction: column !important;
            align-items: flex-start;
            margin: 80px 0;
            padding-left: 60px;
        }

        .story-count {
            left: 20px;
        }

        .story-text,
        .story-image {
            width: 100%;
        }

        .story-image {
            margin-top: 40px;
        }

    }


    .newtabs {
        gap: 30px;
        /* padding-bottom: 50px; */
        background-color: #0f111f;
        border-radius: 10px;
        /* margin-right: 70px;
    margin-left: 178px; */
        padding: 5px 0;
        max-width: 1024px;
        justify-content: center;
        display: flex;
        margin: 50px auto
    }

    @media (min-width: 769px) {
        .concenter {
            margin-right: 85px;
        }
        .newtabs{
             border-radius: 10px;
        }

 
    }

    .boxs {
        margin-top: -20px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        padding-bottom: 50px;
        width: 1000px;

    }

    .box {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border: 1px solid #292a2a00;
        cursor: pointer;
        font-size: 15px;
        color: #ffffff;
        white-space: nowrap;
        background: #0d1b3300;
        border-radius: 10px;
        cursor: default;


    }

    .box img {
        width: 16px;
        height: 16px;
    }


    /* HERO SECTION */

    .hero-banner {
        background: linear-gradient(10deg, #1f3aa3, #0066ff, #030933, #152777, #0066ff);
        padding: 120px 20px 0px;
        text-align: center;
        color: #fff;
        height: 1100px;
        position: relative;
        background-size: 400% 400%;
        animation: gradientMove 20s cubic-bezier(0.25, 0.1, 0.31, 0.65) infinite;
    }
/*.hero-banner {*/
/*    background-image: url(https://cdn.prod.website-files.com/686a4c2e17d329bcec1a37fb/6884bd2540d2b35d3df27e20_9b8127d61ea4fc1c299ae281fcbd2c7a_Hero%20Bg.webp);*/
/*    background-position: 50%;*/
/*    background-repeat: no-repeat;*/
/*    background-size: cover;*/
/*    padding-top: 0;*/
/*    padding-bottom: 0;*/
/*    text-align: center;*/
/*     padding: 120px 20px 0px;*/
/*      background-size: 400% 400%;*/*/
/*    / animation: gradientMove 20s cubic-bezier(0.25, 0.1, 0.31, 0.65) infinite;*/
/*    height: 900px;*/*/
/*       position: relative;*/
/*}*/
    /* Gradient animation */
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }



    /* ===== HERO SECTION ===== */
    .hero {
        position: relative;
        padding: 140px 20px 20px;
        text-align: center;
        color: #fff;
        /* Animated Gradient */
        background: linear-gradient(-45deg, #1f3aa3, #0066ff, #030933, #152777, #0066ff);
        background-size: 400% 400%;

    }

    /* Gradient animation */
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* GRID LINES */

    .hero-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            linear-gradient(rgb(255 255 255 / 4%) 1px, transparent 1px), linear-gradient(90deg, rgb(255 255 255 / 4%) 1px, #00000000 1px);
        background-size: 120px 120px;
        pointer-events: none;
    }

    /* HERO CONTENT */

    .hero-content1 {
        max-width: 1000px;
        margin: auto;
        position: relative;
        z-index: 2;
        padding-top: 75px;
    }

    .hero-content1 h1 {
        font-size: 56px;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .hero-content1 p {
        font-size: 18px;
        color: white;
        margin-bottom: 30px;
    }

    /* BUTTONS */

    .hero-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .hero-buttons a {
        padding: 12px 28px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 15px;
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
    }

    /* DASHBOARD */

    .dashboard-section {
        margin-top: -450px;
        padding: 0 20px 0px;
    }

    .dashboard-wrapper {
        max-width: 1100px;
        margin: auto;
        position: relative;
        padding-top: 150px;
}

    }

    /* GLOW EFFECT */

    .dashboard-wrapper::before {
        content: "";
        position: absolute;
        top: -80px;
        left: 50%;
        transform: translateX(-50%);
        width: 300px;
        height: 200px;
        background: radial-gradient(circle, #00c6ff, transparent);
        filter: blur(80px);
        z-index: -1;
    }

    /* DASHBOARD IMAGE */

    .dashboard-wrapper img {
        width: 100%;
        border-radius: 16px;
        display: block;
        box-shadow: 0 0 80px #0066ff;
    }

    /* TABLET */

    @media (max-width:1024px) {

        .hero-content1 h1 {
            font-size: 42px;
        }

        .dashboard-section {
            margin-top: -150px;
        }

    }

    /* MOBILE */

    @media (max-width:768px) {
        .boxs {
            margin-top: -20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding-bottom: 50px;
            width: auto;
            margin-left: 0;

        }

        .hero-banner {
            padding: 100px 20px 200px;
            height: 900px;
        }

        .hero-content1 h1 {
            font-size: 34px;
        }

        .hero-content1 p {
            font-size: 16px;
        }

        .dashboard-section {
            margin-top: -120px;
        }
         .hero-banner .box {
     font-size: 12px !important;
     padding: 5px 16px;
 }
    .boxs{
        padding:10px;
    }
.newtabs {
    gap: 15px;
  
      }

.hero-content1{
        padding-top: 0px !important;
         }

.hero-content1 h1 {
        font-size: 36px !important;
        margin-bottom:10px
        }
 .hero-content1 p {
        font-size: 14px;
       }
        .boxs {
        margin-top: -60px !important;
            
          }
         
        #text1 {
    font-weight: 600;
    font-size: 14px;
}
        
.buttons
 {
    display: block;
         margin-top: -120px;
}
    .dashboard-wrapper img {
        margin-top: -135px;
    }


#btn-secondary2{
     margin-top: 20px;
}
    }

    /* SMALL MOBILE */
 @media (max-width:390px){
     .boxs {
        display: grid;
        grid-template-columns: repeat(2, 1fr) !important;
        
        }
     
 }
    @media (max-width:480px) {
        .boxs {
            margin-top: -20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
            justify-content: center;
            flex-wrap: wrap;
            gap: 0px;
            padding-bottom: 50px;
            width: auto;
            margin-left: 0;
        }

        .hero-content1 h1 {
            font-size: 26px;
        }

        .hero-buttons {
            flex-direction: column;
            align-items: center;
        }

        .hero-buttons a {
            width: 200px;
            text-align: center;
        }

        .dashboard-section {
            margin-top: -90px;
        }

    }

    #container1 {
        padding-top: 380px;
    }
    </style>

</head>

<body>
    <?php include 'menu.php';?>
    <main>



        <section class="hero-banner">
            <div class="container1" data-aos="fade-up">

                <div class="hero-content1">

                    <h1>
                        <span style="color:  #ffffff;">Supercharge</span><br>
                        <span style="color: #ffffff;">Technology Operations</span>
                    </h1>

                    <p>
                        Softility's Arina: The agentic platform that autonomously detects, investigates, and
                        resolves incidents.
                    </p><br>

                    <div class="boxs">
                        <div class="box"><img src="icons/performance-report.png" height="50px" width="50px"><b>SRE</b>
                        </div>
                        <div class="box"><img src="icons/internet.png" height="50px" width="50px"><b>NOC</b></div>
                        <div class="box"><img src="icons/settings.png" height="50px" width="50px"><b>DevSecOps</b></div>
                        <div class="box"><img src="icons/data-processing.png" height="50px" width="50px"><b>DataOps</b>
                        </div>
                        <div class="box"> <img src="icons/reliability.png" height="50px" width="50px"><b>ITOps</b></div>
                        <div class="box"><img src="icons/cloud-network.png" height="50px" width="50px"><b>Platform
                                Eng</b></div>
                    </div>
                    <br>
                    <div class="buttons"> <span id="text1">One Platform, Infinite Operational Leverage!</span><br>

                        <a href="contact.php#bookademo" class="btn btn-primary1"id="btn-secondary2">Book a Demo</a>
                        <a href="product.php" id="btn-secondary1"><b>Explore Use Cases</b></a>
                    </div>



                </div>


                <div class="dashboard-wrapper">

                    <img src="logo/arina-hero-v4.svg" alt="Dashboard">

                </div>

            </div>
        </section>

        <!--<section class="dashboard-section" >-->



        <!--</section>-->
        <!-- <section class="hero">

      <div class="hero-content">



        <h1>
          <span style="color:  #ffffff;">Supercharge</span><br>
          <span style="color: #ffffff;">Technology Operations</span>

        </h1>

        <p>
          Softility's Arina: The agentic platform that autonomously detects, investigates, and
          resolves incidents.
        </p><br>
        <div class="boxs">
          <div class="box"><img src="icons/performance-report.png" height="50px" width="50px"><b>SRE</b></div>
          <div class="box"><img src="icons/internet.png" height="50px" width="50px"><b>NOC</b></div>
          <div class="box"><img src="icons/settings.png" height="50px" width="50px"><b>DevSecOps</b></div>
          <div class="box"><img src="icons/data-processing.png" height="50px" width="50px"><b>DataOps</b></div>
          <div class="box"> <img src="icons/reliability.png" height="50px" width="50px"><b>ITOps</b></div>
          <div class="box"><img src="icons/cloud-network.png" height="50px" width="50px"><b>Platform Engineering</b></div>
        </div><br>

          <div class="buttons">     <span id="text1">One Platform, Infinite Operational Leverage!</span><br>

          <a href="contact.php#bookademo" class="btn btn-primary1">Book a Demo</a>
          <a href="product.php"  id="btn-secondary1">Explore Use Cases</a>
        </div>


      </div>


    </section> -->
        <!--<div class="dashboard">-->
        <!--   Replace with your dashboard image -->

        <!--   <video src="video/Agentic AI Platform for Technology Operations.mp4" height="500px" width="800px"></video> -->

        <!--</div>-->
        <!-- 
<section class="container">
      <div class="hero-visual">
                 <img src="logo/arina-hero-v4.svg" alt="Dashboard UI" data-aos="fade-up"> 

      </div>
</section> -->


        <div class="section1" id="container1">

            <div class="badge" id="badge1"><span>›</span>INTEGRATIONS</div>

            <h2 data-aos="fade-up">
                Integrates with your entire technology stack <br>
                <!-- <span>integrations</span> -->
            </h2>

            <!-- ROW 1 -->
            <div class="scroll-wrapper">
                <div class="scroll-track">

                    <!-- ORIGINAL -->
                    <div class="icon-box"><img src="Arina_Integration_Logos/1.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/2.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/3.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/4.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/5.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/6.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/7.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/8.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/9.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/10.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/11.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/12.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/13.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/14.png"></div>
                    <!-- <div class="icon-box"><img src="Arina_Integration_Logos/15.png"></div> -->
                    <div class="icon-box"><img src="Arina_Integration_Logos/16.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/17.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/18.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/19.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/20.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/21.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/22.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/23.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/24.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/25.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/26.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/27.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/28.png"></div>

                    <!-- ORIGINAL -->
                    <div class="icon-box"><img src="Arina_Integration_Logos/1.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/2.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/3.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/4.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/5.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/6.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/7.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/8.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/9.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/10.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/11.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/12.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/13.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/14.png"></div>
                    <!-- <div class="icon-box"><img src="Arina_Integration_Logos/15.png"></div> -->
                    <div class="icon-box"><img src="Arina_Integration_Logos/16.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/17.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/18.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/19.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/20.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/21.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/22.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/23.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/24.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/25.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/26.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/27.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/28.png"></div>
                    <!-- ORIGINAL -->
                    <div class="icon-box"><img src="Arina_Integration_Logos/1.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/2.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/3.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/4.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/5.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/6.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/7.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/8.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/9.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/10.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/11.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/12.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/13.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/14.png"></div>
                    <!-- <div class="icon-box"><img src="Arina_Integration_Logos/15.png"></div> -->
                    <div class="icon-box"><img src="Arina_Integration_Logos/16.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/17.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/18.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/19.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/20.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/21.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/22.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/23.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/24.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/25.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/26.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/27.png"></div>
                    <div class="icon-box"><img src="Arina_Integration_Logos/28.png"></div>

                </div>
            </div>



        </div>
        <section class="section section-center" id="section">
            <!-- <div style="text-align:center;z-index: 999;padding-bottom:50px;margin-top:-50px;">
            <p style="color: var(--text-secondary);margin-bottom:50px;font-size:16px"> Don't see your tool?</p>
   
    <a class="btn-secondary" href="contact.php" style="background: linear-gradient(90deg, #36c5f3, #0066ff);margin-top:-100px; ">Request an Integration</a>
      </div> -->
            <span class="badge" id="badge"> <span>›</span>THE PLATFORM ADVANTAGE</span>

        </section>
        <!-- ONE PLATFORM BANNER -->
        <section class="section">
            <div class="platform-banner">
                <div>
                    <h3>One Platform. Multiple Ops Domains. <br>Unified Intelligence.</h3>
                    <p>Most AI tools solve for a single team. Arina is different. It's a horizontally integrated
                        platform that serves every technology operations function from a shared intelligence layer.
                        Signals from your NOC enrich SRE investigations. Security context accelerates incident response.
                        Data pipeline health feeds into infrastructure decisions. <br><br><b>The result: every ops team
                            moves faster because they share the same AI
                            brain.</b></p>
                </div>
                <div class="platform-ops-list">
                    <div class="platform-ops-item"><span class="dot" style="background: white"></span>SRE</div>
                    <div class="platform-ops-item"><span class="dot" style="background:white"></span>NOC</div>
                    <div class="platform-ops-item"><span class="dot" style="background:white"></span>DevSecOps</div>
                    <div class="platform-ops-item"><span class="dot" style="background:white"></span>DataOps</div>
                    <div class="platform-ops-item"><span class="dot" style="background:white"></span>ITOps</div>
                    <div class="platform-ops-item"><span class="dot" style="background:white"></span>Platform Eng.
                    </div>
                </div>
            </div>
        </section>

        <!-- USE CASES (inserted via JS) -->
        <!-- <section class="section section-center" id="usecase-section">
      <span class="section-label">Use Cases</span>
      <h2 class="section-title">One Platform, Purpose-Built for Every Ops Team</h2>
      <p class="section-desc">Arina isn't a point solution — it's a horizontal platform that adapts to the unique
        workflows, signals, and priorities of each technology operations discipline.</p>
      <div class="usecase-tabs" id="usecase-tabs"></div>
      <div class="usecase-panel" id="usecase-panel"></div>
    </section> -->

        <section class="section">

            <div class="section-header">
                <span class="badge"><span>›</span> USE CASES</span>
                <h2>One Platform, Purpose-Built for Every Ops Team</h2>
                <p class="section-desc">Arina isn't a point solution. It's a unified horizontal platform that adapts to
                    the
                    unique workflows, signals, and priorities of every technology operations domain.</p>
            </div>

            <div class="tabs newtabs" id="tabs"></div>

            <div class="content-wrapper concenter">

                <div class="left">
                    <div class="left-icon">
                        <img id="leftIcon">
                    </div>

                    <h2 id="title"></h2>
                    <h4 id="subtitle"></h4>
                    <p id="description"></p>
                    <ul id="list"></ul>
                </div>

                <div class="right">
                    <div class="card">
                        <img id="cardIcon">
                        <h3 id="stat"></h3>
                        <p id="statText"></p>
                        <p id="details"></p>

                    </div>
                </div>

            </div>
        </section>



        <!-- WHY ARINA -->
        <section class="section section-center">
            <span class="badge" id="badge1"> <span>›</span>WHY ARINA</span>
            <h2 class="section-title">Built for the Entire Ops Lifecycle</h2>
            <p class="section-desc">Arina brings autonomous intelligence to every stage of the incident lifecycle, from
                proactive detection to post-incident learning, across TechOps disciplines.</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><img src="why_arina_iocns/real-time detection.png" height="35px"
                            width="35px" srcset=""></div>
                    <h3>Real-Time Detection</h3>
                    <p>Continuously monitors telemetry across infrastructure, applications, data pipelines, and security
                        tools,
                        identifying anomalies the moment they emerge.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="why_arina_iocns/cross-domain investigation.png" height="35px"
                            width="35px" srcset=""></div>
                    <h3>Cross-Domain Investigation</h3>
                    <p>Correlates signals across SRE metrics, NOC alerts, security scans, data quality checks, and ITSM
                        tickets to
                        build a unified root cause picture.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="why_arina_iocns/intelligent remediation.png" height="35px"
                            width="35px" srcset=""></div>
                    <h3>Intelligent Remediation</h3>
                    <p>Recommends or executes fix actions (rollbacks, scaling, config changes, ticket routing) tailored
                        to each
                        ops domain's playbooks and approval workflows.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="why_arina_iocns/unified knowledge graph.png" height="35px"
                            width="35px" srcset=""></div>
                    <h3>Unified Knowledge Graph</h3>
                    <p>A living map of your entire technology estate, including services, pipelines, dependencies,
                        runbooks, security policies, and team knowledge, shared across all ops functions.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="why_arina_iocns/30-plus integrations.png" height="35px"
                            width="35px" srcset=""></div>
                    <h3>50+ Integrations</h3>
                    <p>Connects to observability, ITSM, security, data platforms, CI/CD, and communication tools, so
                        every ops
                        team works from the same AI-enriched context.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="why_arina_iocns/cross-team insights.png" height="35px"
                            width="35px" srcset=""></div>
                    <h3>Cross-Team Insights</h3>
                    <p>Surface patterns that no single team can see alone: how deploys affect data quality, how security
                        posture
                        correlates with incident volume, and more.</p>
                </div>
            </div>
            <!-- <div class="stats-row"><div class="stat-item"><div class="stat-number">90%</div><div class="stat-label">Reduction in MTTR</div></div><div class="stat-item"><div class="stat-number">70%</div><div class="stat-label">Fewer Escalations</div></div><div class="stat-item"><div class="stat-number">6</div><div class="stat-label">Ops Domains Covered</div></div><div class="stat-item"><div class="stat-number">30+</div><div class="stat-label">Integrations</div></div></div> -->
        </section>



        <section class="stats-section" id="stats">

            <div class="stats-wrapper">

                <div class="stat-box">
                    <div class="stat-number" data-target="90" data-suffix="%">0</div>
                    <div class="stat-label">Reduction in MTTR</div>
                </div>

                <div class="stat-box">
                    <div class="stat-number cal" data-target="70" data-suffix="%">0</div>
                    <div class="stat-label">Fewer Escalations</div>
                </div>

                <div class="stat-box">
                    <div class="stat-number cal2" data-target="6">0</div>
                    <div class="stat-label">Ops Domains Covered</div>
                </div>

                <div class="stat-box cal3">
                    <div class="stat-number" data-target="50" data-suffix="+">0</div>
                    <div class="stat-label">Integrations</div>
                </div>

            </div>

        </section>


        <!-- HOW IT WORKS -->
        <!-- <section class="section section-center" style="background:var(--bg-secondary)">
      <span class="section-label">How It Works</span>
      <h2 class="section-title">From Zero to Autonomous Ops in Minutes</h2>
      <p class="section-desc">Arina integrates with your stack in minutes — no agents, no code changes, no configuration headaches. It immediately starts learning your environment and delivering value across every ops team.</p>
      <div class="steps-container"><div class="step-item"><div class="step-number">1</div><div class="step-content"><h3>Connect Your Entire Stack</h3><p>Link Arina to your monitoring, alerting, ITSM, security, data, and communication tools. One platform connects to everything — PagerDuty, Datadog, ServiceNow, Snyk, Snowflake, Slack, and more.</p></div></div><div class="step-item"><div class="step-number">2</div><div class="step-content"><h3>Arina Maps Your World</h3><p>Arina builds a unified knowledge graph spanning infrastructure, services, data pipelines, security policies, runbooks, and team context — creating a shared intelligence layer for all ops functions.</p></div></div><div class="step-item"><div class="step-number">3</div><div class="step-content"><h3>Autonomous Response Across Domains</h3><p>When issues arise — whether it's an SRE alert, a NOC escalation, a security finding, or a data pipeline failure — Arina investigates autonomously and delivers actionable diagnosis to the right team.</p></div></div><div class="step-item"><div class="step-number">4</div><div class="step-content"><h3>Every Resolution Makes Arina Smarter</h3><p>Feedback loops from every ops domain — SRE, NOC, DevSecOps, DataOps, ITOps — feed back into the platform, sharpening accuracy and surfacing cross-domain patterns over time.</p></div></div></div>
    </section> -->
        <section class="section section-center" id="section1">
            <span class="badge" id="badge1"><span>›</span>HOW IT WORKS</span>
            <h2 class="section-title">From Zero to Autonomous Ops in Minutes</h2>
            <p class="section-desc">Arina integrates with your stack in minutes.It immediately starts learning your
                environment and delivering value across every ops team.</p>

            </div>
            <!-- <div class="stats-row"><div class="stat-item"><div class="stat-number">90%</div><div class="stat-label">Reduction in MTTR</div></div><div class="stat-item"><div class="stat-number">70%</div><div class="stat-label">Fewer Escalations</div></div><div class="stat-item"><div class="stat-number">6</div><div class="stat-label">Ops Domains Covered</div></div><div class="stat-item"><div class="stat-number">30+</div><div class="stat-label">Integrations</div></div></div> -->
        </section>



        <section class="story-section">
            <div class="story-timeline">

                <div class="story-progress-bar" id="storyProgress"></div>

                <!-- STEP 1 -->

                <div class="story-step">

                    <div class="story-count"><img src="icons/ARINA logo_Mnemonic_White.png" height="30px" width="30px"
                            srcset=""></div>

                    <div class="story-text">
                        <h3>Connect Your Entire Stack</h3>
                        <p>Link Arina to your monitoring, alerting, ITSM, security, data, and communication tools. One
                            platform connects to everything (PagerDuty, Datadog, ServiceNow, Snyk, Snowflake, Slack, and
                            more).
                        </p>
                    </div>

                    <div class="story-image">
                        <img src="Arina Website Home Accordion Inforgraphics/Connect Your Entire Stack.png">
                    </div>

                </div>

                <!-- STEP 2 -->

                <div class="story-step">

                    <div class="story-count"><img src="icons/ARINA logo_Mnemonic_White.png" height="30px" width="30px"
                            srcset=""></div>

                    <div class="story-text">
                        <h3>Arina Maps Your World</h3>
                        <p>Arina builds a unified knowledge graph spanning infrastructure, services, data pipelines,
                            security policies, runbooks, and team context, creating a shared intelligence layer for all
                            ops functions.
                        </p>
                    </div>

                    <div class="story-image">
                        <img src="Arina Website Home Accordion Inforgraphics/Arina Maps Your World.png">
                    </div>

                </div>

                <!-- STEP 3 -->

                <div class="story-step">

                    <div class="story-count"><img src="icons/ARINA logo_Mnemonic_White.png" height="30px" width="30px"
                            srcset=""></div>

                    <div class="story-text">
                        <h3>Autonomous Response Across Domains</h3>
                        <p>When issues arise, whether it's an SRE alert, a NOC escalation, a security finding, or a data
                            pipeline failure, Arina investigates autonomously and delivers actionable diagnosis to the
                            right team.
                        </p>
                    </div>

                    <div class="story-image">
                        <img src="Arina Website Home Accordion Inforgraphics/Autonomous Response Across Domains.png">
                    </div>

                </div>

                <!-- STEP 4 -->

                <div class="story-step">

                    <div class="story-count"><img src="icons/ARINA logo_Mnemonic_White.png" height="30px" width="30px"
                            srcset=""></div>

                    <div class="story-text">
                        <h3>Every Resolution Makes Arina Smarter</h3>
                        <p>Feedback loops from every ops domain (SRE, NOC, DevSecOps, DataOps, ITOps) feed back into the
                            platform, sharpening accuracy and surfacing cross-domain patterns over time.
                        </p>
                    </div>

                    <div class="story-image">
                        <img src="Arina Website Home Accordion Inforgraphics/Every Resolution Makes Arina Smarter.png">
                    </div>

                </div>

            </div>

        </section>

        <!-- TESTIMONIALS -->
        <!-- <section class="section section-center">
      <span class="section-label">Trusted by Ops Teams Everywhere</span>
      <h2 class="section-title">What Our Users Say</h2>
      <div class="testimonials-grid"><div class="testimonial-card">
  <span class="testimonial-ops-badge" style="color:#4F7BF7;border-color:#4F7BF740;background:#4F7BF710">SRE</span>
  <p class="testimonial-quote">Arina cut our mean time to resolution from 45 minutes to under 4. Our on-call engineers finally get uninterrupted sleep.</p>
  <div class="testimonial-author"><div class="testimonial-avatar">SN</div><div><div class="testimonial-name">Sarah Nguyen</div><div class="testimonial-role">VP of Engineering, FinScale</div></div></div>
</div>
<div class="testimonial-card">
  <span class="testimonial-ops-badge" style="color:#22C55E;border-color:#22C55E40;background:#22C55E10">NOC</span>
  <p class="testimonial-quote">Our NOC team went from drowning in 2,000 daily alerts to acting on 40 correlated incidents. Arina changed the game for our L1 operators.</p>
  <div class="testimonial-author"><div class="testimonial-avatar">MR</div><div><div class="testimonial-name">Marcus Rivera</div><div class="testimonial-role">Director of NOC, CloudVault</div></div></div>
</div>
<div class="testimonial-card">
  <span class="testimonial-ops-badge" style="color:#A855F7;border-color:#A855F740;background:#A855F710">DataOps</span>
  <p class="testimonial-quote">We integrated Arina in a single afternoon. By the next morning, it had surfaced a latent data pipeline issue we'd been chasing for weeks.</p>
  <div class="testimonial-author"><div class="testimonial-avatar">EB</div><div><div class="testimonial-name">Emily Braun</div><div class="testimonial-role">Head of DataOps, DataStream</div></div></div>
</div>
<div class="testimonial-card">
  <span class="testimonial-ops-badge" style="color:#F59E0B;border-color:#F59E0B40;background:#F59E0B10">DevSecOps</span>
  <p class="testimonial-quote">Arina doesn't just find vulnerabilities — it correlates them with runtime behavior so we fix what actually matters. Our security posture improved overnight.</p>
  <div class="testimonial-author"><div class="testimonial-avatar">RP</div><div><div class="testimonial-name">Raj Patel</div><div class="testimonial-role">CISO, Nimbus Health</div></div></div>
</div>
</div>
    </section> -->

        <!-- <div class="cta-banner">
      <h2>One Platform. Every Ops Team. Instant Impact.</h2>
      <p>Whether you run SRE, NOC, DevSecOps, DataOps, or ITOps — Arina adapts to your workflows and starts resolving
        incidents autonomously from day one.</p>
      <a class="btn-primary" href="contact.php">Book a Demo </a>
    </div> -->
        <section class="smart-cta-hero">

            <div class="smart-cta-badge">
                <span class="badge"><span>›</span>Contact Us</span>
            </div>

            <h1 class="smart-cta-title">
                One Platform. Every Ops Team. Instant Impact.
            </h1>

            <p class="smart-cta-text">
                Whether you run SRE, NOC, DevSecOps, DataOps, or ITOps, Arina adapts to your workflows and starts
                resolving
                incidents autonomously from day one.
            </p>

            <a href="contact.php#bookademo" class="smart-cta-btn">
                Book a Demo
            </a>

        </section>
    </main>



    <script>
    // ─── FAQ Accordion ──────────────────────────────────────
    function toggleFaq(btn) {
        var item = btn.parentElement;
        var answer = item.querySelector('.faq-answer');
        var arrow = btn.querySelector('.faq-arrow');
        var isOpen = answer.classList.contains('open');

        // Close all
        document.querySelectorAll('.faq-answer.open').forEach(function(a) {
            a.classList.remove('open');
        });
        document.querySelectorAll('.faq-arrow.open').forEach(function(a) {
            a.classList.remove('open');
        });

        if (!isOpen) {
            answer.classList.add('open');
            arrow.classList.add('open');
        }
    }

    // ─── Integrations Filter ────────────────────────────────
    function filterIntegrations(category, btn) {
        // Update active button
        document.querySelectorAll('.integrations-filter .filter-btn').forEach(function(b) {
            b.classList.remove('active');
        });
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
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,
        once: true
    });
    </script>

    <script>
    const counters = document.querySelectorAll('.stat-number');
    let started = false;

    function startCounting() {

        if (started) return;

        const section = document.getElementById('stats');
        const rect = section.getBoundingClientRect();

        if (rect.top < window.innerHeight - 100) {

            started = true;

            counters.forEach(counter => {

                const target = +counter.getAttribute('data-target');
                const suffix = counter.getAttribute('data-suffix') || '';
                let count = 0;
                const speed = target / 100;

                const update = () => {
                    count += speed;

                    if (count < target) {
                        counter.textContent = Math.floor(count) + suffix;
                        requestAnimationFrame(update);
                    } else {
                        counter.textContent = target + suffix;
                    }
                };

                update();
            });
        }
    }

    window.addEventListener('scroll', startCounting);
    startCounting();
    </script>

    <script>
    var data = [{
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

    const tabsContainer = document.getElementById("tabs");

    data.forEach((item, index) => {
        const tab = document.createElement("div");
        tab.className = "tab";
        if (index === 0) tab.classList.add("active");

        tab.innerHTML = `<img src="${item.icon}"> ${item.name}`;
        tabsContainer.appendChild(tab);

        tab.addEventListener("click", () => {
            document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
            loadContent(item);
        });
    });

    function loadContent(item) {
        document.getElementById("leftIcon").src = item.icon;
        document.getElementById("cardIcon").src = item.icon;
        document.getElementById("title").textContent = item.title;
        document.getElementById("subtitle").textContent = item.subtitle;
        document.getElementById("description").textContent = item.description;
        document.getElementById("stat").textContent = item.stat;
        document.getElementById("statText").textContent = item.statText;
        document.getElementById("details").textContent = item.details;

        const list = document.getElementById("list");
        list.innerHTML = "";
        item.list.forEach(li => {
            const element = document.createElement("li");
            element.textContent = li;
            list.appendChild(element);
        });
        const statEl = document.getElementById("stat");
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

    loadContent(data[0]);
    </script>

    <script>
    const storySteps = document.querySelectorAll(".story-step");
    const progressBar = document.getElementById("storyProgress");
    const timeline = document.querySelector(".story-timeline");

    /* SECTION FADE */

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, {
        threshold: .6
    });

    storySteps.forEach(step => observer.observe(step));

    /* BLUE LINE SCROLL */

    window.addEventListener("scroll", () => {

        const timelineTop = timeline.offsetTop;
        const timelineHeight = timeline.offsetHeight;

        const scrollPosition = window.scrollY + window.innerHeight / 2 - timelineTop;

        let progressHeight = Math.max(0, Math.min(scrollPosition, timelineHeight));

        progressBar.style.height = progressHeight + "px";

    });
    </script>


</body>
<?php include 'footer.php';?>

</html>