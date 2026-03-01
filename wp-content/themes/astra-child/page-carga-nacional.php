<?php
/**
 * Template Name: Carga Nacional
 */

get_header();
?>


<style>
/* ── INTRO 2-COL ── */
.intro{padding:88px 40px;background:#FFFFFF;}
.intro-inner{max-width:1240px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start;}
.intro-text .eyebrow{margin-bottom:16px;}
.intro-text h2{font-family:var(--font-display);font-size:clamp(28px,3.2vw,42px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:18px;}
.intro-text h2 span{color:var(--ts-gold);}
.intro-text p{font-size:15px;color:#333333;line-height:1.8;margin-bottom:14px;}
.intro-text p:last-child{margin-bottom:0;}
.intro-visual{display:flex;flex-direction:column;gap:16px;}
.intro-img{border-radius:12px;overflow:hidden;border:1px solid var(--ts-gray-line);}
.intro-img img{width:100%;display:block;height:260px;object-fit:cover;}
.intro-quote{background:var(--ts-blue-deep);border-radius:12px;padding:28px 28px 28px 32px;border-left:4px solid var(--ts-gold);}
.intro-quote p{font-family:var(--font-display);font-size:18px;font-weight:600;color:rgba(255,255,255,.82);line-height:1.5;font-style:italic;}
.intro-quote p span{color:var(--ts-gold);}
.intro-quote cite{display:block;font-size:12px;color:rgba(255,255,255,.38);margin-top:12px;font-style:normal;text-transform:uppercase;letter-spacing:.08em;}

/* ── CARACTERÍSTICAS ── */
.features{padding:88px 40px;background:var(--ts-gray-bg);}
.features-inner{max-width:1240px;margin:0 auto;}
.features-header{text-align:center;max-width:560px;margin:0 auto 52px;}
.features-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,46px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;margin-top:12px;}
.features-header h2 span{color:var(--ts-gold);}
.features-header p{font-size:16px;color:#333333;}
.features-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;}
.feat-card{background:#FFFFFF;border-radius:12px;padding:28px 22px;border:1px solid var(--ts-gray-line);transition:border-color .2s,box-shadow .2s;}
.feat-card:hover{border-color:var(--ts-gold);box-shadow:0 8px 24px rgba(245,166,35,.08);}
.feat-icon{width:50px;height:50px;background:rgba(245,166,35,.1);border-radius:9px;display:flex;align-items:center;justify-content:center;margin-bottom:16px;border:1px solid rgba(245,166,35,.18);}
.feat-icon svg{width:24px;height:24px;stroke:var(--ts-gold);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
.feat-card h4{font-family:var(--font-display);font-size:18px;font-weight:800;text-transform:uppercase;color:#333333;margin-bottom:8px;line-height:1.1;}
.feat-card p{font-size:13px;color:#333333;line-height:1.65;}
.feat-card ul{list-style:none;margin-top:10px;display:flex;flex-direction:column;gap:5px;}
.feat-card ul li{font-size:12px;color:var(--ts-gray);display:flex;align-items:center;gap:6px;}
.feat-card ul li::before{content:'';width:4px;height:4px;background:var(--ts-gold);border-radius:50%;flex-shrink:0;}

/* ── TIPOS DE CARGA ── */
.cargo-types{padding:88px 40px;background:#FFFFFF;}
.cargo-types-inner{max-width:1240px;margin:0 auto;}
.cargo-types-header{display:grid;grid-template-columns:1fr auto;align-items:end;gap:20px;margin-bottom:48px;}
.cargo-types-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:10px;margin-top:12px;}
.cargo-types-header h2 span{color:var(--ts-gold);}
.cargo-types-header p{font-size:16px;color:#333333;max-width:400px;}
.cargo-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;border-radius:14px;overflow:hidden;border:1px solid var(--ts-gray-line);margin-bottom:2px;}
.cargo-card{background:var(--ts-gray-bg);padding:28px 24px;transition:background .2s;}
.cargo-card:hover{background:#EEF3FA;}
.cargo-card-icon{width:44px;height:44px;background:#FFFFFF;border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:14px;border:1px solid var(--ts-gray-line);}
.cargo-card-icon svg{width:21px;height:21px;stroke:var(--ts-blue);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
.cargo-card h4{font-family:var(--font-display);font-size:18px;font-weight:800;text-transform:uppercase;color:#333333;margin-bottom:8px;line-height:1.1;}
.cargo-card p{font-size:13px;color:#333333;line-height:1.6;}
.cargo-card .cargo-examples{margin-top:10px;font-size:12px;color:var(--ts-gray);}

/* ── TECNOLOGÍA ── */
.tech{padding:88px 40px;background:var(--ts-blue-deep);position:relative;overflow:hidden;}
.tech::before{content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.02) 1px,transparent 1px);background-size:52px 52px;}
.tech-inner{max-width:1240px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;position:relative;z-index:2;}
.tech-text .eyebrow{margin-bottom:16px;}
.tech-text h2{font-family:var(--font-display);font-size:clamp(28px,3.2vw,44px);font-weight:800;text-transform:uppercase;color:#FFFFFF;line-height:1.0;margin-bottom:18px;}
.tech-text h2 span{color:var(--ts-gold);}
.tech-text p{font-size:15px;color:rgba(255,255,255,.6);line-height:1.8;margin-bottom:28px;}
.tech-list{display:flex;flex-direction:column;gap:16px;}
.tech-item{display:flex;align-items:flex-start;gap:16px;}
.tech-item-icon{width:44px;height:44px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.tech-item-icon svg{width:20px;height:20px;stroke:var(--ts-gold);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
.tech-item-body h5{font-family:var(--font-display);font-size:16px;font-weight:800;text-transform:uppercase;color:#FFFFFF;margin-bottom:4px;}
.tech-item-body p{font-size:13px;color:rgba(255,255,255,.52);line-height:1.6;}
.tech-metrics{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.tech-metric{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:12px;padding:28px 22px;text-align:center;}
.tech-metric-num{font-family:var(--font-display);font-size:44px;font-weight:800;color:var(--ts-gold);line-height:1;margin-bottom:6px;}
.tech-metric-label{font-size:13px;color:rgba(255,255,255,.45);line-height:1.4;}

/* ── SOLUCIONES ── */
.solutions{padding:88px 40px;background:var(--ts-gray-bg);}
.solutions-inner{max-width:1240px;margin:0 auto;}
.solutions-header{text-align:center;max-width:540px;margin:0 auto 52px;}
.solutions-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;margin-top:12px;}
.solutions-header h2 span{color:var(--ts-gold);}
.solutions-header p{font-size:16px;color:#333333;}
.solutions-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:20px;}
.sol-card{background:#FFFFFF;border-radius:12px;padding:28px 24px;border:1px solid var(--ts-gray-line);display:flex;gap:18px;}
.sol-icon{width:48px;height:48px;background:#EEF3FA;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.sol-icon svg{width:22px;height:22px;stroke:var(--ts-blue);fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
.sol-body h4{font-family:var(--font-display);font-size:18px;font-weight:800;text-transform:uppercase;color:#333333;margin-bottom:6px;line-height:1.1;}
.sol-body p{font-size:14px;color:#333333;line-height:1.65;}

/* ── COBERTURAS RUTAS ── */
.coverage{padding:88px 40px;background:#FFFFFF;}
.coverage-inner{max-width:1240px;margin:0 auto;}
.coverage-header{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start;margin-bottom:48px;}
.coverage-header-left h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;margin-top:12px;}
.coverage-header-left h2 span{color:var(--ts-gold);}
.coverage-header-left p{font-size:16px;color:#333333;line-height:1.75;margin-bottom:22px;}
.corridors-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;}
.corridor{background:var(--ts-gray-bg);border-radius:10px;padding:18px 18px;border:1px solid var(--ts-gray-line);display:flex;align-items:center;gap:14px;}
.corridor-dot{width:10px;height:10px;background:var(--ts-gold);border-radius:50%;flex-shrink:0;}
.corridor-name{font-family:var(--font-display);font-size:15px;font-weight:800;color:#333333;text-transform:uppercase;line-height:1.1;}
.corridor-cities{font-size:12px;color:var(--ts-gray);margin-top:2px;}
.coverage-branches{background:var(--ts-blue-deep);border-radius:14px;padding:32px;position:relative;overflow:hidden;}
.coverage-branches::before{content:'';position:absolute;top:-30%;right:-10%;width:60%;height:160%;background:radial-gradient(ellipse,rgba(245,166,35,.06) 0%,transparent 70%);}
.coverage-branches h3{font-family:var(--font-display);font-size:20px;font-weight:800;text-transform:uppercase;color:#FFFFFF;margin-bottom:6px;}
.coverage-branches-sub{font-size:14px;color:rgba(255,255,255,.45);margin-bottom:20px;}
.branch-pills{display:flex;flex-wrap:wrap;gap:8px;}
.branch-pill{display:flex;align-items:center;gap:6px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:6px;padding:7px 12px;}
.branch-pill svg{width:12px;height:12px;stroke:var(--ts-gold);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
.branch-pill span{font-family:var(--font-display);font-size:12px;font-weight:700;text-transform:uppercase;color:rgba(255,255,255,.7);}
.branch-pill.main{border-color:rgba(245,166,35,.35);}
.branch-pill.main span{color:var(--ts-gold);}

/* ── TESTIMONIOS ── */
.testi{padding:88px 40px;background:var(--ts-gray-bg);}
.testi-inner{max-width:1240px;margin:0 auto;}
.testi-header{text-align:center;max-width:480px;margin:0 auto 48px;}
.testi-header h2{font-family:var(--font-display);font-size:clamp(28px,3.5vw,44px);font-weight:800;text-transform:uppercase;color:#333333;line-height:1.0;margin-bottom:12px;margin-top:12px;}
.testi-header h2 span{color:var(--ts-gold);}
.testi-header p{font-size:16px;color:#333333;}
.testi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:22px;}
.testi-card{background:#FFFFFF;border-radius:12px;padding:32px;border:1px solid rgba(0,0,0,.06);position:relative;}
.testi-stars{display:flex;gap:3px;margin-bottom:16px;}
.testi-stars svg{width:14px;height:14px;fill:var(--ts-gold);}
.testi-quote-mark{font-family:Georgia,serif;font-size:72px;line-height:.7;color:rgba(245,166,35,.15);margin-bottom:8px;display:block;}
.testi-text{font-size:16px;color:#333333;line-height:1.78;margin-bottom:24px;font-style:italic;}
.testi-author{display:flex;align-items:center;gap:12px;border-top:1px solid var(--ts-gray-line);padding-top:18px;}
.testi-av{width:44px;height:44px;background:linear-gradient(135deg,var(--ts-blue) 0%,var(--ts-blue-deep) 100%);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-family:var(--font-display);font-size:17px;font-weight:700;flex-shrink:0;}
.testi-name{font-family:var(--font-display);font-size:14px;font-weight:700;color:#333333;text-transform:uppercase;letter-spacing:.02em;}
.testi-role{font-size:12px;color:var(--ts-gray);}

/* ── OTHER SERVICES ── */
.other-services{padding:72px 40px;background:#FFFFFF;border-top:1px solid var(--ts-gray-line);}
.other-services-inner{max-width:1240px;margin:0 auto;}
.other-header{text-align:center;margin-bottom:36px;}
.other-header h3{font-family:var(--font-display);font-size:clamp(22px,2.5vw,32px);font-weight:800;text-transform:uppercase;color:#333333;margin-top:10px;}
.other-header p{font-size:15px;color:var(--ts-gray);margin-top:6px;}
.other-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
.other-card{border:1px solid var(--ts-gray-line);border-radius:10px;overflow:hidden;transition:border-color .2s,box-shadow .2s;text-decoration:none;}
.other-card:hover{border-color:var(--ts-gold);box-shadow:0 6px 20px rgba(245,166,35,.08);}
.other-card-img{height:140px;overflow:hidden;}
.other-card-img img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .3s;}
.other-card:hover .other-card-img img{transform:scale(1.05);}
.other-card-body{padding:16px 18px;}
.other-tag{font-family:var(--font-display);font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--ts-gold);margin-bottom:5px;}
.other-card-body h4{font-family:var(--font-display);font-size:17px;font-weight:800;text-transform:uppercase;color:#333333;line-height:1.1;margin-bottom:5px;}
.other-card-body p{font-size:13px;color:var(--ts-gray);}
.other-link{display:flex;align-items:center;gap:5px;font-family:var(--font-display);font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--ts-blue);margin-top:10px;}

/* ── RESPONSIVE ── */
@media(max-width:1024px){
  .intro-inner,.tech-inner,.coverage-header{grid-template-columns:1fr;gap:44px;}
  .features-grid{grid-template-columns:repeat(2,1fr);}
  .corridors-grid{grid-template-columns:1fr;}
}
@media(max-width:768px){
  .intro,.features,.cargo-types,.tech,.solutions,.coverage,.testi,.other-services{padding:60px 20px;}
  .features-grid{grid-template-columns:1fr 1fr;}
  .cargo-grid{grid-template-columns:1fr;}
  .solutions-grid{grid-template-columns:1fr;}
  .testi-grid{grid-template-columns:1fr;}
  .other-grid{grid-template-columns:1fr 1fr;}
  .coverage-header{grid-template-columns:1fr;}
}
@media(max-width:480px){
  .features-grid,.other-grid{grid-template-columns:1fr;}
}
</style>
<div class="page-carga-nacional-content">
  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-line"></div>
    <div class="hero-content">
      <div class="breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
        <span class="breadcrumb-sep">›</span>
        <a href="<?php echo esc_url(home_url('/servicios/')); ?>">Servicios</a>
        <span class="breadcrumb-sep">›</span>
        <span>Carga Nacional</span>
      </div>
      <h1>
        Transporte Terrestre de
        <em>Carga Nacional</em>
      </h1>
      <p class="hero-desc">Soluciones logísticas eficientes y seguras para el traslado de carga masiva y semi masiva con
        cobertura en todo el territorio colombiano. Más de 30 años como aliado estratégico de las principales empresas
        del país.</p>
      <div class="hero-btns">
        <a href="#cotizar" class="btn-primary">Solicitar Cotización →</a>
        <a href="#caracteristicas" class="btn-outline-white">Conocer el Servicio</a>
      </div>
      <div class="hero-pills">
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="2" y1="12" x2="22" y2="12" />
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
          </svg>
          <span>Monitoreo GPS 24/7</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg>
          <span>ISO 9001 · BASC Certificados</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <rect x="1" y="3" width="15" height="13" rx="1" />
            <path d="M16 8h4l3 5v4h-7V8z" />
            <circle cx="5.5" cy="18.5" r="2.5" />
            <circle cx="18.5" cy="18.5" r="2.5" />
          </svg>
          <span>Flota Propia Diversificada</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
            <circle cx="12" cy="10" r="3" />
          </svg>
          <span>32 Departamentos Cubiertos</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
          </svg>
          <span>98% Entregas a Tiempo</span>
        </div>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section class="intro">
    <div class="intro-inner">
      <div class="intro-text">
        <div class="eyebrow">El servicio</div>
        <h2>El Aliado Logístico que <span>Colombia Necesita</span></h2>
        <p>El transporte terrestre de carga nacional es esencial para la economía colombiana. Facilita la distribución
          de mercancías entre regiones, apoya el comercio interno y conecta la producción industrial con los mercados de
          consumo en todo el país.</p>
        <p>Transportadora Estrella, con más de 30 años de experiencia, se destaca en este ámbito como aliado estratégico
          de empresas que manejan carga masiva, semi masiva y maquinaria pesada. Conocemos cada corredor logístico, cada
          ruta crítica y cada particularidad operativa del territorio colombiano.</p>
        <p>Nuestro servicio conecta eficientemente todas las regiones con un parque automotor propio, personal altamente
          capacitado y sistemas de seguimiento vehicular que operan las 24 horas, los 7 días de la semana.</p>
      </div>
      <div class="intro-visual">
        <div class="intro-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-carga-volco.jpeg"
            alt="Flota Transportadora Estrella — camiones y volcos carga masiva nacional" loading="lazy">
        </div>
        <div class="intro-quote">
          <p>"Si la materia prima no para, es porque la <span>Transportadora Estrella S.A.S.</span> nunca se detiene.
            Así se fabrica el éxito."</p>
          <cite>Jaime Andrés Giraldo — Gerente, ICO FORMAS</cite>
        </div>
      </div>
    </div>
  </section>

  <!-- CARACTERÍSTICAS -->
  <section class="features" id="caracteristicas">
    <div class="features-inner">
      <div class="features-header">
        <div class="eyebrow center">Lo que nos distingue</div>
        <h2>Características del <span>Servicio Nacional</span></h2>
        <p>Cuatro pilares que garantizan la eficiencia y confiabilidad de cada operación de transporte de carga masiva
          en Colombia.</p>
      </div>
      <div class="features-grid">
        <div class="feat-card">
          <div class="feat-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5z" />
              <path d="M2 17l10 5 10-5" />
              <path d="M2 12l10 5 10-5" />
            </svg>
          </div>
          <h4>Flexibilidad y Accesibilidad</h4>
          <p>Ajustes en rutas y horarios de acuerdo a las exigencias específicas de cada cliente, con capacidad de
            respuesta ante cambios imprevistos.</p>
          <ul>
            <li>Rutas personalizadas por cliente</li>
            <li>Reprogramación ágil</li>
            <li>Horarios flexibles de recolección</li>
          </ul>
        </div>
        <div class="feat-card">
          <div class="feat-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              <polyline points="9 12 11 14 15 10" />
            </svg>
          </div>
          <h4>Seguridad y Trazabilidad</h4>
          <p>Medidas integrales para proteger su mercancía en todo momento, con monitoreo en tiempo real y respuesta
            rápida ante cualquier eventualidad.</p>
          <ul>
            <li>GPS en tiempo real</li>
            <li>Cámaras de seguridad en flota</li>
            <li>Alertas automáticas</li>
          </ul>
        </div>
        <div class="feat-card">
          <div class="feat-icon">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
              <line x1="8" y1="21" x2="16" y2="21" />
              <line x1="12" y1="17" x2="12" y2="21" />
            </svg>
          </div>
          <h4>Tecnología e Innovación</h4>
          <p>Herramientas digitales que optimizan el proceso logístico: software de gestión de flota, análisis de datos
            y aplicaciones de seguimiento en tiempo real.</p>
          <ul>
            <li>Software de gestión de flota</li>
            <li>Big data para optimización de rutas</li>
            <li>Portal de seguimiento para clientes</li>
          </ul>
        </div>
        <div class="feat-card">
          <div class="feat-icon">
            <svg viewBox="0 0 24 24">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
              <line x1="4" y1="22" x2="4" y2="15" />
            </svg>
          </div>
          <h4>Sostenibilidad Ambiental</h4>
          <p>Alternativas responsables para reducir el impacto ambiental de cada operación, con optimización de rutas
            para maximizar la eficiencia en consumo.</p>
          <ul>
            <li>Optimización de rutas eficientes</li>
            <li>Técnicas de manejo sostenible</li>
            <li>Reducción de emisiones</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- TIPOS DE CARGA -->
  <section class="cargo-types">
    <div class="cargo-types-inner">
      <div class="cargo-types-header">
        <div>
          <div class="eyebrow">Qué transportamos</div>
          <h2>Tipos de Carga <span>que Atendemos</span></h2>
        </div>
        <a href="#cotizar" class="btn-outline-blue">Cotizar mi Carga →</a>
      </div>
      <div class="cargo-grid">
        <div class="cargo-card">
          <div class="cargo-card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="7" width="20" height="14" rx="2" />
              <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
              <line x1="12" y1="12" x2="12" y2="16" />
              <line x1="10" y1="14" x2="14" y2="14" />
            </svg>
          </div>
          <h4>Carga Masiva</h4>
          <p>Grandes volúmenes de materias primas, graneles sólidos y productos industriales que requieren
            tractocamiones, patinetas o volcos.</p>
          <div class="cargo-examples">Ej: minería, agroindustria, materiales de construcción, industria química</div>
        </div>
        <div class="cargo-card">
          <div class="cargo-card-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
            </svg>
          </div>
          <h4>Carga Semi Masiva</h4>
          <p>Mercancías de mediano a gran volumen que se movilizan en camiones con carrocería, con seguimiento
            permanente y entrega a tiempo.</p>
          <div class="cargo-examples">Ej: productos manufacturados, consumo masivo, ferretería, alimentos no perecederos
          </div>
        </div>
        <div class="cargo-card">
          <div class="cargo-card-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
            </svg>
          </div>
          <h4>Carga Seca General</h4>
          <p>Productos empacados, paletizados o en contenedores que no requieren condiciones especiales de temperatura o
            manejo especializado.</p>
          <div class="cargo-examples">Ej: textiles, papelería, plásticos, metalmecánica, electrodomésticos</div>
        </div>
        <div class="cargo-card">
          <div class="cargo-card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
              <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
              <line x1="6" y1="1" x2="6" y2="4" />
              <line x1="10" y1="1" x2="10" y2="4" />
              <line x1="14" y1="1" x2="14" y2="4" />
            </svg>
          </div>
          <h4>Maquinaria y Equipos</h4>
          <p>Transporte de equipos industriales, maquinaria pesada y carga sobredimensionada con planificación de ruta
            especializada y permisos de tránsito.</p>
          <div class="cargo-examples">Ej: maquinaria agrícola, industrial, equipo de obras, transformadores</div>
        </div>
        <div class="cargo-card">
          <div class="cargo-card-icon">
            <svg viewBox="0 0 24 24">
              <ellipse cx="12" cy="5" rx="9" ry="3" />
              <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
              <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
            </svg>
          </div>
          <h4>Graneles Líquidos</h4>
          <p>Líquidos industriales y alimentarios transportados en cisternas propias con protocolos de limpieza,
            certificación y cumplimiento normativo.</p>
          <div class="cargo-examples">Ej: aceites vegetales, combustibles legales, productos químicos no peligrosos,
            lácteos</div>
        </div>
        <div class="cargo-card">
          <div class="cargo-card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
          </div>
          <h4>Carga Consolidada</h4>
          <p>Optimización de costos al consolidar múltiples envíos empresariales en una misma unidad, con entrega
            programada y trazabilidad individual.</p>
          <div class="cargo-examples">Ej: operaciones con múltiples puntos de entrega o recogida en una misma ruta</div>
        </div>
      </div>
    </div>
  </section>

  <!-- TECNOLOGÍA -->
  <section class="tech">
    <div class="tech-inner">
      <div class="tech-text">
        <div class="eyebrow">Innovación operativa</div>
        <h2>Tecnología al Servicio de <span>su Carga</span></h2>
        <p>La tecnología y la innovación son claves en cada operación de transporte nacional. Implementamos herramientas
          digitales y sistemas de control que optimizan el proceso logístico, mejoran la eficiencia y brindan total
          visibilidad a nuestros clientes.</p>
        <div class="tech-list">
          <div class="tech-item">
            <div class="tech-item-icon">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <line x1="2" y1="12" x2="22" y2="12" />
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
              </svg>
            </div>
            <div class="tech-item-body">
              <h5>Localización GPS en Tiempo Real</h5>
              <p>Seguimiento constante de cada vehículo. Su cliente puede verificar la ubicación exacta de su carga en
                cualquier momento del trayecto.</p>
            </div>
          </div>
          <div class="tech-item">
            <div class="tech-item-icon">
              <svg viewBox="0 0 24 24">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
              </svg>
            </div>
            <div class="tech-item-body">
              <h5>Software de Gestión de Flota</h5>
              <p>Planificación de rutas eficientes, optimización de tiempos y recursos para maximizar la productividad
                de cada operación logística.</p>
            </div>
          </div>
          <div class="tech-item">
            <div class="tech-item-icon">
              <svg viewBox="0 0 24 24">
                <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0" />
              </svg>
            </div>
            <div class="tech-item-body">
              <h5>Alertas Automatizadas</h5>
              <p>Sistema de notificaciones inmediatas ante cualquier eventualidad en tránsito: desvíos, detenciones
                prolongadas o incidentes de seguridad.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tech-metrics">
        <div class="tech-metric">
          <div class="tech-metric-num">30%</div>
          <div class="tech-metric-label">Reducción en tiempos<br>de entrega lograda</div>
        </div>
        <div class="tech-metric">
          <div class="tech-metric-num">25%</div>
          <div class="tech-metric-label">Ahorro en consumo<br>de combustible</div>
        </div>
        <div class="tech-metric">
          <div class="tech-metric-num">40%</div>
          <div class="tech-metric-label">Mejora en precisión<br>de seguimiento</div>
        </div>
        <div class="tech-metric">
          <div class="tech-metric-num">98%</div>
          <div class="tech-metric-label">Satisfacción de<br>clientes encuestados</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SOLUCIONES PERSONALIZADAS -->
  <section class="solutions">
    <div class="solutions-inner">
      <div class="solutions-header">
        <div class="eyebrow center">Atención a la medida</div>
        <h2>Soluciones <span>Personalizadas</span> por Cliente</h2>
        <p>Entendemos que cada negocio tiene necesidades únicas. Adaptamos nuestros servicios a los requerimientos
          específicos de cada operación.</p>
      </div>
      <div class="solutions-grid">
        <div class="sol-card">
          <div class="sol-icon">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <div class="sol-body">
            <h4>Rutas Personalizadas</h4>
            <p>Adaptamos los trayectos según las necesidades operativas del cliente, incluyendo conexiones con puertos,
              zonas francas y centros de distribución en todo el país.</p>
          </div>
        </div>
        <div class="sol-card">
          <div class="sol-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
          </div>
          <div class="sol-body">
            <h4>Horarios Flexibles</h4>
            <p>Flexibilidad en los horarios de recogida y entrega, ajustándonos a las necesidades operativas del negocio
              del cliente con despacho de carga programado.</p>
          </div>
        </div>
        <div class="sol-card">
          <div class="sol-icon">
            <svg viewBox="0 0 24 24">
              <rect x="1" y="3" width="15" height="13" rx="1" />
              <path d="M16 8h4l3 5v4h-7V8z" />
              <circle cx="5.5" cy="18.5" r="2.5" />
              <circle cx="18.5" cy="18.5" r="2.5" />
            </svg>
          </div>
          <div class="sol-body">
            <h4>Vehículo Específico por Carga</h4>
            <p>Amplia variedad de vehículos propios adaptados a cada tipo de mercancía: turbos para urbano, camiones
              para semi masiva, patinetas y tractocamiones para carga masiva.</p>
          </div>
        </div>
        <div class="sol-card">
          <div class="sol-icon">
            <svg viewBox="0 0 24 24">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
            </svg>
          </div>
          <div class="sol-body">
            <h4>Canal de Comunicación Directo</h4>
            <p>Cada cliente cuenta con un punto de contacto directo para resolver inquietudes y mantenerse informado
              sobre el estado de su carga durante todo el trayecto.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- COBERTURA Y CORREDORES -->
  <section class="coverage">
    <div class="coverage-inner">
      <div class="coverage-header">
        <div>
          <div class="eyebrow">Presencia nacional</div>
          <h2>Cobertura en los 32 <span>Departamentos</span></h2>
          <p>Llegamos a todos los rincones del país con tiempos de tránsito optimizados gracias a nuestra red de 8
            sucursales propias estratégicamente ubicadas en los principales corredores logísticos de Colombia.</p>
          <a href="<?php echo esc_url(home_url('/sucursales/')); ?>" class="btn-outline-blue"
            style="margin-top:20px;">Ver Todas las Sucursales →</a>
        </div>
        <div>
          <div class="corridors-grid">
            <div class="corridor">
              <div class="corridor-dot"></div>
              <div class="corridor-body">
                <div class="corridor-name">Corredor Andino</div>
                <div class="corridor-cities">Medellín · Bogotá · Manizales · Pereira</div>
              </div>
            </div>
            <div class="corridor">
              <div class="corridor-dot"></div>
              <div class="corridor-body">
                <div class="corridor-name">Corredor Pacífico</div>
                <div class="corridor-cities">Buenaventura · Cali · Buga · Palmira</div>
              </div>
            </div>
            <div class="corridor">
              <div class="corridor-dot"></div>
              <div class="corridor-body">
                <div class="corridor-name">Corredor Caribe</div>
                <div class="corridor-cities">Cartagena · Barranquilla · Santa Marta</div>
              </div>
            </div>
            <div class="corridor">
              <div class="corridor-dot"></div>
              <div class="corridor-body">
                <div class="corridor-name">Troncal de Occidente</div>
                <div class="corridor-cities">Medellín · Cali · Buenaventura</div>
              </div>
            </div>
            <div class="corridor">
              <div class="corridor-dot"></div>
              <div class="corridor-body">
                <div class="corridor-name">Ruta del Sol</div>
                <div class="corridor-cities">Bogotá · Costa Caribe · Barranquilla</div>
              </div>
            </div>
            <div class="corridor">
              <div class="corridor-dot"></div>
              <div class="corridor-body">
                <div class="corridor-name">Corredor Industrial</div>
                <div class="corridor-cities">Medellín · Bogotá · Zonas francas</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="coverage-branches">
        <h3>Nuestras 8 Sucursales</h3>
        <p class="coverage-branches-sub">Atención local especializada en cada corredor logístico estratégico del país
        </p>
        <div class="branch-pills">
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-medellin/')); ?>" class="branch-pill main"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
            <span>Medellín — Sede Principal</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-bogota/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Bogotá</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-cali/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Cali</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-barranquilla/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Barranquilla</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-cartagena/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Cartagena</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-buenaventura/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Buenaventura</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-buga/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Buga</span>
          </a>
          <a href="<?php echo esc_url(home_url('/sucursales/sucursal-manizales/')); ?>" class="branch-pill"
            style="text-decoration:none; color:inherit;">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span>Manizales</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- TESTIMONIOS -->
  <section class="testi">
    <div class="testi-inner">
      <div class="testi-header">
        <div class="eyebrow center">Clientes que confían en nosotros</div>
        <h2>Lo que dicen <span>Nuestros Clientes</span></h2>
        <p>Empresas líderes de sus sectores confirman la calidad de nuestro servicio de transporte de carga nacional.
        </p>
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
          <span class="testi-quote-mark">"</span>
          <p class="testi-text">El equipo de Transportadora Estrella ha sido un proveedor clave en el proceso de
            internacionalización de Selecta, siempre con su apoyo, adaptabilidad, disposición y servicio.</p>
          <div class="testi-author">
            <div class="testi-av">CQ</div>
            <div>
              <div class="testi-name">Camila Quirama Mejía</div>
              <div class="testi-role">Analista de Exportaciones — Selecta</div>
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
          <span class="testi-quote-mark">"</span>
          <p class="testi-text">Si la materia prima no para, es porque la Transportadora Estrella S.A.S. nunca se
            detiene.
            Así se fabrica el éxito en ICOFORMAS. Un aliado logístico de primer nivel.</p>
          <div class="testi-author">
            <div class="testi-av">JG</div>
            <div>
              <div class="testi-name">Jaime Andrés Giraldo</div>
              <div class="testi-role">Gerente — ICO FORMAS</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OTROS SERVICIOS -->
  <section class="other-services">
    <div class="other-services-inner">
      <div class="other-header">
        <div class="eyebrow center">Portafolio completo</div>
        <h3>Otros Servicios Disponibles</h3>
        <p>Explore el resto de nuestra oferta de transporte especializado en Colombia.</p>
      </div>
      <div class="other-grid">
        <a href="<?php echo esc_url(home_url('/servicios/transporte-urbano-de-mercancias/')); ?>" class="other-card">
          <div class="other-card-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp"
              alt="Transporte urbano de mercancías — Transportadora Estrella" loading="lazy">
          </div>
          <div class="other-card-body">
            <div class="other-tag">Urbano</div>
            <h4>Transporte Urbano de Mercancías</h4>
            <p>Distribución eficiente dentro de las principales ciudades del país.</p>
            <div class="other-link">Ver servicio →</div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/servicios/transporte-de-contenedores/')); ?>" class="other-card">
          <div class="other-card-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
              alt="Transporte mercancías peligrosas — Transportadora Estrella" loading="lazy">
          </div>
          <div class="other-card-body">
            <div class="other-tag">Especializado</div>
            <h4>Transporte de Mercancías Peligrosas</h4>
            <p>Personal certificado y flota especializada bajo normativa ADR.</p>
            <div class="other-link">Ver servicio →</div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/servicios/')); ?>" class="other-card">
          <div class="other-card-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
              alt="ITR transporte internacional — Transportadora Estrella" loading="lazy">
          </div>
          <div class="other-card-body">
            <div class="other-tag">Internacional</div>
            <h4>ITR — Importación y Exportación</h4>
            <p>Desde los puertos de Buenaventura y Cartagena al mundo.</p>
            <div class="other-link">Ver servicio →</div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="cta" id="cotizar">
    <div class="cta-inner">
      <div class="cta-text">
        <div class="eyebrow">Hablemos hoy</div>
        <h2>Cotice su <span>Transporte de Carga Nacional</span></h2>
        <p>Cuéntenos su operación de carga masiva o semi masiva y diseñamos la solución logística ideal para su empresa.
          Le respondemos en menos de 24 horas hábiles.</p>
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
              <div class="cta-c-val">+57 604 527 3300</div>
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
              <div class="cta-c-val"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="83f0e6f1f5eae0eaece2efe0efeae6edf7e6c3f7f1e2edf0e6f0f7f1e6efefe2ade0ecee">[email&#160;protected]</a>
              </div>
            </div>
          </div>
          <div class="cta-contact">
            <div class="cta-c-icon">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
              </svg>
            </div>
            <div>
              <div class="cta-c-label">Horario de Atención</div>
              <div class="cta-c-val">Lun–Vie 8am–6pm · Sáb 8am–1pm</div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-box">
        <h3>Cotizar Carga Nacional</h3>
        <p class="form-box-sub">Complete el formulario y le respondemos en menos de 24 horas hábiles.</p>
        <div class="form-notice">
          <svg class="form-notice-icon" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="12" y1="8" x2="12" y2="12" />
            <line x1="12" y1="16" x2="12.01" y2="16" />
          </svg>
          <div>
            <div class="form-notice-title">Solo Carga Masiva y Semi Masiva</div>
            <div class="form-notice-text">Atendemos operaciones empresariales de alto volumen. No gestionamos paqueteo
              ni envíos individuales.</div>
          </div>
        </div>
        <div class="forminator-placeholder">
          <svg viewBox="0 0 24 24">
            <rect x="9" y="9" width="13" height="13" rx="2" ry="2" />
            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
          </svg>
          <p>Formulario Forminator</p>
          <span><?php echo do_shortcode('[forminator_form id="536"]'); ?></span>
        </div>
        <a href="https://wa.me/576045273300?text=Hola%2C%20necesito%20cotizar%20transporte%20de%20carga%20nacional"
          target="_blank" class="form-wa">
          <svg viewBox="0 0 24 24">
            <path
              d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
            <path
              d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
          </svg>
          <span class="form-wa-text">¿Necesita respuesta inmediata? WhatsApp</span>
        </a>
      </div>
    </div>
  </section>

</div> <!-- Cierra page-carga-nacional-content -->

<!-- WHATSAPP FLOTANTE -->
<div class="wa-float">
  <div class="wa-bubble">
    <strong>¿Necesita cotizar?</strong>
    Escríbanos, respondemos de inmediato.
  </div>
  <a href="https://wa.me/576045273300?text=Hola%2C%20quiero%20cotizar%20transporte%20de%20carga%20nacional"
    target="_blank" class="wa-btn">
    <svg viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
    </svg>
  </a>
</div>

<?php
get_footer();
?>
