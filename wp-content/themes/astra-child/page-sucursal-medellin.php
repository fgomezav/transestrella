<?php
/**
 * Template Name: Sucursal Medellín
 * Template Post Type: page
 */

get_header();
?>
<style>
  <?php echo file_get_contents(get_stylesheet_directory() . '/sucursal.css');
?>
</style>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-line"></div>
  <div class="hero-content">
    <div class="breadcrumb">
      <a href="/">Inicio</a>
      <span class="breadcrumb-sep">›</span>
      <a href="/sucursales/">Sucursales</a>
      <span class="breadcrumb-sep">›</span>
      <span>Medellín</span>
    </div>
    <div class="hero-layout">
      <div class="hero-left">
        <div class="sede-tag">
          <svg viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <span>Sede Principal · Fundada 1993</span>
        </div>
        <h1>Transporte de Carga<em>en Medellín</em></h1>
        <p>Más de 30 años operando como empresa de transporte de carga masiva en Medellín y Antioquia. Flota propia
          certificada, monitoreo GPS 24/7 y el respaldo de las certificaciones ISO 9001 y BASC para proteger cada
          tonelada de su mercancía.</p>
      </div>
      <div class="hcc">
        <div class="hcc-title">Contacto Directo — Medellín</div>
        <div class="hcc-items">
          <div class="hcc-item">
            <div class="hcc-icon"><svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg></div>
            <div>
              <div class="hcc-label">Dirección</div>
              <div class="hcc-val">Calle 64 #56-60<br>La Candelaria, Medellín</div>
            </div>
          </div>
          <div class="hcc-item">
            <div class="hcc-icon"><svg viewBox="0 0 24 24">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
              </svg></div>
            <div>
              <div class="hcc-label">PBX</div>
              <div class="hcc-val"><a href="tel:+576045273300">(604) 527 3300</a></div>
            </div>
          </div>
          <div class="hcc-item">
            <div class="hcc-icon"><svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
              </svg></div>
            <div>
              <div class="hcc-label">Horario</div>
              <div class="hcc-val">Lun–Vie 8am–6pm<br>Sáb 8am–1pm</div>
            </div>
          </div>
        </div>
        <div class="hcc-btns">
          <a href="https://wa.me/576045273300?text=Hola%2C%20quiero%20cotizar%20transporte%20de%20carga%20en%20Medell%C3%ADn"
            target="_blank" class="hcc-btn hcc-btn-wa">
            <svg viewBox="0 0 24 24" fill="white">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
              <path
                d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
            </svg>
            Escribir por WhatsApp
          </a>
          <a href="tel:+576045273300" class="hcc-btn hcc-btn-tel">
            <svg viewBox="0 0 24 24" stroke="white" fill="none" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
            </svg>
            Llamar Ahora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     MAPA + DETALLES
