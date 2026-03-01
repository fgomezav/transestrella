<?php
/**
 * Template Name: Inicio
 */

get_header();
?>
<style>
/* ── MOCKUP LABELS ── */
.mock-label{display:flex;align-items:center;gap:12px;padding:9px 32px;background:rgba(245,166,35,.07);border-top:2px dashed rgba(245,166,35,.35);border-bottom:2px dashed rgba(245,166,35,.35);}
.mock-label .num{width:22px;height:22px;background:var(--ts-gold);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:800;flex-shrink:0;}
.mock-label span{font-family:var(--font-display);font-size:11px;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--ts-gold);}

/* ── HERO — overrides para la home ── */
.hero{min-height:100vh;}
.hero-bg{background-image:url('https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=1600&q=80');opacity:.28;}
.hero-overlay{background:linear-gradient(108deg,rgba(8,50,102,.97) 0%,rgba(8,50,102,.88) 42%,rgba(15,91,167,.28) 100%);}
.hero-line{transform:rotate(11deg) translateX(50%);}
.hero-content{padding:128px 40px 96px;}
.eyebrow{margin-bottom:20px;}
.hero h1{font-size:clamp(46px,7vw,84px);margin-bottom:26px;max-width:700px;}
.hero-desc{max-width:540px;margin-bottom:44px;}
.hero-btns{margin-bottom:64px;}
.btn-outline{display:inline-flex;align-items:center;gap:8px;padding:15px 34px;background:transparent;color:var(--ts-white);font-family:var(--font-display);font-size:15px;font-weight:700;letter-spacing:.07em;text-transform:uppercase;border-radius:4px;text-decoration:none;border:2px solid rgba(255,255,255,.32);}
.hero-stats{display:flex;gap:44px;padding-top:44px;border-top:1px solid rgba(255,255,255,.09);}
.hero-stat-num{font-family:var(--font-display);font-size:40px;font-weight:800;color:var(--ts-gold);line-height:1;}
.hero-stat-label{font-size:13px;color:rgba(255,255,255,.48);margin-top:3px;}
.scroll-hint{position:absolute;bottom:28px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:7px;z-index:5;}
.scroll-hint span{font-family:var(--font-display);font-size:10px;letter-spacing:.16em;text-transform:uppercase;color:rgba(255,255,255,.3);}
.scroll-mouse{width:20px;height:34px;border:2px solid rgba(255,255,255,.18);border-radius:10px;display:flex;justify-content:center;padding-top:5px;}
.scroll-dot{width:3px;height:7px;background:var(--ts-gold);border-radius:2px;animation:scrollBob 1.8s ease-in-out infinite;}
@keyframes scrollBob{0%,100%{transform:translateY(0);opacity:1;}50%{transform:translateY(7px);opacity:.3;}}

