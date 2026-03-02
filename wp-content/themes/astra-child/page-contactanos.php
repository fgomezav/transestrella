<?php
/**
 * Template Name: Contáctanos
 * Template Post Type: page
 */

get_header(); ?>

<style>
/* 
  Estilos de la página de contacto cargados desde /wp-content/themes/astra-child/contactanos.css.
*/
<?php echo file_get_contents( get_stylesheet_directory() . '/contactanos.css' ); ?>
</style>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="hero-glow"></div>
  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="/">Inicio</a><span class="breadcrumb-sep">›</span>
      <span>Contáctanos</span>
    </div>
    <div class="hero-layout">
      <div class="hero-text">
        <div class="eyebrow">Hablemos hoy</div>
        <h1>Contáctenos y<em>Cotice su Carga</em></h1>
        <p>Más de 30 años conectando empresas con toda Colombia. Cuéntenos su necesidad de transporte de carga masiva y le respondemos en menos de 24 horas hábiles desde la sucursal más cercana.</p>
      </div>
      <div class="hero-channels">
        <a href="tel:+576045273300" class="channel-card">
          <div class="ch-icon ch-icon-blue">
            <svg class="stroke-icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z"/></svg>
          </div>
          <div>
            <div class="ch-label">Línea Nacional — Medellín</div>
            <div class="ch-val">+57 604 527 3300</div>
            <div class="ch-sub">Lun–Vie 8am–6pm · Sáb 8am–1pm</div>
          </div>
          <div class="ch-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
        </a>
        <a href="/cdn-cgi/l/email-protection#3b485e494d525852545a575857525e554f5e7b4f495a55485e484f495e57575a15585456" class="channel-card">
          <div class="ch-icon ch-icon-blue">
            <svg class="stroke-icon" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <div class="ch-label">Correo Electrónico</div>
            <div class="ch-val" style="font-size:15px;"><span class="__cf_email__" data-cfemail="bccfd9cecad5dfd5d3ddd0dfd0d5d9d2c8d9fcc8ceddd2cfd9cfc8ced9d0d0dd92dfd3d1">[email&#160;protected]</span></div>
            <div class="ch-sub">Respuesta en menos de 24 horas hábiles</div>
          </div>
          <div class="ch-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
        </a>
        <a href="https://wa.me/576045273300?text=Hola%2C%20quiero%20cotizar%20transporte%20de%20carga%20masiva%20en%20Colombia" target="_blank" class="channel-card wa">
          <div class="ch-icon ch-icon-wa">
            <svg class="fill-icon" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
          </div>
          <div>
            <div class="ch-label">WhatsApp — Respuesta Inmediata</div>
            <div class="ch-val">+57 604 527 3300</div>
            <div class="ch-sub">Disponible durante horario de oficina</div>
          </div>
          <div class="ch-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══ STRIP DE DATOS ══ -->
<div class="contact-strip">
  <div class="contact-strip-inner">
    <div class="cs-item">
      <div class="cs-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
      <div>
        <div class="cs-label">Sede Principal</div>
        <div class="cs-val">Calle 64 #56-60, La Candelaria, Medellín</div>
      </div>
    </div>
    <div class="cs-divider"></div>
    <div class="cs-item">
      <div class="cs-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
      <div>
        <div class="cs-label">Red Nacional</div>
        <div class="cs-val">8 Sucursales en Colombia</div>
      </div>
    </div>
    <div class="cs-divider"></div>
    <div class="cs-item">
      <div class="cs-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
      <div>
        <div class="cs-label">Horario Sede Principal</div>
        <div class="cs-val">Lun–Vie 8:00am–6:00pm · Sáb 8:00am–1:00pm</div>
      </div>
    </div>
    <div class="cs-divider"></div>
    <div class="cs-item">
      <div class="cs-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
      <div>
        <div class="cs-label">Certificaciones</div>
        <div class="cs-val">ISO 9001 · BASC · SuperTransporte</div>
      </div>
    </div>
  </div>
</div>

<!-- ══ FORMULARIO + INFO ══ -->
<section class="contact-main">
  <div class="contact-main-inner">

    <!-- columna izquierda -->
    <div class="contact-info">
      <div class="eyebrow">Información de contacto</div>
      <h2>Sede Principal<br><span>Medellín — Antioquia</span></h2>
      <p class="intro">Visite nuestra sede principal en Medellín o contáctenos por los canales disponibles. Para operaciones en otras ciudades puede contactar directamente la sucursal más cercana a su empresa.</p>

      <div class="info-blocks">
        <div class="info-block">
          <div class="ib-icon">
            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <div class="ib-label">Dirección</div>
            <div class="ib-val">Calle 64 #56-60, La Candelaria</div>
            <div class="ib-sub">Medellín, Antioquia · Colombia</div>
          </div>
        </div>
        <div class="info-block">
          <div class="ib-icon">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z"/></svg>
          </div>
          <div>
            <div class="ib-label">Teléfono / PBX</div>
            <div class="ib-val"><a href="tel:+576045273300">+57 (604) 527 3300</a></div>
            <div class="ib-sub">Línea nacional Medellín</div>
          </div>
        </div>
        <div class="info-block">
          <div class="ib-icon">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <div class="ib-label">Correo Electrónico</div>
            <div class="ib-val"><a href="/cdn-cgi/l/email-protection#55263027233c363c3a343936393c303b2130152127343b2630262127303939347b363a38"><span class="__cf_email__" data-cfemail="2a594f585c434943454b464946434f445e4f6a5e584b44594f595e584f46464b04494547">[email&#160;protected]</span></a></div>
            <div class="ib-sub">Para cotizaciones, tarifas y consultas comerciales</div>
          </div>
        </div>
        <div class="info-block">
          <div class="ib-icon">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <div class="ib-label">Horario de Atención</div>
            <div class="ib-val">Lun–Vie 8:00am – 6:00pm</div>
            <div class="ib-sub">Sábados 8:00am – 1:00pm · Domingo cerrado</div>
          </div>
        </div>
      </div>

      <!-- Mapa -->
      <div class="map-embed-box">
        <div style="text-align:center;">
          <div class="map-pin"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <p>Mapa Google Maps</p>
          <span>Calle 64 #56-60, La Candelaria, Medellín</span>
        </div>
        <div class="map-code-note">Insertar iframe Google Maps · Divi Code Module</div>
      </div>
      <div class="map-nav-row">
        <a href="https://waze.com/ul?q=Calle+64+56-60+La+Candelaria+Medellin" target="_blank" class="map-nav-btn btn-waze">
          <svg viewBox="0 0 24 24" fill="white" width="13" height="13"><circle cx="12" cy="11" r="7"/><circle cx="9.5" cy="10" r="1.2"/><circle cx="14.5" cy="10" r="1.2"/></svg>
          Cómo llegar en Waze
        </a>
        <a href="https://maps.google.com/?q=Calle+64+56-60+La+Candelaria+Medellin+Antioquia+Colombia" target="_blank" class="map-nav-btn btn-gmaps">
          <svg viewBox="0 0 24 24" fill="white" width="13" height="13"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          Abrir en Google Maps
        </a>
      </div>
    </div>

    <!-- columna derecha: formulario -->
    <div class="form-col">
      <div class="form-box">
        <div class="form-box-head">
          <h3>Solicitar Cotización</h3>
          <p>Complete el formulario con los datos de su carga y le respondemos en menos de 24 horas hábiles desde la sucursal más cercana.</p>
        </div>
        <div class="form-notice">
          <svg class="fn-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <div>
            <div class="fn-title">Servicio Empresarial — Carga Masiva</div>
            <div class="fn-text">Atendemos exclusivamente operaciones de carga masiva y semi masiva: turbos, camiones, patinetas y tractocamiones. No gestionamos paqueteo ni envíos individuales de persona a persona.</div>
          </div>
        </div>
        <!-- Forminator placeholder -->
        <div class="forminator-placeholder">
          <span><?php echo do_shortcode('[forminator_form id="536"]'); ?></span>
        </div>
        <a href="https://wa.me/576045273300?text=Hola%2C%20quiero%20cotizar%20transporte%20de%20carga%20masiva%20en%20Colombia" target="_blank" class="form-wa">
          <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
          <span class="form-wa-text">¿Necesita respuesta inmediata? WhatsApp</span>
        </a>
        <div class="response-badge">
          <div class="rb-dot"></div>
          <div class="rb-text">Respondemos <strong>en menos de 24 horas hábiles</strong> · Horario Lun–Vie 8am–6pm · Sáb 8am–1pm</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══ SUCURSALES ══ -->
<section class="branches-quick">
  <div class="bq-inner">
    <div class="bq-header">
      <div class="bq-header-left">
        <div class="eyebrow">Red nacional</div>
        <h2>Contáctenos desde<br><span>Cualquier Sucursal</span></h2>
      </div>
      <a href="/sucursales/" class="btn-outline-blue">Ver todas las sucursales →</a>
    </div>
    <div class="bq-grid">
      <a href="/sucursales/sucursal-medellin/" class="bq-card main">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="bq-city">Medellín</div>
        <div class="bq-dept">Antioquia</div>
        <div class="bq-phone">PBX (604) 527 3300</div>
        <div class="bq-addr">Calle 64 #56-60, La Candelaria</div>
        <div class="bq-main-tag">★ Sede Principal</div>
      </a>
      <a href="/sucursales/sucursal-bogota/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Bogotá</div>
        <div class="bq-dept">Cundinamarca</div>
        <div class="bq-phone">312 826 5078</div>
        <div class="bq-addr">Av. Troncal de Occidente No. 18-76</div>
      </a>
      <a href="/sucursales/sucursal-cali/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Cali</div>
        <div class="bq-dept">Valle del Cauca</div>
        <div class="bq-phone">310 369 5787</div>
        <div class="bq-addr">Bloque A3 Oficina 104, Cencar</div>
      </a>
      <a href="/sucursales/sucursal-barranquilla/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Barranquilla</div>
        <div class="bq-dept">Atlántico</div>
        <div class="bq-phone">310 442 7076</div>
        <div class="bq-addr">Cra. 28 #38-345 Av. Circunvalar</div>
      </a>
      <a href="/sucursales/sucursal-cartagena/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Cartagena</div>
        <div class="bq-dept">Bolívar</div>
        <div class="bq-phone">314 772 8740</div>
        <div class="bq-addr">Diagonal 21 N.° 45A–11, Av. El Bosque</div>
      </a>
      <a href="/sucursales/sucursal-buenaventura/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Buenaventura</div>
        <div class="bq-dept">Valle del Cauca</div>
        <div class="bq-phone">313 659 7359</div>
        <div class="bq-addr">Calle 7B N.° 4–52 Piso 2</div>
      </a>
      <a href="/sucursales/sucursal-buga/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Buga</div>
        <div class="bq-dept">Valle del Cauca</div>
        <div class="bq-phone">313 655 3232</div>
        <div class="bq-addr">Cra. 12A N.° 6Sur–94</div>
      </a>
      <a href="/sucursales/sucursal-manizales/" class="bq-card">
        <div class="bq-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="bq-city">Manizales</div>
        <div class="bq-dept">Caldas</div>
        <div class="bq-phone">310 369 5787</div>
        <div class="bq-addr">Calle 110 N.° 34A–75</div>
      </a>
    </div>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="faq">
  <div class="faq-inner">
    <div class="faq-left">
      <div class="eyebrow">Preguntas frecuentes</div>
      <h2>Respuestas<br><span>Antes de Escribirnos</span></h2>
      <p>Las preguntas más comunes que recibimos antes de iniciar una cotización. Si la suya no está aquí, escríbanos con gusto.</p>
      <a href="https://wa.me/576045273300?text=Hola%2C%20tengo%20una%20consulta%20sobre%20transporte%20de%20carga" target="_blank" class="btn-primary">
        <svg viewBox="0 0 24 24" fill="white" width="16" height="16"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
        Consultar por WhatsApp
      </a>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-q">
          <h4>¿Qué tipos de carga transportan?</h4>
          <div class="faq-toggle"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></div>
        </div>
        <div class="faq-a">
          <p>Nos especializamos en carga masiva y semi masiva: granos, azúcar, materiales de construcción, productos industriales, químicos, agroquímicos, contenedores y carga general de alto volumen. No atendemos paqueteo ni envíos individuales de persona a persona.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-q">
          <h4>¿Cuánto tarda en llegar una cotización?</h4>
          <div class="faq-toggle"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></div>
        </div>
        <div class="faq-a">
          <p>El equipo comercial responde en menos de 24 horas hábiles para solicitudes enviadas por formulario o correo electrónico. Para consultas urgentes, WhatsApp es la vía más rápida — respondemos durante el horario de atención de lunes a sábado.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-q">
          <h4>¿En qué ciudades operan?</h4>
          <div class="faq-toggle"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></div>
        </div>
        <div class="faq-a">
          <p>Tenemos cobertura nacional con 8 sucursales propias en Medellín (sede principal), Bogotá, Cali, Barranquilla, Cartagena, Buenaventura, Buga y Manizales. Desde estas ciudades operamos rutas hacia todo el territorio colombiano, incluyendo los principales corredores logísticos del país.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-q">
          <h4>¿Tienen certificación BASC para comercio exterior?</h4>
          <div class="faq-toggle"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></div>
        </div>
        <div class="faq-a">
          <p>Sí. Contamos con certificación BASC (Business Alliance for Secure Commerce) vigente y auditada anualmente, además de ISO 9001 — ICONTEC y vigilancia de la Superintendencia de Transporte. Estas certificaciones son requisito para operar con los terminales portuarios de Buenaventura y Cartagena en operaciones de importación y exportación.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-q">
          <h4>¿Puedo rastrear mi carga en tiempo real?</h4>
          <div class="faq-toggle"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></div>
        </div>
        <div class="faq-a">
          <p>Sí. Toda nuestra flota cuenta con sistema de seguimiento GPS activo 24/7. Los clientes con contrato activo pueden verificar la ubicación y el estado de su mercancía en tránsito en cualquier momento. Consulte con el equipo comercial las opciones de acceso al sistema de monitoreo.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-q">
          <h4>¿Transportan mercancías peligrosas?</h4>
          <div class="faq-toggle"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></div>
        </div>
        <div class="faq-a">
          <p>Sí, contamos con servicio especializado de transporte de mercancías peligrosas bajo el Decreto 1609, con conductores certificados por el SENA, equipos de emergencia en ruta, hojas de seguridad MSDS y protocolos de contingencia. Atendemos agroquímicos, combustibles, productos químicos industriales y otras cargas clasificadas en las 9 clases de riesgo ONU.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->


<script>
// FAQ accordion
document.addEventListener('DOMContentLoaded', function() {
  const allFaqItems = document.querySelectorAll('.faq-item');
  document.querySelectorAll('.faq-q').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const item = btn.closest('.faq-item');
      if (item) {
        const isOpen = item.classList.contains('open');
        // Close all items
        allFaqItems.forEach(function(fi) { fi.classList.remove('open'); });
        // Toggle the clicked item
        if (!isOpen) {
          item.classList.add('open');
        }
      }
    });
  });
});
</script>

<?php get_footer(); ?>