══════════════════════════════════════════ -->
<section class="map-section">
  <div class="map-section-inner">
    <div class="map-embed">
      <!-- Divi: reemplazar con iframe Google Maps embed -->
      <div style="text-align:center;">
        <div class="map-pin-big"><svg viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
            <circle cx="12" cy="10" r="3" />
          </svg></div>
        <p>Mapa Google Maps</p>
        <span>Calle 64 #56-60, La Candelaria, Medellín</span>
      </div>
      <div class="map-note"><iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63450.90610744188!2d-75.72125740514781!3d6.305493736282244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429539db76447%3A0x219d4984ace8094!2sTransportadora%20Estrella!5e0!3m2!1ses-419!2sco!4v1772459066402!5m2!1ses-419!2sco"
          width="850" height="540" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <div class="map-side">
      <div class="map-side-title">Información de Contacto</div>
      <div class="map-detail-list">
        <div class="map-detail">
          <div class="map-detail-icon"><svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg></div>
          <div>
            <div class="map-detail-label">Dirección</div>
            <div class="map-detail-val">Calle 64 #56-60, La Candelaria<br>Medellín, Antioquia</div>
          </div>
        </div>
        <div class="map-detail">
          <div class="map-detail-icon"><svg viewBox="0 0 24 24">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
            </svg></div>
          <div>
            <div class="map-detail-label">PBX</div>
            <div class="map-detail-val"><a href="tel:+576045273300">PBX (604) 527 3300</a></div>
          </div>
        </div>
        <div class="map-detail">
          <div class="map-detail-icon"><svg viewBox="0 0 24 24">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg></div>
          <div>
            <div class="map-detail-label">Correo</div>
            <div class="map-detail-val"><a
                href="mailto:servicioalcliente@transestrella.com">servicioalcliente@transestrella.com</a></div>
          </div>
        </div>
        <div class="map-detail">
          <div class="map-detail-icon"><svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg></div>
          <div>
            <div class="map-detail-label">Horario</div>
            <div class="map-detail-val">Lun–Vie 8:00am–6:00pm<br>Sáb 8:00am–1:00pm</div>
          </div>
        </div>
      </div>
      <div class="map-nav-btns">
        <a href="https://waze.com/ul?q=Calle+64+56-60+La+Candelaria+Medellin" target="_blank"
          class="map-nav-btn btn-waze">
          <svg viewBox="0 0 24 24" fill="white" width="15" height="15">
            <circle cx="12" cy="11" r="7" />
            <circle cx="9.5" cy="10" r="1.2" />
            <circle cx="14.5" cy="10" r="1.2" />
          </svg>
          Cómo llegar en Waze
        </a>
        <a href="https://maps.google.com/?q=Calle+64+%2356-60+La+Candelaria+Medellin" target="_blank"
          class="map-nav-btn btn-gmaps">
          <svg viewBox="0 0 24 24" fill="white" width="15" height="15">
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg>
          Abrir en Google Maps
        </a>
        <a href="https://moovitapp.com/" target="_blank" class="map-nav-btn btn-moovit">
          <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" width="15"
            height="15">
            <rect x="3" y="11" width="18" height="10" rx="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg>
          Ver transporte público
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     EMPRESA DE TRANSPORTE DE CARGA EN MEDELLÍN
══════════════════════════════════════════ -->
<section class="seo-intro">
  <div class="seo-intro-inner">
    <div class="seo-intro-text">
      <div class="eyebrow">Empresa de transporte en Medellín</div>
      <h2>Transporte de Carga Masiva en <span>Medellín y Antioquia</span></h2>
      <p>Transportadora Estrella es una empresa de transporte de carga masiva con sede principal en Medellín desde 1993.
        Durante más de tres décadas hemos operado en Antioquia y en todos los corredores logísticos del país,
        consolidándonos como uno de los transportadores de referencia para empresas que mueven grandes volúmenes de
        mercancía en Colombia.</p>
      <p>Desde nuestra sede en La Candelaria coordinamos operaciones diarias hacia Bogotá, Cali, Barranquilla,
        Cartagena, Buenaventura y el resto del territorio nacional, con flota propia certificada y sistemas de monitoreo
        vehicular que garantizan visibilidad total sobre cada cargue.</p>
      <p>Contamos con certificación ISO 9001 de ICONTEC, certificación BASC vigente y habilitación de la
        Superintendencia de Transporte, lo que nos convierte en el aliado logístico que empresas de manufactura,
        agroindustria, construcción y comercio exterior en Medellín necesitan para operar con seguridad y trazabilidad.
      </p>
    </div>
    <div class="seo-adv-grid">
      <div class="seo-adv-card">
        <div class="seo-adv-icon"><svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg></div>
        <div class="seo-adv-body">
          <h4>30+ Años en Medellín</h4>
          <p>Sede principal activa desde 1993. Conocemos cada ruta, cada restricción de movilidad y cada particularidad
            logística de Antioquia y sus municipios.</p>
        </div>
      </div>
      <div class="seo-adv-card">
        <div class="seo-adv-icon"><svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="2" y1="12" x2="22" y2="12" />
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
          </svg></div>
        <div class="seo-adv-body">
          <h4>Monitoreo GPS 24/7</h4>
          <p>Todos nuestros vehículos operan con sistema de rastreo satelital en tiempo real. Usted puede verificar la
            ubicación de su carga en cualquier momento durante el tránsito.</p>
        </div>
      </div>
      <div class="seo-adv-card">
        <div class="seo-adv-icon"><svg viewBox="0 0 24 24">
            <rect x="1" y="3" width="15" height="13" rx="1" />
            <path d="M16 8h4l3 5v4h-7V8z" />
            <circle cx="5.5" cy="18.5" r="2.5" />
            <circle cx="18.5" cy="18.5" r="2.5" />
          </svg></div>
        <div class="seo-adv-body">
          <h4>Flota Propia Certificada</h4>
          <p>Turbos, camiones, volcos, patinetas, tractocamiones y cisternas con mantenimiento preventivo riguroso. El
            vehículo adecuado para cada tipo y volumen de carga masiva.</p>
        </div>
      </div>
      <div class="seo-adv-card">
        <div class="seo-adv-icon"><svg viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
          </svg></div>
        <div class="seo-adv-body">
          <h4>Equipo Local Especializado</h4>
          <p>Personal operativo, comercial y de servicio al cliente con sede permanente en Medellín. Atención directa
            sin intermediarios ni call centers externos.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     TIPOS DE CARGA QUE TRANSPORTAMOS EN MEDELLÍN
