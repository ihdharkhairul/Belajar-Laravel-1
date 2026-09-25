<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no">
<title>Muhammad Khairul Ihdhar — Software Engineer</title>
<meta name="description" content="Portfolio Muhammad Khairul Ihdhar, Software Engineer fresh graduate yang membangun aplikasi web yang rapi dan bisa jalan di production.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --black:#0a0a0a;
    --white:#ffffff;
    --gray-50:#f7f7f7;
    --gray-100:#ececec;
    --gray-300:#cfcfcf;
    --gray-500:#8a8a8a;
    --gray-600:#5e5e5e;
    --gray-700:#4a4a4a;
    --gray-900:#242424;
    --line:#e2e2e2;

    --font-display:'Archivo', sans-serif;
    --font-body:'Space Grotesk', sans-serif;
    --font-mono:'JetBrains Mono', monospace;

    --maxw:1200px;
    --pad:clamp(20px, 5vw, 64px);

    --ease:cubic-bezier(.16,1,.3,1);
    --ease-spring:cubic-bezier(.34,1.56,.64,1);

    --mx:50%;
    --my:50%;
  }

  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}

  @media (prefers-reduced-motion: reduce){
    html{scroll-behavior:auto;}
    *{animation-duration:0.01ms !important; animation-iteration-count:1 !important; transition-duration:0.01ms !important;}
  }

  body{
    font-family:var(--font-body);
    background:var(--white);
    color:var(--black);
    line-height:1.5;
    overflow-x:hidden;
    -webkit-font-smoothing:antialiased;
    position:relative;
  }

  a{color:inherit;text-decoration:none;}
  ul{list-style:none;}
  img{max-width:100%;display:block;}

  ::selection{background:var(--black);color:var(--white);}

  :focus-visible{
    outline:2px solid var(--black);
    outline-offset:3px;
    border-radius:2px;
  }

  /* ===== FILM GRAIN — quiet premium texture over the whole page ===== */
  body::before{
    content:'';
    position:fixed;
    inset:0;
    z-index:9000;
    pointer-events:none;
    opacity:0.035;
    mix-blend-mode:overlay;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  }

  .wrap{
    max-width:var(--maxw);
    margin:0 auto;
    padding-left:var(--pad);
    padding-right:var(--pad);
  }

  .eyebrow{
    font-family:var(--font-mono);
    font-size:12px;
    letter-spacing:0.12em;
    text-transform:uppercase;
    color:var(--gray-500);
    display:flex;
    align-items:center;
    gap:10px;
  }
  .eyebrow::before{
    content:'';
    width:6px;height:6px;
    background:var(--black);
    border-radius:50%;
    flex-shrink:0;
  }

  /* ===== NAV ===== */
  .nav{
    position:fixed;
    top:0;left:0;right:0;
    z-index:100;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:22px var(--pad);
    background:rgba(255,255,255,0.86);
    backdrop-filter:blur(18px) saturate(160%);
    -webkit-backdrop-filter:blur(18px) saturate(160%);
    border-bottom:1px solid transparent;
    transition:border-color .3s var(--ease), padding .3s var(--ease), box-shadow .3s var(--ease);
  }
  .nav.scrolled{
    border-bottom-color:var(--line);
    padding-top:14px;
    padding-bottom:14px;
    box-shadow:0 8px 30px rgba(0,0,0,0.04);
  }
  .nav-progress{
    position:absolute;
    left:0;bottom:-1px;
    height:2px;
    width:0%;
    background:var(--black);
    transition:width .1s linear;
  }
  .nav-logo{
    font-family:var(--font-mono);
    font-weight:600;
    font-size:14px;
    letter-spacing:-0.02em;
  }
  .nav-logo span{color:var(--gray-500);}
  .nav-links{
    display:flex;
    gap:36px;
    font-family:var(--font-mono);
    font-size:13px;
    letter-spacing:0.02em;
  }
  .nav-links a{
    position:relative;
    color:var(--gray-700);
    transition:color .25s var(--ease);
    padding-bottom:4px;
  }
  .nav-links a::after{
    content:'';
    position:absolute;
    left:0;bottom:0;
    width:0;height:1.5px;
    background:var(--black);
    transition:width .3s var(--ease);
  }
  .nav-links a:hover,
  .nav-links a.active{color:var(--black);}
  .nav-links a:hover::after,
  .nav-links a.active::after{width:100%;}

  .nav-cta{
    position:relative;
    font-family:var(--font-mono);
    font-size:13px;
    border:1px solid var(--black);
    padding:9px 18px;
    border-radius:100px;
    transition:background .3s var(--ease), color .3s var(--ease), transform .3s var(--ease-spring), box-shadow .3s var(--ease);
    white-space:nowrap;
    display:inline-block;
  }
  .nav-cta:hover{background:var(--black);color:var(--white);box-shadow:0 10px 24px rgba(0,0,0,0.18);}

  .nav-toggle{
    display:none;
    flex-direction:column;
    gap:5px;
    width:28px;
    background:none;
    border:none;
    cursor:pointer;
    padding:6px;
  }
  .nav-toggle span{
    height:2px;
    background:var(--black);
    border-radius:2px;
    transition:transform .3s var(--ease), opacity .3s var(--ease);
  }
  .nav-toggle.open span:nth-child(1){transform:translateY(7px) rotate(45deg);}
  .nav-toggle.open span:nth-child(2){opacity:0;}
  .nav-toggle.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}

  .mobile-menu{
    position:fixed;
    inset:0;
    background:var(--white);
    z-index:110;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding:var(--pad);
    transform:translateY(-100%);
    transition:transform .45s var(--ease);
    pointer-events:none;
  }
  .mobile-menu.open{
    transform:translateY(0);
    pointer-events:auto;
  }
  .mobile-menu a{
    font-family:var(--font-display);
    font-weight:700;
    font-size:clamp(36px, 11vw, 72px);
    line-height:1.15;
    display:block;
    border-bottom:1px solid var(--line);
    padding:14px 0;
    color:var(--black);
    transition:color .2s var(--ease), padding-left .3s var(--ease);
  }
  .mobile-menu a:hover{
    color:var(--gray-500);
    padding-left:10px;
  }
  .mobile-menu .mm-foot{
    margin-top:30px;
    font-family:var(--font-mono);
    font-size:13px;
    color:var(--gray-500);
    display:flex;
    gap:20px;
    flex-wrap:wrap;
  }
  .mobile-menu .mm-foot a{
    font-family:var(--font-mono);
    font-weight:400;
    font-size:13px;
    border:none;
    padding:0;
    color:var(--gray-500);
    transition:color .2s;
    line-height:unset;
  }
  .mobile-menu .mm-foot a:hover{
    color:var(--black);
    padding-left:0;
  }

  /* ===== HERO ===== */
  .hero{
    min-height:100vh;
    position:relative;
    overflow:hidden;
    background:
      radial-gradient(60% 55% at var(--mx) var(--my), rgba(255,255,255,0.16), rgba(255,255,255,0) 60%),
      linear-gradient(150deg, #a8a8a8 0%, #7c7c7c 40%, #4a4a4a 75%, #2b2b2b 100%);
  }
  .hero::before,
  .hero::after{
    content:'';
    position:absolute;
    border-radius:50%;
    filter:blur(60px);
    pointer-events:none;
    z-index:0;
  }
  .hero::before{
    width:46vw;height:46vw;
    top:-14%;left:-10%;
    background:rgba(255,255,255,0.10);
    animation:driftA 18s ease-in-out infinite;
  }
  .hero::after{
    width:38vw;height:38vw;
    bottom:-10%;right:-6%;
    background:rgba(0,0,0,0.16);
    animation:driftB 22s ease-in-out infinite;
  }
  @keyframes driftA{
    0%,100%{transform:translate(0,0) scale(1);}
    50%{transform:translate(4vw,3vh) scale(1.08);}
  }
  @keyframes driftB{
    0%,100%{transform:translate(0,0) scale(1);}
    50%{transform:translate(-3vw,-4vh) scale(1.1);}
  }
  .hero-topbar{
    position:relative;
    z-index:5;
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:30px;
    padding:130px var(--pad) 0;
    flex-wrap:wrap;
  }
  .hero-credit{
    font-family:var(--font-body);
    font-weight:700;
    font-size:15px;
    color:#fff;
    letter-spacing:-0.01em;
    opacity:0;
    animation:heroFadeUp .8s var(--ease) .15s forwards;
  }
  .hero-right{
    display:flex;
    flex-direction:column;
    align-items:flex-end;
    gap:22px;
  }
  .hero-intro{
    max-width:400px;
    font-size:14px;
    line-height:1.75;
    color:rgba(255,255,255,0.72);
    text-align:right;
    opacity:0;
    animation:heroFadeUp .8s var(--ease) .3s forwards;
  }
  .hero-arrow-btn{
    width:54px;height:54px;
    flex-shrink:0;
    border-radius:50%;
    border:1px solid rgba(255,255,255,0.5);
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    transition:background .3s var(--ease), color .3s var(--ease), transform .3s var(--ease-spring), border-color .3s var(--ease), box-shadow .3s var(--ease);
    opacity:0;
    animation:heroFadeUp .8s var(--ease) .45s forwards;
  }
  .hero-arrow-btn svg{width:20px;height:20px;}
  .hero-arrow-btn:hover{
    background:#fff;
    color:#111;
    border-color:#fff;
    transform:scale(1.08) rotate(45deg);
    box-shadow:0 14px 30px rgba(0,0,0,0.28);
  }

  @keyframes heroFadeUp{
    from{opacity:0;transform:translateY(14px);}
    to{opacity:1;transform:translateY(0);}
  }

  .hero-giant-wrap{
    position:absolute;
    left:0;right:0;
    top:50%;
    transform:translateY(-52%);
    z-index:1;
    display:flex;
    flex-direction:column;
    align-items:center;
    line-height:0.86;
    pointer-events:none;
    user-select:none;
  }
  .hero-giant-line{
    font-family:var(--font-display);
    font-weight:900;
    font-size:clamp(52px, 12.5vw, 180px);
    text-transform:uppercase;
    letter-spacing:-0.02em;
    color:rgba(255,255,255,0.92);
    white-space:nowrap;
    display:block;
    overflow:hidden;
  }
  .hero-giant-line span{
    display:inline-block;
    transform:translateY(105%);
    animation:lineUp 1s var(--ease) forwards;
  }
  .hero-giant-line:nth-child(1) span{animation-delay:.15s;}
  .hero-giant-line:nth-child(2) span{animation-delay:.3s;}
  @keyframes lineUp{
    to{transform:translateY(0);}
  }

  .hero-photo{
    position:absolute;
    left:50%;
    bottom:0;
    transform:translateX(-50%) translateY(24px);
    height:80%;
    max-width:56%;
    width:auto;
    object-fit:contain;
    object-position:bottom;
    z-index:2;
    filter:drop-shadow(0 25px 45px rgba(0,0,0,0.4));
    opacity:0;
    animation:photoRise 1.1s var(--ease) .35s forwards;
  }
  @keyframes photoRise{
    to{opacity:1;transform:translateX(-50%) translateY(0);}
  }

  @media (max-width:680px){
    .hero-topbar{padding-top:110px;flex-direction:column;gap:24px;}
    .hero-right{align-items:flex-start;}
    .hero-intro{text-align:left;max-width:100%;}
    .hero-giant-line{font-size:clamp(38px,15vw,64px);}
    .hero-photo{max-width:78%;height:62%;}
  }
  /* ===== SECTION GENERIC ===== */
  section{padding:120px 0;position:relative;}
  .section-head{
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:30px;
    margin-bottom:64px;
    flex-wrap:wrap;
  }
  .section-title{
    font-family:var(--font-display);
    font-weight:800;
    font-size:clamp(34px, 5vw, 58px);
    letter-spacing:-0.02em;
    text-transform:uppercase;
    line-height:1;
    position:relative;
    display:inline-block;
    color:var(--black);
    padding-bottom:14px;
  }
  .section-title::after{
    content:'';
    position:absolute;
    left:0;bottom:0;
    height:3px;
    width:0;
    background:var(--black);
    transition:width .8s var(--ease) .1s;
  }
  .section-head.in .section-title::after{width:56px;}
  .section-num{
    font-family:var(--font-mono);
    font-size:13px;
    color:var(--gray-300);
  }
  .alt-bg{background:var(--gray-50);}

  .reveal{
    opacity:0;
    transform:translateY(28px);
    transition:opacity .7s var(--ease), transform .7s var(--ease);
  }
  .reveal.in{opacity:1;transform:translateY(0);}

  /* ===== ABOUT ===== */
  .about-grid{
    display:grid;
    grid-template-columns:1.2fr 0.8fr;
    gap:60px;
    align-items:start;
  }
  .about-text p{
    font-size:clamp(18px,2vw,24px);
    line-height:1.6;
    color:var(--black);
    font-weight:500;
  }
  .about-text p + p{margin-top:22px;color:var(--gray-900);font-size:16px;font-weight:400;line-height:1.7;}
  .about-stats{
    display:flex;
    flex-direction:column;
    gap:0;
    border-top:1px solid var(--line);
  }
  .stat{
    display:flex;
    justify-content:space-between;
    align-items:baseline;
    padding:20px 0;
    border-bottom:1px solid var(--line);
    transition:padding-left .35s var(--ease), border-color .35s var(--ease);
  }
  .stat:hover{padding-left:10px;border-bottom-color:var(--gray-500);}
  .stat-num{
    font-family:var(--font-display);
    font-weight:800;
    font-size:36px;
  }
  .stat-label{
    font-family:var(--font-mono);
    font-size:12px;
    color:var(--gray-600);
    text-transform:uppercase;
    letter-spacing:.04em;
    text-align:right;
  }

  /* ===== PROJECTS ===== */
  .project-list{
    display:flex;
    flex-direction:column;
  }
  .project{
    display:grid;
    grid-template-columns:140px 60px 1.1fr 1fr;
    gap:30px;
    padding:36px 0;
    border-top:1px solid var(--line);
    align-items:center;
    transition:padding .35s var(--ease), background .35s var(--ease);
    cursor:default;
    position:relative;
  }
  .project:last-child{border-bottom:1px solid var(--line);}
  .project:hover{padding-left:14px;padding-right:14px;background:rgba(10,10,10,0.02);}
  a.project{cursor:pointer;}
  .project-thumb{
    width:140px;
    height:100px;
    border-radius:8px;
    overflow:hidden;
    background:var(--gray-100);
    border:1px solid var(--line);
    flex-shrink:0;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:transform .5s var(--ease), box-shadow .5s var(--ease);
    will-change:transform;
  }
  a.project:hover .project-thumb{box-shadow:0 20px 40px rgba(0,0,0,0.15);}
  .project-thumb img{
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center;
    transition:transform .5s var(--ease);
  }
  a.project:hover .project-thumb img{transform:scale(1.08);}
  .project-thumb.empty{
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .project-thumb.empty::after{
    content:'';
    width:20px;height:20px;
    border-radius:4px;
    border:1.5px dashed var(--gray-300);
  }
  .project-index{
    font-family:var(--font-mono);
    font-size:13px;
    color:var(--gray-300);
    transition:color .35s var(--ease);
  }
  .project:hover .project-index{color:var(--gray-700);}
  .project-name{
    font-family:var(--font-display);
    font-weight:700;
    font-size:clamp(22px,3vw,32px);
    text-transform:uppercase;
    letter-spacing:-0.01em;
    transition:transform .35s var(--ease);
    display:flex;
    align-items:center;
    gap:10px;
  }
  .project-name .go-icon{
    width:20px;height:20px;
    flex-shrink:0;
    opacity:0;
    transform:translate(-4px,4px);
    transition:opacity .3s var(--ease), transform .3s var(--ease);
  }
  a.project:hover .go-icon{opacity:1;transform:translate(0,0);}
  .project:hover .project-name{transform:translateX(8px);}
  .project-desc{font-size:14.5px;color:var(--gray-900);margin-top:6px;font-weight:400;line-height:1.6;}
  .project-tags{
    display:flex;
    flex-wrap:wrap;
    gap:8px;
    justify-content:flex-end;
  }
  .tag{
    font-family:var(--font-mono);
    font-size:11px;
    border:1px solid var(--line);
    border-radius:100px;
    padding:6px 12px;
    color:var(--gray-900);
    transition:border-color .25s var(--ease), color .25s var(--ease), transform .25s var(--ease-spring);
  }
  .project:hover .tag{border-color:var(--gray-500);color:var(--black);}
  .project:hover .tag:hover{transform:translateY(-2px);background:var(--black);color:var(--white);border-color:var(--black);}

  /* ===== EXPERIENCE ===== */
  .timeline{
    display:flex;
    flex-direction:column;
  }
  .tl-item{
    display:grid;
    grid-template-columns:170px 1fr;
    gap:30px;
    padding:32px 0;
    border-top:1px solid var(--line);
    transition:padding-left .35s var(--ease);
  }
  .tl-item:hover{padding-left:10px;}
  .tl-item:last-child{border-bottom:1px solid var(--line);}
  .tl-period{
    font-family:var(--font-mono);
    font-size:13px;
    color:var(--gray-600);
    padding-top:3px;
  }
  .tl-role{
    font-family:var(--font-display);
    font-weight:700;
    font-size:20px;
    margin-bottom:4px;
  }
  .tl-org{
    font-family:var(--font-mono);
    font-size:13px;
    color:var(--gray-600);
    margin-bottom:14px;
  }
  .tl-desc{font-size:15px;color:var(--gray-900);max-width:560px;line-height:1.7;}

  /* ===== SKILLS ===== */
  .skills-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:1px;
    background:var(--line);
    border:1px solid var(--line);
    border-radius:8px;
    overflow:hidden;
  }
  .skill-cat{
    background:var(--white);
    padding:36px 30px;
    transition:background .35s var(--ease);
  }
  .skill-cat:hover{background:var(--gray-50);}
  .alt-bg .skill-cat{background:var(--gray-50);}
  .alt-bg .skill-cat:hover{background:var(--white);}
  .skill-cat h3{
    font-family:var(--font-mono);
    font-size:12px;
    text-transform:uppercase;
    letter-spacing:.06em;
    color:var(--gray-500);
    margin-bottom:18px;
  }
  .skill-tags{display:flex;flex-wrap:wrap;gap:9px;}
  .skill-tags span{
    font-family:var(--font-body);
    font-weight:500;
    font-size:14px;
    padding:7px 14px;
    border:1px solid var(--line);
    border-radius:100px;
    transition:all .25s var(--ease-spring);
    cursor:default;
  }
  .skill-tags span:hover{
    background:var(--black);
    color:var(--white);
    border-color:var(--black);
    transform:translateY(-2px) scale(1.04);
  }

  /* ===== EDUCATION ===== */
  .edu-item{
    display:grid;
    grid-template-columns:170px 1fr;
    gap:30px;
    padding:32px 0;
    border-top:1px solid var(--line);
    transition:padding-left .35s var(--ease);
  }
  .edu-item:hover{padding-left:10px;}
  .edu-item:last-child{border-bottom:1px solid var(--line);}
  .edu-period{font-family:var(--font-mono);font-size:13px;color:var(--gray-600);padding-top:3px;}
  .edu-degree{font-family:var(--font-display);font-weight:700;font-size:20px;margin-bottom:4px;}
  .edu-school{font-family:var(--font-mono);font-size:13px;color:var(--gray-600);margin-bottom:10px;}
  .edu-desc{font-size:15px;color:var(--gray-900);max-width:560px;line-height:1.7;}

  /* ===== CONTACT ===== */
  .contact{
    background:var(--black);
    color:var(--white);
    overflow:hidden;
    padding-bottom:80px;
  }
  .contact .section-num{color:#444;}
  .contact .section-title{
    color:#fff;
  }
  .contact .section-title::after{background:#fff;}
  .contact-title{
    font-family:var(--font-body);
    font-weight:500;
    font-size:clamp(17px,2vw,22px);
    line-height:1.6;
    letter-spacing:-0.01em;
    max-width:480px;
    color:rgba(255,255,255,0.94);
  }
  .contact-title .accent{color:var(--gray-300);}
  .contact-row{
    margin-top:36px;
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:30px;
    flex-wrap:wrap;
    border-top:1px solid #2a2a2a;
    padding-top:32px;
  }
  .contact-email{
    position:relative;
    font-family:var(--font-mono);
    font-size:clamp(17px,2.1vw,22px);
    border-bottom:1px solid var(--gray-700);
    padding-bottom:4px;
    transition:border-color .25s var(--ease), opacity .25s var(--ease), transform .3s var(--ease);
    display:inline-block;
  }
  .contact-email:hover{border-bottom-color:var(--white);opacity:.75;transform:translateX(4px);}
  .contact-links{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
  }
  .contact-links a{
    display:inline-flex;
    align-items:center;
    gap:7px;
    font-family:var(--font-mono);
    font-size:12px;
    color:rgba(255,255,255,0.75);
    border:1px solid rgba(255,255,255,0.16);
    border-radius:100px;
    padding:9px 16px 9px 12px;
    transition:background .3s var(--ease), color .3s var(--ease), border-color .3s var(--ease), transform .3s var(--ease-spring);
  }
  .contact-links a svg{width:14px;height:14px;flex-shrink:0;}
  .contact-links a:hover{background:#fff;color:#111;border-color:#fff;transform:translateY(-3px);}

  /* ===== STATIC FOOTER (mobile only — desktop uses the floating dock) ===== */
  .static-footer{
    background:var(--black);
    color:var(--gray-500);
    font-family:var(--font-mono);
    font-size:12px;
    border-top:1px solid #1e1e1e;
    display:none;
  }
  .static-footer .wrap{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding-top:22px;
    padding-bottom:32px;
    gap:8px;
  }
  .static-footer .wrap span:first-child{color:var(--gray-300);}

  /* ===== FLOATING DOCK — replaces the old left-side icon rail; acts as
     a persistent, nav-like footer that floats above the content ===== */
  /* Glassy, translucent pill dock — floats at its full size on every breakpoint */
  .dock{
    position:fixed;
    left:50%;
    bottom:22px;
    transform:translate(-50%, 130%);
    z-index:150;
    display:flex;
    align-items:center;
    gap:4px;
    padding:8px;
    background:rgba(10,10,14,0.55);
    backdrop-filter:blur(18px) saturate(160%);
    -webkit-backdrop-filter:blur(18px) saturate(160%);
    border-radius:100px;
    border:1px solid rgba(255,255,255,0.14);
    box-shadow:0 20px 50px rgba(0,0,0,0.3);
    transition:transform .5s var(--ease-spring);
    max-width:calc(100vw - 16px);
    overflow-x:auto;
    scrollbar-width:none;
  }
  .dock::-webkit-scrollbar{display:none;}
  .dock.show{transform:translate(-50%, 0);}
  .dock a{
    width:40px;height:40px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:rgba(255,255,255,0.85);
    transition:background .25s var(--ease), color .25s var(--ease), transform .25s var(--ease-spring);
    flex-shrink:0;
  }
  .dock a svg{width:17px;height:17px;}
  .dock a:hover{background:#fff;color:#111;transform:translateY(-3px);}
  .dock a.active{background:rgba(255,255,255,0.16);color:#fff;}
  .dock .dock-divider{
    width:1px;height:20px;
    background:rgba(255,255,255,0.18);
    margin:0 4px;
    flex-shrink:0;
  }
  .dock-meta{
    display:flex;
    flex-direction:column;
    padding:0 14px 0 10px;
    line-height:1.35;
    flex-shrink:0;
  }
  .dock-meta span:first-child{font-size:11px;color:rgba(255,255,255,0.85);font-weight:600;white-space:nowrap;}
  .dock-meta span:last-child{font-size:9.5px;color:rgba(255,255,255,0.45);white-space:nowrap;}

  /* Same icon size everywhere — on narrow screens, drop the copyright
     text (not the icons) so the whole dock fits in one row, uncropped */
  @media (max-width:600px){
    .dock{gap:2px;padding:6px;}
    .dock .dock-divider:last-of-type{display:none;}
    .dock-meta{display:none;}
  }
  @media (max-width:680px){
    .static-footer{display:block;}
  }
  @media (min-width:681px){
    .static-footer{display:none;}
  }

  /* ===== BACK TO TOP ===== */
  .totop{
    position:fixed;
    right:24px;
    bottom:24px;
    width:46px;height:46px;
    border-radius:50%;
    background:var(--black);
    color:var(--white);
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:80;
    opacity:0;
    transform:translateY(10px);
    transition:opacity .3s var(--ease), transform .3s var(--ease-spring), background .25s var(--ease);
    cursor:pointer;
    border:1px solid #2a2a2a;
    font-size:16px;
  }
  .totop.show{opacity:1;transform:translateY(0);}
  .totop:hover{background:var(--gray-700);transform:translateY(-3px);}
  @media (max-width:980px){
    .totop{display:none;}
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width:980px){
    .nav-links{display:none;}
    .nav-cta{display:none;}
    /* Hamburger stays hidden — the floating dock is the nav on smaller screens */
    .about-grid{grid-template-columns:1fr;}
    .skills-grid{grid-template-columns:1fr 1fr;}
  }

  @media (max-width:680px){
    .project{
      grid-template-columns:1fr;
      gap:10px;
    }
    .project-thumb{order:1;width:100%;height:auto;aspect-ratio:16/9;margin-bottom:4px;}
    .project-index{order:2;}
    .project-name{order:3;}
    .project-desc{order:4;}
    .project-tags{order:5;justify-content:flex-start;margin-top:6px;}
    .project:hover{padding-left:0;padding-right:0;}
    .tl-item, .edu-item{grid-template-columns:1fr;gap:6px;}
    .tl-period, .edu-period{padding-top:0;}
    .skills-grid{grid-template-columns:1fr;}
    .section-head{flex-direction:column;align-items:flex-start;gap:14px;}
    .contact-row{flex-direction:column;align-items:flex-start;gap:24px;}
    section{padding:80px 0;}
  }
</style>
</head>
<body>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-progress" id="navProgress"></div>
  <div class="nav-logo">MKI<span>.dev</span></div>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#education">Education</a></li>
  </ul>
  <a href="#contact" class="nav-cta magnetic">Let's talk</a>
  <button class="nav-toggle" id="navToggle" aria-label="Buka menu" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
  <a href="#about">About</a>
  <a href="#projects">Projects</a>
  <a href="#experience">Experience</a>
  <a href="#skills">Skills</a>
  <a href="#education">Education</a>
  <a href="#contact">Contact</a>
  <div class="mm-foot">
    <a href="https://github.com/ihdharkhairul" target="_blank" rel="noopener">GitHub</a>
    <a href="https://www.linkedin.com/in/ihdharkhairul" target="_blank" rel="noopener">LinkedIn</a>
    <a href="mailto:ihdharkhairul@gmail.com">Email</a>
  </div>
</div>

<!-- HERO -->
<header class="hero" id="hero">
  <div class="hero-topbar">
    <div class="hero-credit">© 2026 — Code by Muhammad Khairul Ihdhar</div>
    <div class="hero-right">
      <p class="hero-intro">Software Engineer focused on building web applications from the ground up. I care about clean code, solid foundations, and creating products that are not only well built, but genuinely useful.</p>
      <a href="#contact" class="hero-arrow-btn magnetic" aria-label="Ke bagian kontak">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M9 7h8v8"/></svg>
      </a>
    </div>
  </div>

  <div class="hero-giant-wrap" aria-hidden="true">
    <span class="hero-giant-line"><span>Software</span></span>
    <span class="hero-giant-line"><span>Engineer</span></span>
  </div>
  <img src="assets/foto arul.png" alt="Foto Muhammad Khairul Ihdhar" class="hero-photo">
</header>

<main>

  <!-- ABOUT -->
  <section id="about">
    <div class="wrap">
      <div class="section-head reveal">
        <h2 class="section-title">About</h2>
        <span class="section-num">01 / 05</span>
      </div>
      <div class="about-grid">
        <div class="about-text reveal">
          <p>Saya software engineer fresh graduate yang senang mengubah ide menjadi produk nyata — dari rancangan, ke kode, sampai jalan di production.</p>
          <p>Belajar secara mandiri lewat proyek-proyek kecil, kontribusi open source, dan banyak percobaan — saya terbiasa dengan stack JavaScript modern, basis data relasional, serta alur kerja deployment sehari-hari. Saya suka kode yang mudah dibaca orang lain, bukan hanya berjalan di komputer saya.</p>
        </div>
        <div class="about-stats reveal">
          <div class="stat"><span class="stat-num">3+</span><span class="stat-label">Proyek<br>selesai</span></div>
          <div class="stat"><span class="stat-num">5</span><span class="stat-label">Bahasa &<br>framework</span></div>
          <div class="stat"><span class="stat-num">1</span><span class="stat-label">Gelar<br>Sarjana CS</span></div>
          <div class="stat"><span class="stat-num">24/7</span><span class="stat-label">Niat<br>belajar</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects" class="alt-bg">
    <div class="wrap">
      <div class="section-head reveal">
        <h2 class="section-title">Projects</h2>
        <span class="section-num">02 / 05</span>
      </div>
      <div class="project-list">
        <a href="https://hypercare-app.rf.gd" target="_blank" rel="noopener" class="project reveal tilt-card">
          <div class="project-thumb"><img src="assets/hyoercare.png" alt="Preview tampilan HyperCare" loading="lazy"></div>
          <span class="project-index">01</span>
          <div>
            <div class="project-name">HyperCare
              <svg class="go-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M9 7h8v8"/></svg>
            </div>
            <div class="project-desc">Platform telenursing untuk manajemen pasien hipertensi monitoring tekanan darah, edukasi kesehatan, konsultasi perawat, dan AI health assistant berbasis Gemini.</div>
          </div>
          <div class="project-tags">
            <span class="tag">React</span><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">Gemini AI</span>
          </div>
        </a>
        <a href="https://hikerbest.sisteminformasikotacerdas.id/" target="_blank" rel="noopener" class="project reveal tilt-card">
          <div class="project-thumb"><img src="assets/Hikerbest.png" alt="Preview tampilan Hikerbest" loading="lazy"></div>
          <span class="project-index">02</span>
          <div>
            <div class="project-name">Hikerbest
              <svg class="go-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M9 7h8v8"/></svg>
            </div>
            <div class="project-desc">Platform pendakian berbasis web untuk eksplorasi destinasi gunung, booking pendakian, informasi cuaca, panduan keselamatan, dan sertifikat digital bagi pendaki.</div>
          </div>
          <div class="project-tags">
            <span class="tag">CodeIgniter 3</span><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JavaScript</span>
          </div>
        </a>
        <a href="https://gaia-city-official.vercel.app/" target="_blank" rel="noopener" class="project reveal tilt-card">
          <div class="project-thumb"><img src="assets/gaiacity.png" alt="Preview tampilan GaiaCity" loading="lazy"></div>
          <span class="project-index">03</span>
          <div>
            <div class="project-name">GaiaCity
              <svg class="go-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M9 7h8v8"/></svg>
            </div>
            <div class="project-desc">Platform smart city untuk monitoring lingkungan secara real-time — memantau kualitas udara, memprediksi polusi, dan mengoptimalkan penghijauan kota berbasis IoT dan AI (data masih dummy).</div>
          </div>
          <div class="project-tags">
            <span class="tag">HTML</span><span class="tag">Tailwind CSS</span><span class="tag">CSS</span><span class="tag">JavaScript</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section id="experience">
    <div class="wrap">
      <div class="section-head reveal">
        <h2 class="section-title">Experience</h2>
        <span class="section-num">03 / 05</span>
      </div>
      <div class="timeline">
        <div class="tl-item reveal">
          <span class="tl-period">2026 — Present</span>
          <div>
            <div class="tl-role">Senior Resident</div>
            <div class="tl-org">Campus Ambassador · Dormitory · Telkom University</div>
            <p class="tl-desc">Berperan sebagai Duta Kampus melalui Senior Resident dengan mendampingi penghuni asrama, menjalankan program kerja seperti check-in, menjadi penghubung antara penghuni dan pihak universitas, serta membantu menciptakan lingkungan asrama yang tertib, aman, dan nyaman.</p>
          </div>
        </div>
        <div class="tl-item reveal">
          <span class="tl-period">2026 — Present</span>
          <div>
            <div class="tl-role">Computer Networks Teaching Assistant</div>
            <div class="tl-org">Computer Networks · Laboratory · Telkom University</div>
            <p class="tl-desc">Mendampingi mahasiswa dalam pelaksanaan praktikum Jaringan Komputer di laboratorium melalui penyampaian materi, bimbingan penerapan konsep dan konfigurasi jaringan, serta penanganan kendala teknis selama praktikum. Mendukung proses pembelajaran berbasis praktik melalui komunikasi dan bimbingan teknis secara langsung kepada mahasiswa.</p>
          </div>
        </div>

        <div class="tl-item reveal">
          <span class="tl-period">2025 — Present</span>
          <div>
            <div class="tl-role">Freelance Web Developer</div>
            <div class="tl-org">Independent Developer · Freelance · Indonesia</div>
            <p class="tl-desc">Merancang dan mengembangkan website serta sistem informasi berbasis web secara end-to-end berdasarkan kebutuhan klien, mulai dari perancangan UI, pengembangan frontend dan backend, integrasi database, testing, hingga deployment.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
  <section id="skills" class="alt-bg">
    <div class="wrap">
      <div class="section-head reveal">
        <h2 class="section-title">Skills</h2>
        <span class="section-num">04 / 05</span>
      </div>
      <div class="skills-grid reveal">
        <div class="skill-cat">
          <h3>Bahasa</h3>
          <div class="skill-tags">
            <span>JavaScript</span><span>Java</span><span>PHP</span><span>SQL</span><span>CSS</span>
          </div>
        </div>
        <div class="skill-cat">
          <h3>Frontend</h3>
          <div class="skill-tags">
            <span>React</span><span>Next.js</span><span>Vue</span><span>Tailwind CSS</span>
          </div>
        </div>
        <div class="skill-cat">
          <h3>Backend</h3>
          <div class="skill-tags">
            <span>Node.js</span><span>Express</span><span>PHP + MySQL</span><span>REST API</span>
          </div>
        </div>
        <div class="skill-cat">
          <h3>Database</h3>
          <div class="skill-tags">
            <span>MySQL</span>
          </div>
        </div>
        <div class="skill-cat">
          <h3>AI & Tools</h3>
          <div class="skill-tags">
            <span>Git</span><span>Docker</span><span>Figma</span><span>Postman</span><span>Claude</span><span>Canva</span><span>Stich</span><span>Gemini</span><span>Zed AI</span>
          </div>
        </div>
        <div class="skill-cat">
          <h3>Lainnya</h3>
          <div class="skill-tags">
            <span>Agile</span><span>Testing</span><span>CI/CD</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EDUCATION -->
  <section id="education">
    <div class="wrap">
      <div class="section-head reveal">
        <h2 class="section-title">Education</h2>
        <span class="section-num">05 / 05</span>
      </div>
      <div class="timeline">
        <div class="edu-item reveal">
          <span class="edu-period">2025 — Present</span>
          <div>
            <div class="edu-degree">B.Sc. in Smart City Information Systems</div>
            <div class="edu-school">Telkom University</div>
            <p class="edu-desc">Focused on Information Systems, Software Engineering, and smart city technologies, leveraging data-driven approaches to design innovative, scalable, and sustainable digital solutions.</p>
          </div>
        </div>
        <div class="edu-item reveal">
          <span class="edu-period">2022 — 2025</span>
          <div>
            <div class="edu-degree">Senior High School Diploma</div>
            <div class="edu-school">SMA Negeri 1 Mawasangka Tengah</div>
            <p class="edu-desc">Completed secondary education under the Merdeka Curriculum, with a focus on Biology, Chemistry, and Physics, fostering analytical thinking, scientific inquiry, and problem-solving skills.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="contact">
    <div class="wrap">
      <div class="section-head reveal">
        <h2 class="section-title" style="color:#fff">Contact</h2>
        <span class="section-num">Get in touch</span>
      </div>
      <h3 class="contact-title reveal">Ada project atau kolaborasi? <span class="accent">Kabarin aja.</span></h3>
      <div class="contact-row reveal">
        <a href="mailto:ihdharkhairul@gmail.com" class="contact-email">ihdharkhairul@gmail.com</a>
        <div class="contact-links">
          <a href="https://github.com/ihdharkhairul" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.53 2.36 1.09 2.94.84.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.1.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.03a9.4 9.4 0 015 0c1.91-1.3 2.75-1.03 2.75-1.03.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.69 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85v2.74c0 .26.18.58.69.48A10 10 0 0012 2z"/></svg>GitHub</a>
          <a href="https://www.linkedin.com/in/khairulihdhar" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 10v7M7 7v.01M11 17v-4.5a2.5 2.5 0 015 0V17"/></svg>LinkedIn</a>
          <a href="https://www.instagram.com/rullmki?igsi=MWR0YXloaGNwdXZtdw==" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1"/></svg>Instagram</a>
          <a href="https://wa.me/6285246360541?text=Halo%20Khairul%2C%20saya%20menemukan%20portofolio%20Anda%20dan%20tertarik%20untuk%20mendiskusikan%20kemungkinan%20proyek%20bersama." target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15.1L2 22l5.06-1.33A10 10 0 1012 2zm5.5 14.2c-.24.66-1.4 1.26-1.93 1.32-.5.06-1.1.09-1.78-.11a15.6 15.6 0 01-2.2-.82 12.2 12.2 0 01-4.3-3.8c-.44-.6-.9-1.34-1.02-2.08-.13-.75.06-1.4.5-1.87.16-.17.36-.26.58-.26h.42c.18 0 .38-.02.56.42.2.5.68 1.75.74 1.88.06.13.1.28.02.44-.08.17-.13.27-.26.4l-.36.42c-.12.13-.25.27-.1.53.14.26.63 1.06 1.36 1.72.94.85 1.75 1.13 2.01 1.26.26.13.42.11.57-.06.16-.17.66-.75.83-1.01.17-.26.34-.21.56-.13.22.08 1.44.68 1.68.8.25.13.4.19.46.3.06.13.06.71-.18 1.37z"/></svg>WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- Static footer — shown on mobile only, where the floating dock is hidden -->
<footer class="static-footer">
  <div class="wrap">
    <span>© 2026 Muhammad Khairul Ihdhar</span>
    <span>Dibangun dengan teliti, baris demi baris.</span>
  </div>
</footer>

<!-- FLOATING DOCK — desktop navigation + footer, replaces the old left icon rail -->
<footer class="dock" id="dock" aria-label="Navigasi cepat &amp; footer">
  <a href="#about" data-nav aria-label="Beranda"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/></svg></a>
  <a href="#projects" data-nav aria-label="Proyek"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></a>
  <a href="#experience" data-nav aria-label="Pengalaman"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/><path d="M3 12h18"/></svg></a>
  <a href="#skills" data-nav aria-label="Skill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2.3"/><circle cx="5" cy="17" r="2.3"/><circle cx="19" cy="17" r="2.3"/><path d="M12 7.3L6.6 15M12 7.3l5.4 7.7M7.4 17h9.2"/></svg></a>
  <a href="#education" data-nav aria-label="Pendidikan"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="9" r="5"/><path d="M8.5 13.5L7 21l5-2.4L17 21l-1.5-7.5"/></svg></a>
  <a href="#contact" data-nav aria-label="Kontak"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a>
  <span class="dock-divider"></span>
  <a href="https://github.com/ihdharkhairul" target="_blank" rel="noopener" aria-label="GitHub"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.53 2.36 1.09 2.94.84.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.1.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.03a9.4 9.4 0 015 0c1.91-1.3 2.75-1.03 2.75-1.03.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.69 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85v2.74c0 .26.18.58.69.48A10 10 0 0012 2z"/></svg></a>
  <a href="https://www.linkedin.com/in/khairulihdhar" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 10v7M7 7v.01M11 17v-4.5a2.5 2.5 0 015 0V17"/></svg></a>
  <span class="dock-divider"></span>
  <div class="dock-meta">
    <span>© 2026 MKI</span>
    <span>Baris demi baris.</span>
  </div>
</footer>

<button class="totop magnetic" id="toTop" aria-label="Kembali ke atas">↑</button>

<script>
  const nav = document.getElementById('nav');
  const navProgress = document.getElementById('navProgress');
  const toTop = document.getElementById('toTop');
  const navToggle = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const dock = document.getElementById('dock');
  const hero = document.getElementById('hero');

  // Nav scroll state + scroll progress + dock reveal
  function updateDockVisibility(){
    // On mobile/tablet the dock is the only navigation (no hamburger),
    // so it should be visible the moment the page opens — no scroll needed.
    if (window.innerWidth <= 980) {
      dock.classList.add('show');
    } else {
      dock.classList.toggle('show', window.scrollY > window.innerHeight * 0.5);
    }
  }

  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 30);
    toTop.classList.toggle('show', window.scrollY > 500);

    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const pct = docHeight > 0 ? (window.scrollY / docHeight) * 100 : 0;
    navProgress.style.width = pct + '%';

    updateDockVisibility();
  }, {passive: true});

  window.addEventListener('resize', updateDockVisibility, {passive: true});
  updateDockVisibility();

  // Mobile menu toggle
  navToggle.addEventListener('click', () => {
    const isOpen = navToggle.classList.toggle('open');
    mobileMenu.classList.toggle('open', isOpen);
    navToggle.setAttribute('aria-expanded', isOpen);
    mobileMenu.setAttribute('aria-hidden', !isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // Tutup mobile menu saat link diklik
  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      navToggle.classList.remove('open');
      mobileMenu.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
      mobileMenu.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    });
  });

  // Tutup mobile menu saat Escape ditekan
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
      navToggle.classList.remove('open');
      mobileMenu.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
      mobileMenu.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
      navToggle.focus();
    }
  });

  // Back to top
  toTop.addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));

  // Scroll reveal, with a slight stagger for siblings revealed together
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('in');
        io.unobserve(e.target);
      }
    });
  }, {threshold: 0.08, rootMargin: '0px 0px -40px 0px'});
  revealEls.forEach(el => io.observe(el));

  // Active nav link + dock link highlight while scrolling
  const sections = document.querySelectorAll('main section[id]');
  const navLinks = document.querySelectorAll('.nav-links a');
  const dockLinks = document.querySelectorAll('.dock a[data-nav]');
  const navObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + id));
        dockLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + id));
      }
    });
  }, {rootMargin: '-40% 0px -50% 0px'});
  sections.forEach(s => navObserver.observe(s));

  // Cursor-follow spotlight in the hero
  if (window.matchMedia('(hover: hover)').matches) {
    hero.addEventListener('mousemove', (e) => {
      const r = hero.getBoundingClientRect();
      const x = ((e.clientX - r.left) / r.width) * 100;
      const y = ((e.clientY - r.top) / r.height) * 100;
      hero.style.setProperty('--mx', x + '%');
      hero.style.setProperty('--my', y + '%');
    });
  }

  // Subtle magnetic pull for key buttons
  if (window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.magnetic').forEach(el => {
      el.addEventListener('mousemove', (e) => {
        const r = el.getBoundingClientRect();
        const x = e.clientX - (r.left + r.width / 2);
        const y = e.clientY - (r.top + r.height / 2);
        el.style.transform = `translate(${x * 0.22}px, ${y * 0.22}px)`;
      });
      el.addEventListener('mouseleave', () => { el.style.transform = ''; });
    });
  }

  // Gentle 3D tilt on project thumbnails
  if (window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.tilt-card').forEach(card => {
      const thumb = card.querySelector('.project-thumb');
      card.addEventListener('mousemove', (e) => {
        const r = thumb.getBoundingClientRect();
        const x = (e.clientY - r.top - r.height / 2) / r.height;
        const y = (e.clientX - r.left - r.width / 2) / r.width;
        thumb.style.transform = `rotateX(${x * -10}deg) rotateY(${y * 10}deg) scale(1.03)`;
      });
      card.addEventListener('mouseleave', () => { thumb.style.transform = ''; });
    });
  }
</script>

</body>
</html>