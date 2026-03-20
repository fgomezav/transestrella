<?php
/**
 * Template Name: Certificado de Retención
 *
 * Plantilla para la página de solicitud de Certificado de Retención en la Fuente.
 */

get_header();
?>

<style>
/* === Certificado de Retención — estilos específicos de página === */

/* ── HERO COMPACTO ── */
.hero {
  min-height: auto;
  display: block;
  padding: 52px 40px 44px;
  position: relative;
  overflow: hidden;
  background: var(--ts-blue-deep); /* Fallback color compatible con el tema */
}
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: linear-gradient(rgba(255,255,255,.02) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,.02) 1px, transparent 1px);
  background-size: 48px 48px;
}
.hero-glow {
  position: absolute;
  top: -40%; right: -5%;
  width: 45%; height: 160%;
  background: radial-gradient(ellipse, rgba(15,91,167,.18) 0%, transparent 65%);
  pointer-events: none;
}
.hero-inner {
  max-width: 1240px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}
.hero-body { flex: 1; }
.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-display);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: .18em;
  text-transform: uppercase;
  color: var(--ts-gold);
  margin-bottom: 12px;
}
.hero-tag::before { content: ''; width: 28px; height: 2px; background: var(--ts-gold); }
.hero h1 { font-size: clamp(32px, 4vw, 52px); margin-bottom: 10px; color: #fff; }
.hero h1 em { font-style: italic; color: var(--ts-gold); display: block; }
.hero-sub {
  font-size: 14px;
  color: rgba(255,255,255,.65);
  line-height: 1.7;
  max-width: 500px;
  margin-bottom: 20px;
}
.hero-pills { 
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    padding-top: 0; 
    border-top: none; 
}
.hero-pill { 
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 6px; 
    padding: 7px 14px; 
    font-size: 12px;
    color: #fff;
}
.hero-pill svg { width: 14px; height: 14px; stroke: var(--ts-gold); fill: none; stroke-width: 2; }

/* Icono decorativo */
.hero-icon-wrap { flex-shrink: 0; }
.hero-icon-box {
  width: 88px; height: 88px;
  background: rgba(245,166,35,.08);
  border: 1px solid rgba(245,166,35,.2);
  border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
}
.hero-icon-box svg {
  width: 40px; height: 40px;
  stroke: var(--ts-gold); fill: none;
  stroke-width: 1.4; stroke-linecap: round; stroke-linejoin: round;
}

/* ── LAYOUT ── */
.page-wrap {
  max-width: 1240px;
  margin: 0 auto;
  padding: 56px 40px 88px;
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 64px;
  align-items: start;
}

/* ── FORMULARIO ── */
.form-section h2 {
  font-family: var(--font-display);
  font-size: 28px; font-weight: 800;
  text-transform: uppercase;
  color: #333; margin-bottom: 6px;
}
.form-section h2 span { color: var(--ts-gold); }
.form-section .form-intro { font-size: 14px; color: var(--ts-gray); line-height: 1.7; margin-bottom: 28px; }

/* ── SIDEBAR ── */
.info-sidebar { display: flex; flex-direction: column; gap: 18px; position: sticky; top: 88px; }
.info-card { background: var(--ts-gray-bg); border: 1px solid var(--ts-gray-line); border-radius: 12px; padding: 22px 20px; }
.info-card-title { font-family: var(--font-display); font-size: 11px; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; color: var(--ts-gray); margin-bottom: 16px; }

/* Pasos */
.steps { display: flex; flex-direction: column; gap: 0; }
.step { display: flex; gap: 12px; padding: 12px 0; border-bottom: 1px solid var(--ts-gray-line); }
.step:last-child { border-bottom: none; padding-bottom: 0; }
.step:first-child { padding-top: 0; }
.step-num { width: 26px; height: 26px; background: var(--ts-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-family: var(--font-display); font-size: 13px; font-weight: 800; color: #fff; line-height: 1; }
.step-title { font-family: var(--font-display); font-size: 14px; font-weight: 800; text-transform: uppercase; color: #333; line-height: 1.1; margin-bottom: 2px; }
.step-desc { font-size: 12px; color: var(--ts-gray); line-height: 1.5; }

/* Nota importante */
.notice { background: rgba(245,166,35,.06); border: 1px solid rgba(245,166,35,.25); border-radius: 8px; padding: 14px 16px; display: flex; gap: 10px; }
.notice svg { width: 16px; height: 16px; stroke: var(--ts-gold); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; flex-shrink: 0; margin-top: 1px; }
.notice-text { font-size: 12px; color: #333; line-height: 1.6; }
.notice-text strong { color: #b37a10; }

/* Contacto directo */
.contact-item { display: flex; align-items: center; gap: 10px; padding: 10px 0; border-bottom: 1px solid var(--ts-gray-line); }
.contact-item:last-child { border-bottom: none; padding-bottom: 0; }
.contact-item:first-child { padding-top: 0; }
.contact-icon { width: 32px; height: 32px; background: #EEF3FA; border-radius: 6px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.contact-icon svg { width: 14px; height: 14px; stroke: var(--ts-blue); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
.contact-label { font-size: 10px; text-transform: uppercase; letter-spacing: .1em; color: var(--ts-gray); margin-bottom: 1px; }
.contact-val { font-size: 13px; font-weight: 600; color: #333; }
.contact-val a { color: var(--ts-blue); text-decoration: none; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .page-wrap { grid-template-columns: 1fr; gap: 40px; }
  .info-sidebar { position: static; }
}
@media (max-width: 768px) {
  .hero { padding: 40px 20px 36px; }
  .hero-icon-wrap { display: none; }
  .page-wrap { padding: 36px 20px 64px; }
}
</style>

<!-- HERO -->
<section class="hero">
  <div class="hero-glow"></div>
  <div class="hero-inner">
    <div class="hero-body">
      <div class="breadcrumb" style="margin-bottom: 12px;">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,.6); text-decoration: none; font-size: 12px;">Inicio</a>
        <span class="breadcrumb-sep" style="color: rgba(255,255,255,.3); margin: 0 8px;">›</span>
        <span style="color: #fff; font-size: 12px; font-weight: 600;">Certificado de Retención en la Fuente</span>
      </div>
      <div class="hero-tag">Documentos tributarios</div>
      <h1>Certificado de<em>Retención en la Fuente</em></h1>
      <p class="hero-sub">Solicite su certificado de retención en la fuente diligenciando el formulario. Lo enviamos a su correo en un máximo de 3 días hábiles.</p>
      <div class="hero-pills">
        <div class="hero-pill">
            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span>Año gravable <?php echo date('Y') - 1; ?></span>
        </div>
        <div class="hero-pill">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Respuesta en 3 días hábiles</span>
        </div>
        <div class="hero-pill">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>Entrega por correo electrónico</span>
        </div>
      </div>
    </div>
    <div class="hero-icon-wrap">
      <div class="hero-icon-box">
        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- LAYOUT -->
<div class="page-wrap">

  <!-- FORMULARIO -->
  <section class="form-section">
    <h2>Complete el <span>Formulario</span></h2>
    <p class="form-intro">Todos los campos marcados con <strong style="color:var(--ts-gold);">*</strong> son obligatorios. Verifique que el correo electrónico sea el correcto — allí recibirá el certificado.</p>

    <!-- Forminator form #1775 -->
    <?php echo do_shortcode('[forminator_form id="1775"]'); ?>

  </section>

  <!-- SIDEBAR -->
  <aside class="info-sidebar">

    <div class="info-card">
      <div class="info-card-title">¿Cómo funciona?</div>
      <div class="steps">
        <div class="step">
          <div class="step-num">1</div>
          <div class="step-body">
            <div class="step-title">Complete el formulario</div>
            <div class="step-desc">Ingrese los datos de su empresa y el año gravable del certificado que necesita.</div>
          </div>
        </div>
        <div class="step">
          <div class="step-num">2</div>
          <div class="step-body">
            <div class="step-title">Verificamos en contabilidad</div>
            <div class="step-desc">Nuestro equipo valida la información con el área contable de la sucursal correspondiente.</div>
          </div>
        </div>
        <div class="step">
          <div class="step-num">3</div>
          <div class="step-body">
            <div class="step-title">Recibe el certificado</div>
            <div class="step-desc">Le enviamos el certificado en PDF firmado al correo registrado en máximo 3 días hábiles.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="notice">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <div class="notice-text"><strong>Importante:</strong> Solo podemos expedir certificados de empresas que hayan realizado operaciones de transporte de carga con Transportadora Estrella S.A.S. durante el año gravable solicitado.</div>
    </div>

    <div class="info-card">
      <div class="info-card-title">¿Necesita ayuda?</div>
      <div class="contact-item">
        <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.03z"/></svg></div>
        <div>
          <div class="contact-label">Teléfono</div>
          <div class="contact-val"><a href="tel:+576045273300">+57 604 527 3300</a></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
        <div>
          <div class="contact-label">Correo</div>
          <div class="contact-val"><a href="mailto:servicioalcliente@transestrella.com"
                  style="color:inherit;text-decoration:none;">servicioalcliente@transestrella.com</a></div>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div>
          <div class="contact-label">Horario</div>
          <div class="contact-val">Lun–Vie 8 a.m.–6 p.m. · Sáb 8 a.m.–1 p.m.</div>
        </div>
      </div>
    </div>

  </aside>
</div>

<?php 
get_footer();