══════════════════════════════════════════ -->
<section class="cargo-types">
  <div class="cargo-types-inner">
    <div class="cargo-types-header">
      <div class="eyebrow">Qué transportamos</div>
      <h2>Carga Masiva que Movilizamos desde <span>Medellín</span></h2>
      <p>Nos especializamos en carga masiva y semi masiva de alto volumen para empresas. No gestionamos paqueteo ni
        envíos individuales — nuestra operación está diseñada para volúmenes significativos con salidas frecuentes.</p>
    </div>
    <div class="cargo-grid">
      <div class="cargo-card">
        <div class="cargo-card-num">01</div>
        <h3>Materias Primas Industriales</h3>
        <p>Transporte de materias primas para industrias de manufactura, química, textil y plásticos ubicadas en el
          Valle de Aburrá, con origen o destino en puertos o zonas de producción en otras regiones del país.</p>
        <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="cargo-card-link">Ver servicio →</a>
      </div>
      <div class="cargo-card">
        <div class="cargo-card-num">02</div>
        <h3>Productos de Construcción</h3>
        <p>Transporte de agregados, cemento, acero, prefabricados y materiales de construcción hacia obras en todo
          Antioquia y Colombia. Volcos autodescargables y camiones de plataforma para cualquier formato.</p>
        <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="cargo-card-link">Ver servicio →</a>
      </div>
      <div class="cargo-card">
        <div class="cargo-card-num">03</div>
        <h3>Carga de Consumo Masivo</h3>
        <p>Distribución de productos terminados de empresas de consumo masivo desde centros de distribución en Medellín
          hacia cadenas de retail, supermercados y distribuidores en todo el país.</p>
        <a href="/servicios/transporte-urbano-de-mercancias/" class="cargo-card-link">Ver servicio →</a>
      </div>
      <div class="cargo-card">
        <div class="cargo-card-num">04</div>
        <h3>Mercancías Peligrosas</h3>
        <p>Transporte especializado de químicos, combustibles y materiales clasificados bajo las 9 clases ONU con
          conductores certificados SENA, documentación completa y flota equipada según normativa colombiana vigente.</p>
        <a href="/servicios/transporte-de-carga-peligrosa/" class="cargo-card-link">Ver servicio →</a>
      </div>
      <div class="cargo-card">
        <div class="cargo-card-num">05</div>
        <h3>Carga para Exportación (ITR)</h3>
        <p>Transporte de contenedores llenos (FCL) y carga suelta desde plantas y bodegas en Medellín hacia los puertos
          de Buenaventura y Cartagena para operaciones de exportación bajo certificación BASC.</p>
        <a href="/servicios/itr/" class="cargo-card-link">Ver servicio →</a>
      </div>
      <div class="cargo-card">
        <div class="cargo-card-num">06</div>
        <h3>Importaciones en Puerto</h3>
        <p>Recogida de carga importada en Buenaventura y Cartagena para entrega final en bodegas, plantas o centros de
          distribución en Medellín, Antioquia y el corredor central del país.</p>
        <a href="/servicios/itr/" class="cargo-card-link">Ver servicio →</a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     SERVICIOS DISPONIBLES