/* ── TRUST BAR ── */
.trustbar{background:#FFFFFF;border-bottom:1px solid var(--ts-gray-line);padding:20px 40px;}
.trustbar-inner{max-width:1240px;margin:0 auto;display:flex;align-items:center;gap:28px;}
.trustbar-label{font-family:var(--font-display);font-size:11px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:#999999;white-space:nowrap;flex-shrink:0;}
.trustbar-divider{width:1px;height:28px;background:var(--ts-gray-line);flex-shrink:0;}
.trustbar-logos{display:flex;align-items:center;gap:32px;flex:1;}
.logo-ph{height:26px;background:#E2E8F0;border-radius:3px;opacity:.7;}

/* ── SERVICIOS ── */
.services{background:var(--ts-gray-bg);padding:88px 40px;}
.services-inner{max-width:1240px;margin:0 auto;}
.sec-header{display:grid;grid-template-columns:1fr auto;align-items:end;gap:20px;margin-bottom:52px;}
.sec-header-left{max-width:520px;}
.sec-header h2{font-family:var(--font-display);font-size:clamp(30px,4vw,50px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;}
.sec-header h2 span{color:var(--ts-gold);}
.sec-header p{font-size:16px;color:#333333;line-height:1.7;}
.services-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;}
.svc-card{background:#FFFFFF;border-radius:12px;overflow:hidden;border:1px solid rgba(0,0,0,.06);display:flex;flex-direction:column;transition:transform .22s,box-shadow .22s;}
.svc-card:hover{transform:translateY(-5px);box-shadow:0 18px 36px rgba(8,50,102,.11);}
.svc-img{height:180px;position:relative;overflow:hidden;background:var(--ts-blue-deep);}
.svc-img img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .35s;}
.svc-card:hover .svc-img img{transform:scale(1.05);}
.svc-img-overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(8,50,102,.55) 0%,transparent 60%);}
.svc-tag{position:absolute;bottom:12px;left:12px;background:var(--ts-gold);color:#fff;font-family:var(--font-display);font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:3px 9px;border-radius:3px;z-index:2;}
.svc-body{padding:22px;flex:1;display:flex;flex-direction:column;}
.svc-body h3{font-family:var(--font-display);font-size:19px;font-weight:800;color:#333333;text-transform:uppercase;line-height:1.1;margin-bottom:8px;}
.svc-body p{font-size:14px;color:#333333;line-height:1.65;flex:1;margin-bottom:16px;}
.svc-features{list-style:none;margin-bottom:18px;}
.svc-features li{font-size:13px;color:#333333;padding:4px 0;display:flex;align-items:center;gap:8px;}
.svc-feat-dot{width:5px;height:5px;background:var(--ts-gold);border-radius:50%;flex-shrink:0;}
.svc-link{display:inline-flex;align-items:center;gap:5px;font-family:var(--font-display);font-size:13px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--ts-blue);text-decoration:none;}

/* ── FLOTA ── */
.fleet{background:var(--ts-blue-deep);padding:88px 40px;position:relative;overflow:hidden;}
.fleet::before{content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.02) 1px,transparent 1px);background-size:52px 52px;}
.fleet-inner{max-width:1240px;margin:0 auto;position:relative;z-index:2;}
.fleet-header{text-align:center;margin-bottom:48px;}
.fleet-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:var(--ts-white);margin-bottom:10px;margin-top:12px;}
.fleet-header h2 span{color:var(--ts-gold);}
.fleet-header p{font-size:16px;color:rgba(255,255,255,.5);max-width:480px;margin:0 auto;}
.fleet-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:16px;}
.fleet-item{border-radius:10px;overflow:hidden;border:1px solid rgba(255,255,255,.08);transition:border-color .2s;position:relative;}
.fleet-item:hover{border-color:rgba(245,166,35,.35);}
.fleet-item-img{height:150px;background:#0A3A6E;overflow:hidden;}
.fleet-item-img img{width:100%;height:100%;object-fit:cover;opacity:.75;transition:opacity .25s;}
.fleet-item:hover .fleet-item-img img{opacity:1;}
.fleet-item-body{padding:14px 16px;background:rgba(255,255,255,.04);}
.fleet-name{font-family:var(--font-display);font-size:16px;font-weight:800;text-transform:uppercase;color:var(--ts-white);margin-bottom:3px;}
.fleet-desc{font-size:12px;color:rgba(255,255,255,.42);line-height:1.5;}
.fleet-note{text-align:center;margin-top:28px;font-size:14px;color:rgba(255,255,255,.35);}

/* ── POR QUÉ ELEGIRNOS ── */
.why{background:#FFFFFF;padding:88px 40px;}
.why-inner{max-width:1240px;margin:0 auto;}
.why-header{text-align:center;margin-bottom:56px;}
.why-header h2{font-family:var(--font-display);font-size:clamp(30px,4vw,50px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;margin-top:12px;}
.why-header h2 span{color:var(--ts-gold);}
.why-header p{font-size:17px;color:#333333;max-width:520px;margin:0 auto;line-height:1.7;}
.why-cards{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;border-radius:14px;overflow:hidden;border:1px solid var(--ts-gray-line);margin-bottom:2px;}
.why-card{background:var(--ts-gray-bg);padding:32px 24px;position:relative;transition:background .22s;}
.why-card:hover{background:#EEF3FA;}
.why-num{font-family:var(--font-display);font-size:52px;font-weight:800;color:var(--ts-blue);opacity:.06;position:absolute;top:12px;right:16px;line-height:1;}
.why-icon{width:50px;height:50px;background:rgba(245,166,35,.1);border-radius:9px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;border:1px solid rgba(245,166,35,.18);}
.why-icon svg{width:24px;height:24px;stroke:var(--ts-gold);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
.why-card h4{font-family:var(--font-display);font-size:19px;font-weight:800;color:#333333;text-transform:uppercase;margin-bottom:8px;line-height:1.1;}
.why-card p{font-size:14px;color:#333333;line-height:1.65;}
.why-metrics{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--ts-gray-line);border-radius:12px;overflow:hidden;border:1px solid var(--ts-gray-line);margin-top:2px;}
.why-metric{background:#FFFFFF;padding:24px 20px;text-align:center;}
.why-metric-num{font-family:var(--font-display);font-size:40px;font-weight:800;color:var(--ts-gold);line-height:1;margin-bottom:5px;}
.why-metric-label{font-size:12px;color:#333333;line-height:1.4;}

/* ── CERTIFICACIONES ── */
.certs{background:var(--ts-gray-bg);padding:88px 40px;}
.certs-inner{max-width:1240px;margin:0 auto;}
.certs-header{text-align:center;margin-bottom:48px;}
.certs-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:#333333;margin-bottom:10px;margin-top:12px;}
.certs-header h2 span{color:var(--ts-gold);}
.certs-header p{font-size:16px;color:#333333;max-width:480px;margin:0 auto;}
.certs-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:48px;}
.cert-card{background:#FFFFFF;border-radius:12px;padding:32px 28px;border:1px solid var(--ts-gray-line);text-align:center;transition:border-color .2s,box-shadow .2s;}
.cert-card:hover{border-color:var(--ts-gold);box-shadow:0 8px 24px rgba(245,166,35,.1);}
.cert-icon-box{width:72px;height:72px;background:#EEF3FA;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 18px;}
.cert-icon-box svg{width:32px;height:32px;stroke:var(--ts-blue);fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round;}
.cert-card h3{font-family:var(--font-display);font-size:20px;font-weight:800;text-transform:uppercase;color:#333333;margin-bottom:6px;}
.cert-card p{font-size:14px;color:#333333;line-height:1.65;}
.agrem-label{font-family:var(--font-display);font-size:11px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:#999999;text-align:center;margin-bottom:20px;}
.agrem-logos{display:flex;align-items:center;justify-content:center;gap:28px;flex-wrap:wrap;}
.agrem-logo{height:28px;background:#DDE3EC;border-radius:4px;opacity:.6;padding:0 20px;display:flex;align-items:center;font-family:var(--font-display);font-size:13px;font-weight:700;color:#333333;white-space:nowrap;}

/* ── SUCURSALES ── */
.branches{background:#FFFFFF;padding:88px 40px;}
.branches-inner{max-width:1240px;margin:0 auto;}
.branches-top{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start;margin-bottom:48px;}
.branches-top h2{font-family:var(--font-display);font-size:clamp(30px,4vw,50px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;}
.branches-top h2 span{color:var(--ts-gold);}
.branches-top p{font-size:16px;color:#333333;line-height:1.75;}
.branches-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;}
.branch-card{padding:18px 16px;border:1px solid var(--ts-gray-line);border-radius:10px;transition:all .2s;}
.branch-card:hover{border-color:var(--ts-gold);box-shadow:0 6px 20px rgba(245,166,35,.09);}
.branch-card.main{border-color:var(--ts-gold);background:rgba(245,166,35,.04);}
.branch-icon{width:32px;height:32px;background:rgba(15,91,167,.08);border-radius:6px;display:flex;align-items:center;justify-content:center;margin-bottom:10px;}
.branch-icon svg{width:16px;height:16px;stroke:var(--ts-blue);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
.branch-name{font-family:var(--font-display);font-size:17px;font-weight:800;color:#333333;text-transform:uppercase;margin-bottom:4px;}
.branch-addr{font-size:12px;color:#333333;line-height:1.5;margin-bottom:6px;}
.branch-phone{font-size:13px;font-weight:600;color:var(--ts-blue);}
.branch-main-tag{font-size:10px;font-weight:700;color:var(--ts-gold);text-transform:uppercase;letter-spacing:.08em;margin-top:6px;}

/* ── TESTIMONIOS ── */
.testi{background:var(--ts-gray-bg);padding:88px 40px;}
.testi-inner{max-width:1240px;margin:0 auto;}
.testi-header{text-align:center;max-width:500px;margin:0 auto 48px;}
.testi-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.05;margin-bottom:12px;}
.testi-header h2 span{color:var(--ts-gold);}
.testi-header p{font-size:16px;color:#333333;}
.testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;}
.testi-card{background:#FFFFFF;border-radius:12px;padding:28px;border:1px solid rgba(0,0,0,.06);position:relative;}
.testi-stars{position:absolute;top:24px;right:24px;display:flex;gap:3px;}
.testi-stars svg{width:13px;height:13px;fill:var(--ts-gold);}
.testi-quote-icon{width:36px;height:36px;background:rgba(245,166,35,.08);border-radius:6px;display:flex;align-items:center;justify-content:center;margin-bottom:14px;}
.testi-quote-icon svg{width:18px;height:18px;fill:var(--ts-gold);opacity:.6;}
.testi-text{font-size:15px;color:#333333;line-height:1.75;margin-bottom:22px;font-style:italic;}
.testi-author{display:flex;align-items:center;gap:12px;border-top:1px solid var(--ts-gray-line);padding-top:18px;}
.testi-av{width:42px;height:42px;background:linear-gradient(135deg,var(--ts-blue) 0%,var(--ts-blue-deep) 100%);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-family:var(--font-display);font-size:17px;font-weight:700;flex-shrink:0;}
.testi-name{font-family:var(--font-display);font-size:14px;font-weight:700;color:#333333;text-transform:uppercase;letter-spacing:.02em;}
.testi-role{font-size:12px;color:#999999;}

/* ── CTA — override font-size de la home ── */
.cta-text h2{font-size:clamp(30px,4vw,50px);margin-bottom:16px;}

/* ── RESPONSIVE ── */
@media(max-width:1024px){
  .services-grid,.why-cards{grid-template-columns:repeat(2,1fr);}
  .why-metrics{grid-template-columns:repeat(2,1fr);}
  .fleet-grid{grid-template-columns:repeat(3,1fr);}
}
@media(max-width:768px){
  .hero-stats{gap:22px;flex-wrap:wrap;}
  .hero-stats>div{min-width:42%;}
  .trustbar-inner{flex-wrap:wrap;gap:12px;}
  .services,.why,.certs,.branches,.testi,.fleet{padding:60px 20px;}
  .services-grid{grid-template-columns:1fr;}
  .sec-header{grid-template-columns:1fr;}
  .sec-header a{display:none;}
  .fleet-grid{grid-template-columns:repeat(2,1fr);}
  .why-cards{grid-template-columns:1fr 1fr;}
  .why-metrics{grid-template-columns:repeat(2,1fr);}
  .certs-grid{grid-template-columns:1fr;}
  .branches-top{grid-template-columns:1fr;gap:20px;}
  .branches-grid{grid-template-columns:repeat(2,1fr);}
  .testi-grid{grid-template-columns:1fr;}
  .footer-bottom{flex-direction:column;text-align:center;}
  .wa-float{bottom:14px;right:14px;}
}
@media(max-width:480px){
  .hero h1{font-size:36px;}
  .why-cards,.why-metrics{grid-template-columns:1fr;}
  .branches-grid,.fleet-grid{grid-template-columns:1fr;}
  .wa-bubble{display:none;}
}
</style>

<div id="content" class="site-content">

  <!-- ══════════════════════════════════════════
     SECCIÓN 1 — HERO
══════════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-line"></div>
    <div class="hero-content">
      <div class="eyebrow">Empresa de Transporte de Carga Masiva — Colombia</div>
      <h1>
        Transporte de Carga
        <em>Masiva Terrestre</em>
        Nacional
      </h1>
      <p class="hero-desc">
        Más de 30 años movilizando carga masiva y semi masiva a lo largo y ancho de Colombia. Seguimiento vehicular
        24/7, flota propia certificada y 8 sucursales en los principales corredores logísticos del país.
      </p>
      <div class="hero-btns">
        <a href="#" class="btn-primary">Solicitar Cotización &nbsp;→</a>
        <a href="#" class="btn-outline">Ver Nuestros Servicios</a>
      </div>
      <div class="hero-stats">
        <div>
          <div class="hero-stat-num">30+</div>
          <div class="hero-stat-label">Años de trayectoria</div>
        </div>
        <div>
          <div class="hero-stat-num">1.000+</div>
          <div class="hero-stat-label">Clientes satisfechos</div>
        </div>
        <div>
          <div class="hero-stat-num">100+</div>
          <div class="hero-stat-label">Vehículos en flota</div>
        </div>
        <div>
          <div class="hero-stat-num">8</div>
          <div class="hero-stat-label">Sucursales nacionales</div>
        </div>
      </div>
    </div>
    <div class="scroll-hint">
      <div class="scroll-mouse">
        <div class="scroll-dot"></div>
      </div>
      <span>Scroll</span>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 2 — TRUST BAR (solo logos clientes)
══════════════════════════════════════════ -->
  <section class="trustbar">
    <div class="trustbar-inner">
      <span class="trustbar-label">Nos confían su carga:</span>
      <div class="trustbar-divider"></div>
      <div class="trustbar-logos">
        <div class="logo-ph" style="width:80px;"></div>
        <div class="logo-ph" style="width:90px;"></div>
        <div class="logo-ph" style="width:70px;"></div>
        <div class="logo-ph" style="width:85px;"></div>
        <div class="logo-ph" style="width:75px;"></div>
        <div class="logo-ph" style="width:88px;"></div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 3 — SERVICIOS (fotos reales)
══════════════════════════════════════════ -->
  <section class="services">
    <div class="services-inner">
      <div class="sec-header">
        <div class="sec-header-left">
          <div class="eyebrow">Portafolio de servicios</div>
          <h2>Soluciones de <span>Transporte Terrestre</span> de Carga Masiva</h2>
          <p>Especializados en carga masiva y semi masiva. Flota propia certificada, seguimiento 24/7 y cobertura total
            en Colombia.</p>
        </div>
        <a href="#" class="btn-primary" style="white-space:nowrap;align-self:flex-end;">Ver todos los servicios →</a>
      </div>
      <div class="services-grid">

        <div class="svc-card">
          <div class="svc-img">
            <img
              src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg"
              alt="Transporte de carga nacional Colombia - Transportadora Estrella" loading="lazy">
            <div class="svc-img-overlay"></div>
            <div class="svc-tag">Nacional</div>
          </div>
          <div class="svc-body">
            <h3>Transporte de Carga Nacional</h3>
            <p>Movilizamos carga masiva y semi masiva entre las principales ciudades de Colombia con seguimiento
              vehicular 24/7 y estándares de seguridad certificados.</p>
            <ul class="svc-features">
              <li><span class="svc-feat-dot"></span>Carga masiva y semi masiva</li>
              <li><span class="svc-feat-dot"></span>Monitoreo GPS 24/7</li>
              <li><span class="svc-feat-dot"></span>Cobertura nacional completa</li>
            </ul>
            <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="svc-link">Ver servicio →</a>
          </div>
        </div>

        <div class="svc-card">
          <div class="svc-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp"
              alt="Transporte urbano de mercancías Colombia - Transportadora Estrella" loading="lazy">
            <div class="svc-img-overlay"></div>
            <div class="svc-tag">Urbano</div>
          </div>
          <div class="svc-body">
            <h3>Transporte Urbano de Mercancías</h3>
            <p>Distribución de mercancías de acuerdo al modelo logístico de cada cliente, con operación coordinada y
              segura en las principales ciudades del país.</p>
            <ul class="svc-features">
              <li><span class="svc-feat-dot"></span>Adaptado al modelo del cliente</li>
              <li><span class="svc-feat-dot"></span>Operación coordinada y segura</li>
              <li><span class="svc-feat-dot"></span>Distribución urbana eficiente</li>
            </ul>
            <a href="/servicios/transporte-urbano-de-mercancias/" class="svc-link">Ver servicio →</a>
          </div>
        </div>

        <div class="svc-card">
          <div class="svc-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
              alt="Transporte de mercancías peligrosas Colombia - Transportadora Estrella" loading="lazy">
            <div class="svc-img-overlay"></div>
            <div class="svc-tag">Especializado</div>
          </div>
          <div class="svc-body">
            <h3>Transporte de Mercancías Peligrosas</h3>
            <p>Gestión especializada de materiales peligrosos bajo normatividad colombiana vigente, con protocolos de
              seguridad certificados y buenas prácticas ambientales.</p>
            <ul class="svc-features">
              <li><span class="svc-feat-dot"></span>Cumplimiento normativo vigente</li>
              <li><span class="svc-feat-dot"></span>Protocolos de seguridad certificados</li>
              <li><span class="svc-feat-dot"></span>Buenas prácticas ambientales</li>
            </ul>
            <a href="/servicios/transporte-de-carga-peligrosa/" class="svc-link">Ver servicio →</a>
          </div>
        </div>

        <div class="svc-card">
          <div class="svc-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
              alt="Transporte internacional ITR importación exportación Colombia - Transportadora Estrella"
              loading="lazy">
            <div class="svc-img-overlay"></div>
            <div class="svc-tag">Internacional</div>
          </div>
          <div class="svc-body">
            <h3>ITR — Importación y Exportación</h3>
            <p>Movilizamos carga desde y hacia los puertos de Colombia con aliados estratégicos especializados en
              operaciones de comercio exterior.</p>
            <ul class="svc-features">
              <li><span class="svc-feat-dot"></span>Puertos Buenaventura y Cartagena</li>
              <li><span class="svc-feat-dot"></span>Aliados estratégicos certificados</li>
              <li><span class="svc-feat-dot"></span>Trámites aduaneros coordinados</li>
            </ul>
            <a href="/servicios/itr/" class="svc-link">Ver servicio →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 4 — FLOTA (fotos reales)
══════════════════════════════════════════ -->
  <section class="fleet">
    <div class="fleet-inner">
      <div class="fleet-header">
        <div class="eyebrow" style="justify-content:center;">Flota propia certificada</div>
        <h2>El Vehículo Adecuado para <span>Cada Tipo de Carga</span></h2>
        <p>Contamos con flota diversificada para adaptarnos a las necesidades específicas de cada operación. Todos los
          vehículos con GPS y mantenimiento preventivo riguroso.</p>
      </div>
      <div class="fleet-grid">
        <div class="fleet-item">
          <div class="fleet-item-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp"
              alt="Turbos transporte urbano carga" style="width:100%;height:100%;object-fit:cover;">
          </div>
          <div class="fleet-item-body">
            <div class="fleet-name">Turbos</div>
            <div class="fleet-desc">Distribución urbana y carga ligera</div>
          </div>
        </div>
        <div class="fleet-item">
          <div class="fleet-item-img">
            <img
              src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg"
              alt="Camiones transporte carga nacional" style="width:100%;height:100%;object-fit:cover;">
          </div>
          <div class="fleet-item-body">
            <div class="fleet-name">Camiones</div>
            <div class="fleet-desc">Carga semi masiva con carrocería</div>
          </div>
        </div>
        <div class="fleet-item">
          <div class="fleet-item-img"
            style="background:#0A3A6E;display:flex;align-items:center;justify-content:center;">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.2)"
              stroke-width="1.2" stroke-linecap="round">
              <rect x="1" y="3" width="15" height="13" rx="1" />
              <path d="M16 8h4l3 5v4h-7V8z" />
              <circle cx="5.5" cy="18.5" r="2.5" />
              <circle cx="18.5" cy="18.5" r="2.5" />
            </svg>
          </div>
          <div class="fleet-item-body">
            <div class="fleet-name">Volcos</div>
            <div class="fleet-desc">Autodescargables para granel</div>
          </div>
        </div>
        <div class="fleet-item">
          <div class="fleet-item-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
              alt="Patinetas transporte carga masiva" style="width:100%;height:100%;object-fit:cover;">
          </div>
          <div class="fleet-item-body">
            <div class="fleet-name">Patinetas</div>
            <div class="fleet-desc">Carga masiva de gran volumen</div>
          </div>
        </div>
        <div class="fleet-item">
          <div class="fleet-item-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
              alt="Tractocamiones transporte nacional" style="width:100%;height:100%;object-fit:cover;">
          </div>
          <div class="fleet-item-body">
            <div class="fleet-name">Tractocamiones</div>
            <div class="fleet-desc">Máxima capacidad · ITR internacional</div>
          </div>
        </div>
      </div>
      <p class="fleet-note">También operamos con contenedores y carrocerías especializadas · Seguimiento GPS 24/7 en
        toda la flota</p>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 5 — POR QUÉ ELEGIRNOS
══════════════════════════════════════════ -->
  <section class="why">
    <div class="why-inner">
      <div class="why-header">
        <div class="eyebrow" style="justify-content:center;">Por qué elegirnos</div>
        <h2>El Aliado Logístico que <span>Impulsa su Operación</span></h2>
        <p>Personal competente, proveedores confiables y mejoramiento continuo de procesos. Así operamos hace más de 30
          años en Colombia.</p>
      </div>
      <div class="why-cards">
        <div class="why-card">
          <div class="why-num">01</div>
          <div class="why-icon">
            <!-- Shield check icon -->
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              <polyline points="9 12 11 14 15 10" />
            </svg>
          </div>
          <h4>Operación Certificada</h4>
          <p>Certificados ISO 9001, BASC y vigilados por SuperTransporte. Tu carga opera bajo los más altos estándares
            nacionales e internacionales de seguridad y calidad.</p>
        </div>
        <div class="why-card">
          <div class="why-num">02</div>
          <div class="why-icon">
            <!-- Monitor / tracking icon -->
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg>
          </div>
          <h4>Seguimiento 24/7</h4>
          <p>Sistema de monitoreo vehicular en tiempo real que le permite verificar en todo momento la ubicación y el
            estado de su mercancía en tránsito.</p>
        </div>
        <div class="why-card">
          <div class="why-num">04</div>
          <div class="why-icon">
            <!-- Users icon -->
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <h4>Personal Competente</h4>
          <p>Equipo profesional capacitado y proveedores confiables alineados con el mejoramiento continuo de cada
            proceso logístico para la satisfacción de nuestros clientes.</p>
        </div>
        <div class="why-card">
          <div class="why-num">05</div>
          <div class="why-icon">
            <!-- Map-pin icon -->
            <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <h4>8 Sucursales Estratégicas</h4>
          <p>Presencia propia en los principales corredores logísticos del país: 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-medellin/')); ?>">Medellín</a>, 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-bogota/')); ?>">Bogotá</a>, 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-cali/')); ?>">Cali</a>, 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-barranquilla/')); ?>">Barranquilla</a>, 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-cartagena/')); ?>">Cartagena</a>, 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-buenaventura/')); ?>">Buenaventura</a>, 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-buga/')); ?>">Buga</a> y 
            <a href="<?php echo esc_url(home_url('/sucursales/sucursal-manizales/')); ?>">Manizales</a>.</p>
        </div>
      </div>
      <div class="why-metrics">
        <div class="why-metric">
          <div class="why-metric-num">30+</div>
          <div class="why-metric-label">Años de trayectoria<br>en el sector</div>
        </div>
        <div class="why-metric">
          <div class="why-metric-num">1.000+</div>
          <div class="why-metric-label">Empresas confían<br>su carga con nosotros</div>
        </div>
        <div class="why-metric">
          <div class="why-metric-num">24/7</div>
          <div class="why-metric-label">Monitoreo vehicular<br>permanente</div>
        </div>
        <div class="why-metric">
          <div class="why-metric-num">8</div>
          <div class="why-metric-label">Sucursales en corredores<br>logísticos estratégicos</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 6 — CERTIFICACIONES Y AGREMIACIONES
══════════════════════════════════════════ -->
  <section class="certs">
    <div class="certs-inner">
      <div class="certs-header">
        <div class="eyebrow" style="justify-content:center;">Respaldo y credenciales</div>
        <h2>Certificados y <span>Reconocidos</span> en el Sector</h2>
        <p>Operamos bajo estándares internacionales de calidad y seguridad, respaldados por los organismos más exigentes
          del sector logístico colombiano.</p>
      </div>
      <div class="certs-grid">
        <div class="cert-card">
          <div class="cert-icon-box">
            <!-- Award icon -->
            <svg viewBox="0 0 24 24" stroke="#0F5BA7">
              <circle cx="12" cy="8" r="6" />
              <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
            </svg>
          </div>
          <h3>ISO 9001 — ICONTEC</h3>
          <p>Certificado SC6003-1. Sistema de gestión de calidad que garantiza el mejoramiento continuo de nuestros
            procesos y la satisfacción de cada cliente.</p>
        </div>
        <div class="cert-card">
          <div class="cert-icon-box">
            <!-- Lock icon -->
            <svg viewBox="0 0 24 24" stroke="#0F5BA7">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
              <path d="M7 11V7a5 5 0 0 1 10 0v4" />
            </svg>
          </div>
          <h3>Certificación BASC</h3>
          <p>Business Alliance for Secure Commerce. Garantiza operaciones de comercio exterior seguras, libres de
            actividades ilícitas bajo estándares internacionales.</p>
        </div>
        <div class="cert-card">
          <div class="cert-icon-box">
            <!-- Check badge icon -->
            <svg viewBox="0 0 24 24" stroke="#0F5BA7">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              <polyline points="9 12 11 14 15 10" />
            </svg>
          </div>
          <h3>Vigilado SuperTransporte</h3>
          <p>Empresa habilitada e inspeccionada por la Superintendencia de Transporte de Colombia. Operación 100% legal,
            transparente y regulada.</p>
        </div>
      </div>
      <p class="agrem-label">Agremiados en:</p>
      <div class="agrem-logos">
        <div class="agrem-logo">Colfecar</div>
        <div class="agrem-logo">Defencarga</div>
        <div class="agrem-logo">Agrem</div>
        <div class="agrem-logo">ATC Freight Carriers</div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 7 — SUCURSALES
══════════════════════════════════════════ -->
  <section class="branches">
    <div class="branches-inner">
      <div class="branches-top">
        <div>
          <div class="eyebrow">Presencia nacional</div>
          <h2>8 Sucursales en los Principales <span>Corredores Logísticos</span></h2>
        </div>
        <div>
          <p>Oficinas propias en los centros logísticos más estratégicos de Colombia para reducir tiempos de tránsito y
            brindar atención local especializada en cada operación de carga masiva.</p>
          <a href="/sucursales/" class="btn-primary" style="display:inline-flex;margin-top:22px;">Ver todas las
            sucursales →</a>
        </div>
      </div>
      <div class="branches-grid">
        <a href="/sucursales/sucursal-medellin/" class="branch-card main" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg></div>
          <div class="branch-name">Medellín</div>
          <div class="branch-addr">Calle 64 #56-60, La Candelaria</div>
          <div class="branch-phone">PBX: (604) 527 3300</div>
          <div class="branch-main-tag">★ Sede Principal</div>
        </a>
        <a href="/sucursales/sucursal-bogota/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Bogotá</div>
          <div class="branch-addr">Av. Troncal de Occidente No. 18-76 Of. 301 Torre A</div>
          <div class="branch-phone">312 826 5078</div>
        </a>
        <a href="/sucursales/sucursal-barranquilla/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Barranquilla</div>
          <div class="branch-addr">Cra. 28 #38-345 Av. Circunvalar, Eds. El Descanso</div>
          <div class="branch-phone">310 442 7076</div>
        </a>
        <a href="/sucursales/sucursal-buenaventura/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Buenaventura</div>
          <div class="branch-addr">Calle 7B N.° 4–52 Piso 2</div>
          <div class="branch-phone">313 659 7359</div>
        </a>
        <a href="/sucursales/sucursal-cali/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Cali</div>
          <div class="branch-addr">Bloque A3 Oficina 104, Cencar 1 piso</div>
          <div class="branch-phone">310 369 5787</div>
        </a>
        <a href="/sucursales/sucursal-cartagena/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Cartagena</div>
          <div class="branch-addr">Diagonal 21 N.° 45A–11, Avenida El Bosque</div>
          <div class="branch-phone">314 772 8740</div>
        </a>
        <a href="/sucursales/sucursal-buga/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Buga</div>
          <div class="branch-addr">Cra. 12A N.° 6Sur–94</div>
          <div class="branch-phone">313 655 3232</div>
        </a>
        <a href="/sucursales/sucursal-manizales/" class="branch-card" style="text-decoration:none; color:inherit;">
          <div class="branch-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div class="branch-name">Manizales</div>
          <div class="branch-addr">Calle 110 N.° 34A–75</div>
          <div class="branch-phone">310 369 5787</div>
        </a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 8 — TESTIMONIOS
══════════════════════════════════════════ -->
  <section class="testi">
    <div class="testi-inner">
      <div class="testi-header">
        <div class="eyebrow" style="justify-content:center;">Clientes que confían en nosotros</div>
        <h2>Lo que dicen <span>Nuestros Clientes</span></h2>
        <p>Empresas líderes en sus sectores optimizan su cadena logística con Transportadora Estrella.</p>
      </div>
      <div class="testi-grid">
        <div class="testi-card">
          <div class="testi-stars">
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
          </div>
          <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="var(--ts-gold)" stroke="none">
              <path
                d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z" />
              <path
                d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z" />
            </svg></div>
          <p class="testi-text">Son nuestro mejor aliado logístico. Con excelencia en cada detalle nos brindan la
            tranquilidad que necesitamos para mover nuestra carga a nivel nacional con total confianza.</p>
          <div class="testi-author">
            <div class="testi-av">SL</div>
            <div>
              <div class="testi-name">Sandra López L.</div>
              <div class="testi-role">Auxiliar Logístico Administrativo — Abracol</div>
            </div>
          </div>
        </div>
        <div class="testi-card">
          <div class="testi-stars">
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
          </div>
          <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="var(--ts-gold)" stroke="none">
              <path
                d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z" />
              <path
                d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z" />
            </svg></div>
          <p class="testi-text">El seguimiento en tiempo real y la puntualidad en las entregas son su mayor diferencial.
            Llevamos años trabajando con Transportadora Estrella y su servicio nunca ha fallado.</p>
          <div class="testi-author">
            <div class="testi-av">EA</div>
            <div>
              <div class="testi-name">Erika Arbelaez G.</div>
              <div class="testi-role">Asesora Comercial — SLOG</div>
            </div>
          </div>
        </div>
        <div class="testi-card">
          <div class="testi-stars">
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
            <svg viewBox="0 0 24 24">
              <polygon
                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
          </div>
          <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="var(--ts-gold)" stroke="none">
              <path
                d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z" />
              <path
                d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z" />
            </svg></div>
          <p class="testi-text">Transportadora Estrella da estructura a quienes construyen el país. Un socio logístico
            de primer nivel con flota confiable y cobertura real en todo Colombia.</p>
          <div class="testi-author">
            <div class="testi-av">RN</div>
            <div>
              <div class="testi-name">Robert Nieto</div>
              <div class="testi-role">Coordinador de Logística — Victoria Steel</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECCIÓN 9 — CTA FINAL + FORMULARIO FORMINATOR
══════════════════════════════════════════ -->
  <section class="cta">
    <div class="cta-inner">
      <div class="cta-text">
        <div class="eyebrow">Hablemos hoy</div>
        <h2>Su Aliado en <span>Transporte de Carga Masiva</span> en Colombia</h2>
        <p>Estamos listos para gestionar sus operaciones de carga masiva y semi masiva en todo el territorio nacional.
          Cuéntenos su necesidad y diseñamos la solución logística ideal para su empresa.</p>
        <div class="cta-contacts">
          <div class="cta-contact">
            <div class="cta-c-icon">
              <svg viewBox="0 0 24 24">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.03z" />
              </svg>
            </div>
            <div>
              <div class="cta-c-label">Línea Nacional</div>
              <div class="cta-c-val">+57 310 4244591</div>
            </div>
          </div>
          <div class="cta-contact">
            <div class="cta-c-icon">
              <svg viewBox="0 0 24 24">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
            </div>
            <div>
              <div class="cta-c-label">Correo Electrónico</div>
              <div class="cta-c-val"><a href="mailto:servicioalcliente@transestrella.com"
                  style="color:inherit;text-decoration:none;">servicioalcliente@transestrella.com</a></div>
            </div>
          </div>
          <div class="cta-contact">
            <div class="cta-c-icon">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
            <div>
              <div class="cta-c-label">Sede Principal — Medellín</div>
              <div class="cta-c-val">Calle 64 #56-60, La Candelaria</div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-box">
        <h3>Cotizar Carga Masiva</h3>
        <p class="form-box-sub">Complete el formulario y le respondemos en menos de 24 horas hábiles.</p>
        <div class="form-notice">
          <svg class="form-notice-icon" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="12" y1="8" x2="12" y2="12" />
            <line x1="12" y1="16" x2="12.01" y2="16" />
          </svg>
          <div>
            <div class="form-notice-title">Servicio de Carga Masiva y Semi Masiva</div>
            <div class="form-notice-text">Atendemos operaciones empresariales de alto volumen: turbos, camiones,
              patinetas y tractocamiones. No gestionamos paqueteo ni envíos individuales.</div>
          </div>
        </div>
        <!-- Forminator form placeholder -->
        <div class="forminator-placeholder">
          <svg viewBox="0 0 24 24">
            <rect x="9" y="9" width="13" height="13" rx="2" ry="2" />
            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
          </svg>
          <p>Formulario Forminator</p>
          <span>Aquí se inserta el shortcode del formulario configurado en WordPress · [forminator_form id="XX"]</span>
        </div>
        <a href="https://wa.me/573104244591?text=Hola%2C%20necesito%20cotizar%20transporte%20de%20carga%20masiva"
          target="_blank" class="form-wa">
          <svg viewBox="0 0 24 24">
            <path
              d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
            <path
              d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
          </svg>
          <span class="form-wa-text">¿Necesita respuesta inmediata? Escríbanos por WhatsApp</span>
        </a>
      </div>
    </div>
  </section>

<?php
get_footer();