══════════════════════════════════════════ -->
<section class="services">
  <div class="services-inner">
    <div class="services-header">
      <div class="eyebrow center">Portafolio completo</div>
      <h2>Servicios de Transporte de Carga <span>Disponibles en Medellín</span></h2>
      <p>Todos los servicios de Transportadora Estrella se contratan y coordinan directamente desde nuestra sede en
        Medellín.</p>
    </div>
    <div class="services-grid">
      <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="svc-card">
        <div class="svc-img">
          <img
            src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg"
            alt="Transporte de carga terrestre nacional desde Medellín" loading="lazy">
          <div class="svc-img-ov"></div>
          <div class="svc-tag-label">Nacional</div>
        </div>
        <div class="svc-body">
          <h4>Carga Terrestre Nacional</h4>
          <p>Carga masiva y semi masiva desde Medellín a cualquier punto del país con GPS 24/7.</p>
          <div class="svc-link">Ver servicio →</div>
        </div>
      </a>
      <a href="/servicios/transporte-urbano-de-mercancias/" class="svc-card">
        <div class="svc-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp"
            alt="Transporte urbano de mercancías Medellín Valle de Aburrá" loading="lazy">
          <div class="svc-img-ov"></div>
          <div class="svc-tag-label">Urbano</div>
        </div>
        <div class="svc-body">
          <h4>Transporte Urbano</h4>
          <p>Distribución de mercancías en Medellín y los 9 municipios del Valle de Aburrá.</p>
          <div class="svc-link">Ver servicio →</div>
        </div>
      </a>
      <a href="/servicios/transporte-de-carga-peligrosa/" class="svc-card">
        <div class="svc-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
            alt="Transporte de mercancías peligrosas Medellín Antioquia" loading="lazy">
          <div class="svc-img-ov"></div>
          <div class="svc-tag-label">Especializado</div>
        </div>
        <div class="svc-body">
          <h4>Mercancías Peligrosas</h4>
          <p>Las 9 clases ONU bajo normativa Decreto 1609. Conductores certificados y flota equipada.</p>
          <div class="svc-link">Ver servicio →</div>
        </div>
      </a>
      <a href="/servicios/itr/" class="svc-card">
        <div class="svc-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
            alt="Transporte ITR importación exportación desde Medellín" loading="lazy">
          <div class="svc-img-ov"></div>
          <div class="svc-tag-label">Internacional</div>
        </div>
        <div class="svc-body">
          <h4>ITR — Import / Export</h4>
          <p>Contenedores desde Medellín a Buenaventura y Cartagena. BASC vigente.</p>
          <div class="svc-link">Ver servicio →</div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FLOTA DISPONIBLE EN MEDELLÍN
══════════════════════════════════════════ -->
<section class="fleet-strip">
  <div class="fleet-strip-inner">
    <div class="fleet-strip-header">
      <h3>Flota Propia <span>Disponible en Medellín</span></h3>
      <a href="/servicios/"
        style="font-family:'Barlow Condensed',sans-serif;font-size:13px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:rgba(255,255,255,.4);text-decoration:none;">Ver
        todos los servicios →</a>
    </div>
    <div class="fleet-chips">
      <div class="fleet-chip">
        <svg viewBox="0 0 24 24">
          <rect x="1" y="3" width="15" height="13" rx="1" />
          <path d="M16 8h4l3 5v4h-7V8z" />
          <circle cx="5.5" cy="18.5" r="2.5" />
          <circle cx="18.5" cy="18.5" r="2.5" />
        </svg>
        <div>
          <div class="fleet-chip-name">Turbos</div>
          <div class="fleet-chip-desc">Distribución urbana · carga ligera</div>
        </div>
      </div>
      <div class="fleet-chip">
        <svg viewBox="0 0 24 24">
          <rect x="1" y="3" width="15" height="13" rx="1" />
          <path d="M16 8h4l3 5v4h-7V8z" />
          <circle cx="5.5" cy="18.5" r="2.5" />
          <circle cx="18.5" cy="18.5" r="2.5" />
        </svg>
        <div>
          <div class="fleet-chip-name">Camiones</div>
          <div class="fleet-chip-desc">Carga semi masiva con carrocería</div>
        </div>
      </div>
      <div class="fleet-chip">
        <svg viewBox="0 0 24 24">
          <rect x="1" y="3" width="15" height="13" rx="1" />
          <path d="M16 8h4l3 5v4h-7V8z" />
          <circle cx="5.5" cy="18.5" r="2.5" />
          <circle cx="18.5" cy="18.5" r="2.5" />
        </svg>
        <div>
          <div class="fleet-chip-name">Volcos</div>
          <div class="fleet-chip-desc">Autodescargables para granel</div>
        </div>
      </div>
      <div class="fleet-chip">
        <svg viewBox="0 0 24 24">
          <rect x="1" y="3" width="15" height="13" rx="1" />
          <path d="M16 8h4l3 5v4h-7V8z" />
          <circle cx="5.5" cy="18.5" r="2.5" />
          <circle cx="18.5" cy="18.5" r="2.5" />
        </svg>
        <div>
          <div class="fleet-chip-name">Patinetas</div>
          <div class="fleet-chip-desc">Carga masiva de gran volumen</div>
        </div>
      </div>
      <div class="fleet-chip">
        <svg viewBox="0 0 24 24">
          <rect x="1" y="3" width="15" height="13" rx="1" />
          <path d="M16 8h4l3 5v4h-7V8z" />
          <circle cx="5.5" cy="18.5" r="2.5" />
          <circle cx="18.5" cy="18.5" r="2.5" />
        </svg>
        <div>
          <div class="fleet-chip-name">Tractocamiones</div>
          <div class="fleet-chip-desc">Máxima capacidad · ITR puertos</div>
        </div>
      </div>
      <div class="fleet-chip">
        <svg viewBox="0 0 24 24">
          <ellipse cx="12" cy="5" rx="9" ry="3" />
          <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
          <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
        </svg>
        <div>
          <div class="fleet-chip-name">Cisternas</div>
          <div class="fleet-chip-desc">Líquidos peligrosos y graneles</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CÓMO LLEGAR
══════════════════════════════════════════ -->
<section class="directions">
  <div class="directions-inner">
    <div class="directions-text">
      <div class="eyebrow">Cómo llegar</div>
      <h2>Acceso a Nuestra <span>Sede en Medellín</span></h2>
      <div class="directions-modes">
        <div class="dir-mode">
          <div class="dir-mode-header">
            <div class="dir-mode-icon"><svg viewBox="0 0 24 24">
                <rect x="1" y="3" width="15" height="13" rx="1" />
                <path d="M16 8h4l3 5v4h-7V8z" />
                <circle cx="5.5" cy="18.5" r="2.5" />
                <circle cx="18.5" cy="18.5" r="2.5" />
              </svg></div>
            <div class="dir-mode-title">En Vehículo Particular</div>
          </div>
          <p>Acceso directo por la Calle 64 desde el Centro de Medellín, a pocas cuadras de la Avenida Oriental y el
            sector de La Candelaria. Parqueadero disponible en la zona.</p>
        </div>
        <div class="dir-mode">
          <div class="dir-mode-header">
            <div class="dir-mode-icon"><svg viewBox="0 0 24 24">
                <rect x="3" y="11" width="18" height="10" rx="2" />
                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
              </svg></div>
            <div class="dir-mode-title">En Metro</div>
          </div>
          <p>Bajarse en la estación <strong>Parque Berrío</strong> (Línea A) y caminar aproximadamente 8 minutos hacia
            occidente por la Calle 58 hasta la Calle 64.</p>
        </div>
        <div class="dir-mode">
          <div class="dir-mode-header">
            <div class="dir-mode-icon"><svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg></div>
            <div class="dir-mode-title">En Bus / SITVA</div>
          </div>
          <p>Múltiples rutas del SITVA pasan por la Avenida Oriental. Bajarse en el cruce de Av. Oriental con Calle 64,
            a media cuadra de la sede.</p>
        </div>
      </div>
    </div>
    <div class="landmarks">
      <div class="landmark-card">
        <div class="landmark-icon"><svg viewBox="0 0 24 24">
            <rect x="3" y="3" width="7" height="7" rx="1" />
            <rect x="14" y="3" width="7" height="7" rx="1" />
            <rect x="3" y="14" width="7" height="7" rx="1" />
            <rect x="14" y="14" width="7" height="7" rx="1" />
          </svg></div>
        <div class="landmark-body">
          <h5>Puntos de Referencia</h5>
          <p>Parque de Berrío, Centro Administrativo La Alpujarra, Palacio de la Cultura Rafael Uribe Uribe, Banco de la
            República.</p>
        </div>
      </div>
      <div class="landmark-card">
        <div class="landmark-icon"><svg viewBox="0 0 24 24">
            <rect x="1" y="3" width="15" height="13" rx="1" />
            <path d="M16 8h4l3 5v4h-7V8z" />
            <circle cx="5.5" cy="18.5" r="2.5" />
            <circle cx="18.5" cy="18.5" r="2.5" />
          </svg></div>
        <div class="landmark-body">
          <h5>Acceso para Vehículos de Carga</h5>
          <p>Para camiones y tractocamiones: acceso por la Calle 64 en los horarios permitidos por la Secretaría de
            Movilidad de Medellín. Consultar restricciones vigentes antes de programar visitas con vehículos pesados.
          </p>
        </div>
      </div>
      <div class="landmark-card">
        <div class="landmark-icon"><svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg></div>
        <div class="landmark-body">
          <h5>Visitas Comerciales</h5>
          <p>Lunes a viernes 8:00am–6:00pm · Sábados 8:00am–1:00pm. Se recomienda llamar al PBX (604) 527 3300 con
            anticipación para agendar la visita.</p>
        </div>
      </div>
      <div class="landmark-card">
        <div class="landmark-icon"><svg viewBox="0 0 24 24">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" />
          </svg></div>
        <div class="landmark-body">
          <h5>Parqueadero</h5>
          <p>Parqueaderos públicos disponibles en la zona de La Candelaria. El más cercano a media cuadra sobre la
            Carrera 56.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     OTRAS SUCURSALES
══════════════════════════════════════════ -->
<section class="other-branches">
  <div class="other-branches-inner">
    <div class="other-branches-header">
      <h3>Otras Sucursales en Colombia</h3>
      <a href="/sucursales/" class="btn-outline-blue">Ver todas →</a>
    </div>
    <div class="ob-grid">
      <a href="/sucursales/sucursal-bogota/" class="ob-card">
        <div class="ob-city">Bogotá</div>
        <div class="ob-dept">Cundinamarca</div>
        <div class="ob-addr">Av. Troncal de Occidente No. 18-76 Of. 301</div>
        <div class="ob-phone">312 826 5078</div>
      </a>
      <a href="/sucursales/sucursal-cali/" class="ob-card">
        <div class="ob-city">Cali</div>
        <div class="ob-dept">Valle del Cauca</div>
        <div class="ob-addr">Bloque A3 Oficina 104, Cencar 1 Piso</div>
        <div class="ob-phone">310 369 5787</div>
      </a>
      <a href="/sucursales/sucursal-barranquilla/" class="ob-card">
        <div class="ob-city">Barranquilla</div>
        <div class="ob-dept">Atlántico</div>
        <div class="ob-addr">Cra. 28 #38-345 Av. Circunvalar</div>
        <div class="ob-phone">310 442 7076</div>
      </a>
      <a href="/sucursales/sucursal-cartagena/" class="ob-card">
        <div class="ob-city">Cartagena</div>
        <div class="ob-dept">Bolívar</div>
        <div class="ob-addr">Diagonal 21 N.° 45A–11, Av. El Bosque</div>
        <div class="ob-phone">314 772 8740</div>
      </a>
      <a href="/sucursales/sucursal-buenaventura/" class="ob-card">
        <div class="ob-city">Buenaventura</div>
        <div class="ob-dept">Valle del Cauca</div>
        <div class="ob-addr">Calle 7B N.° 4–52 Piso 2</div>
        <div class="ob-phone">313 659 7359</div>
      </a>
      <a href="/sucursales/sucursal-buga/" class="ob-card">
        <div class="ob-city">Buga</div>
        <div class="ob-dept">Valle del Cauca</div>
        <div class="ob-addr">Cra. 12A N.° 6Sur–94</div>
        <div class="ob-phone">313 655 3232</div>
      </a>
      <a href="/sucursales/sucursal-manizales/" class="ob-card">
        <div class="ob-city">Manizales</div>
        <div class="ob-dept">Caldas</div>
        <div class="ob-addr">Calle 110 N.° 34A–75</div>
        <div class="ob-phone">310 369 5787</div>
      </a>
      <a href="/sucursales/" class="ob-card"
        style="background:var(--ts-gray-bg);display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;min-height:100px;">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#C8D0DC" stroke-width="1.5"
          stroke-linecap="round" style="margin-bottom:7px;">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
          <circle cx="12" cy="10" r="3" />
        </svg>
        <span
          style="font-family:'Barlow Condensed',sans-serif;font-size:12px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#C8D0DC;">Ver
          todas las sucursales</span>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA + FORMULARIO
══════════════════════════════════════════ -->
<section class="cta">
  <div class="cta-inner">
    <div class="cta-text">
      <div class="eyebrow" style="margin-bottom:12px;">Hablemos hoy</div>
      <h2>Cotice su Transporte de Carga <span>en Medellín</span></h2>
      <p>Cuéntenos el tipo de carga, la ruta y el volumen. El equipo de nuestra sede principal en Medellín le diseña la
        solución logística ideal y le responde en menos de 24 horas hábiles.</p>
      <div class="cta-contact-list">
        <div class="cta-contact">
          <div class="cta-c-icon"><svg viewBox="0 0 24 24">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
            </svg></div>
          <div>
            <div class="cta-c-label">PBX Medellín</div>
            <div class="cta-c-val"><a href="tel:+576045273300">+57 604 527 3300</a></div>
          </div>
        </div>
        <div class="cta-contact">
          <div class="cta-c-icon"><svg viewBox="0 0 24 24">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg></div>
          <div>
            <div class="cta-c-label">Correo</div>
            <div class="cta-c-val">servicioalcliente@transestrella.com</div>
          </div>
        </div>
        <div class="cta-contact">
          <div class="cta-c-icon"><svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></div>
          <div>
            <div class="cta-c-label">Dirección</div>
            <div class="cta-c-val">Calle 64 #56-60, La Candelaria</div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-box">
      <h3>Solicitar Cotización — Medellín</h3>
      <p class="form-box-sub">Le respondemos desde nuestra sede principal en menos de 24 horas hábiles.</p>

      <?php echo do_shortcode('[forminator_form id="536"]'); ?>

      <a href="https://wa.me/576045273300?text=Hola%2C%20quiero%20cotizar%20transporte%20de%20carga%20en%20Medell%C3%ADn"
        target="_blank" class="form-wa">
        <svg viewBox="0 0 24 24">
          <path
            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
          <path
            d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
        </svg>
        <span class="form-wa-text">¿Respuesta inmediata? WhatsApp</span>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>