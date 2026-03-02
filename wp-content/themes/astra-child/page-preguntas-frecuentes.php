<?php
/**
 * Template Name: Preguntas Frecuentes
 * Template Post Type: page
 */

get_header(); ?>

<style>
/* 
  Estilos compartidos para faq cargados desde /wp-content/themes/astra-child/faq.css.
*/
<?php echo file_get_contents( get_stylesheet_directory() . '/faq.css' ); ?>
</style>

<!-- HERO -->
<section class="hero">
  <div class="hero-glow"></div>
  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="/">Inicio</a><span class="breadcrumb-sep">›</span>
      <span>Preguntas Frecuentes</span>
    </div>
    <div class="hero-grid">
      <div>
        <div class="eyebrow">Centro de ayuda</div>
        <h1>Preguntas<em>Frecuentes</em></h1>
        <p class="hero-desc">Todo lo que necesita saber sobre nuestros servicios de transporte de carga masiva en Colombia. Si no encuentra su respuesta, escríbanos por WhatsApp o llame a la sucursal más cercana.</p>
      </div>
      <div class="hero-stats-box">
        <div class="hstat">
          <div class="hstat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
          <div><div class="hstat-num">20+</div><div class="hstat-lbl">Preguntas resueltas</div></div>
        </div>
        <hr class="hstat-divider">
        <div class="hstat">
          <div class="hstat-icon"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
          <div><div class="hstat-num">4</div><div class="hstat-lbl">Servicios especializados</div></div>
        </div>
        <hr class="hstat-divider">
        <div class="hstat">
          <div class="hstat-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div><div class="hstat-num">8</div><div class="hstat-lbl">Sucursales en Colombia</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FILTROS -->
<nav class="cat-bar">
  <div class="cat-bar-inner">
    <button class="cat-btn active">Todos</button>
    <button class="cat-btn">Servicios y cobertura</button>
    <button class="cat-btn">Cotización y tarifas</button>
    <button class="cat-btn">Flota y seguimiento</button>
    <button class="cat-btn">Normativa</button>
    <button class="cat-btn">Sucursales</button>
  </div>
</nav>

<!-- LAYOUT -->
<div class="page-layout">

  <!-- PREGUNTAS -->
  <main>
    <div class="faq-groups">

      <!-- GRUPO 1: SERVICIOS Y COBERTURA -->
      <div class="faq-group" id="servicios">
        <div class="faq-group-header">
          <div class="faq-group-icon"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
          <div class="faq-group-title">Servicios y Cobertura</div>
          <span class="faq-count">5 preguntas</span>
        </div>

        <div class="faq-item open">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué tipos de carga transporta Transportadora Estrella?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Nos especializamos en <strong>carga masiva y semi masiva terrestre</strong> a nivel nacional. Esto incluye materias primas industriales, productos agrícoles a granel, materiales de construcción, mercancías generales de alto volumen y mercancías peligrosas bajo normativa vigente.</p>
            <p>No gestionamos paquetería ni envíos individuales. Si su operación requiere mover grandes volúmenes con regularidad, somos su aliado ideal.</p>
            <div style="margin-top:14px;display:flex;flex-wrap:wrap;">
              <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="svc-pill"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg><span>Carga Nacional</span></a>
              <a href="/servicios/transporte-urbano-de-mercancias/" class="svc-pill"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg><span>Transporte Urbano</span></a>
              <a href="/servicios/transporte-de-carga-peligrosa/" class="svc-pill"><svg viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg><span>Carga Peligrosa</span></a>
              <a href="/servicios/itr/" class="svc-pill"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg><span>ITR Internacional</span></a>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Cubren todo el territorio nacional?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Sí. Contamos con cobertura en todo el territorio colombiano gracias a nuestra red de <strong>8 sucursales estratégicamente ubicadas</strong> en los principales corredores logísticos del país: Medellín, Bogotá, Cali, Barranquilla, Cartagena, Buenaventura, Buga y Manizales.</p>
            <p>Esta presencia nos permite reducir tiempos de tránsito y ofrecer atención local especializada en cada región. Visite la <a href="/sucursales/" class="internal">página de sucursales</a> para conocer la oficina más cercana a su empresa.</p>
            <div style="margin-top:12px;display:flex;flex-wrap:wrap;">
              <a href="/sucursales/sucursal-medellin/" class="branch-pill"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>Medellín</span></a>
              <a href="/sucursales/sucursal-bogota/" class="branch-pill"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>Bogotá</span></a>
              <a href="/sucursales/sucursal-cali/" class="branch-pill"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>Cali</span></a>
              <a href="/sucursales/sucursal-buenaventura/" class="branch-pill"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>Buenaventura</span></a>
              <a href="/sucursales/" class="branch-pill"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg><span>Ver todas →</span></a>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Hacen transporte hacia los puertos de Buenaventura y Cartagena?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Sí. A través de nuestro servicio de <a href="/servicios/itr/" class="internal">ITR — Importación y Exportación</a>, movilizamos carga desde y hacia los puertos de <strong>Buenaventura</strong> y <strong>Cartagena</strong>, los dos principales puertos marítimos de Colombia.</p>
            <p>Contamos con presencia directa en ambas ciudades. Nuestra <a href="/sucursales/sucursal-buenaventura/" class="internal">sucursal de Buenaventura</a> (Calle 7B N.° 4–52) y nuestra <a href="/sucursales/cartagena/" class="internal">sucursal de Cartagena</a> (Diagonal 21 N.° 45A–11) coordinan directamente las operaciones portuarias con aliados estratégicos certificados BASC.</p>
            <div class="faq-note"><strong>Nota:</strong> Para operaciones de comercio exterior, la certificación BASC de nuestra flota es obligatoria para el acceso a las terminales portuarias. <a href="/blog/que-es-certificacion-basc/" class="internal">Conozca qué es BASC y por qué es clave para su operación.</a></div>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Transportan mercancías peligrosas?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Sí. Contamos con un servicio especializado de <a href="/servicios/transporte-de-carga-peligrosa/" class="internal">transporte de mercancías peligrosas</a> bajo la normativa colombiana vigente, incluyendo el Decreto 1609 de 2002 y sus actualizaciones.</p>
            <p>Nuestra flota certificada incluye vehículos tipo cisterna y unidades adaptadas con los protocolos de seguridad requeridos: señalización NFPA, hojas de seguridad (SDS), equipos de emergencia y conductores entrenados en manejo de materiales peligrosos.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Hacen distribución urbana en las ciudades principales?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Sí. Nuestro servicio de <a href="/servicios/transporte-urbano-de-mercancias/" class="internal">transporte urbano de mercancías</a> opera en las principales ciudades del país, adaptado al modelo logístico específico de cada cliente. Coordinamos rutas, horarios y protocolos de entrega según las restricciones de circulación de cada municipio.</p>
            <p>Para distribución urbana en ciudades como Medellín, Bogotá, Cali o Barranquilla, contáctese directamente con la <a href="/sucursales/" class="internal">sucursal de su ciudad</a> para recibir una propuesta adaptada a su operación.</p>
          </div>
        </div>
      </div>

      <!-- GRUPO 2: COTIZACIÓN Y TARIFAS -->
      <div class="faq-group" id="cotizacion">
        <div class="faq-group-header">
          <div class="faq-group-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <div class="faq-group-title">Cotización y Tarifas</div>
          <span class="faq-count">4 preguntas</span>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Cómo solicito una cotización?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Puede solicitar una cotización por tres vías:</p>
            <p><strong>1. Formulario web:</strong> Complete el formulario en nuestra <a href="/contactanos/" class="internal">página de contacto</a> con los detalles de su carga (origen, destino, tipo de mercancía, peso y frecuencia). Le respondemos en menos de 24 horas hábiles.</p>
            <p><strong>2. WhatsApp:</strong> Escríbanos directamente al +57 604 527 3300 para una respuesta inmediata.</p>
            <p><strong>3. Sucursal:</strong> Llame o visita personalmente la <a href="/sucursales/" class="internal">sucursal más cercana</a> a su empresa para atención personalizada.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué información necesito para pedir una cotización?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Para preparar una cotización precisa necesitamos:</p>
            <p><strong>Ciudad de origen</strong> y <strong>ciudad de destino</strong> del despacho. <strong>Tipo de mercancía</strong> (descripción del producto y si aplica clasificación de peligrosidad). <strong>Peso o volumen</strong> aproximado. <strong>Frecuencia</strong> de los envíos (único, semanal, mensual). Y si la operación involucra puertos, indicar si es importación o exportación para activar el servicio de <a href="/servicios/itr/" class="internal">ITR</a>.</p>
            <div class="faq-note">Cuanto más detalle nos proporcione, más ajustada será la tarifa. Para operaciones recurrentes de alto volumen ofrecemos condiciones comerciales especiales.</div>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿En cuánto tiempo recibo respuesta a mi cotización?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Las solicitudes enviadas por el formulario web de <a href="/contactanos/" class="internal">Contáctanos</a> reciben respuesta en <strong>menos de 24 horas hábiles</strong>. Las solicitudes por WhatsApp o llamada directa a una <a href="/sucursales/" class="internal">sucursal</a> son atendidas en tiempo real durante el horario de atención (lunes a viernes 8:00 a.m. – 6:00 p.m., sábados 8:00 a.m. – 1:00 p.m.).</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Tienen tarifas especiales para clientes con operaciones frecuentes?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Sí. Para empresas con operaciones de carga masiva regulares (semanal, quincenal o mensual) diseñamos <strong>acuerdos comerciales a medida</strong> que incluyen tarifas preferenciales, prioridad de despacho y un ejecutivo de cuenta dedicado.</p>
            <p>Para iniciar esta conversación, comuníquese con la <a href="/sucursales/" class="internal">sucursal de su ciudad</a> o escríbanos a <a href="mailto:servicioalcliente@transestrella.com" class="internal">servicioalcliente@transestrella.com</a>.</p>
          </div>
        </div>
      </div>

      <!-- GRUPO 3: FLOTA Y SEGUIMIENTO -->
      <div class="faq-group" id="flota">
        <div class="faq-group-header">
          <div class="faq-group-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <div class="faq-group-title">Flota y Seguimiento</div>
          <span class="faq-count">4 preguntas</span>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué tipos de vehículos tiene disponibles?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Contamos con flota propia diversificada para adaptarnos a cada tipo de operación:</p>
            <p><strong>Turbos</strong> para distribución urbana y carga de menor volumen. <strong>Camiones</strong> con carrocería para carga semi masiva intermedia. <strong>Volcos</strong> autodescargables para granel (arena, grava, carbón). <strong>Patinetas</strong> (tractocamión + semirremolque plano) para carga masiva de gran volumen. <strong>Tractocamiones con cisterna</strong> para líquidos y mercancías peligrosas. Y unidades adaptadas para contenedores en operaciones de <a href="/servicios/itr/" class="internal">comercio exterior ITR</a>.</p>
            <p>Todos los vehículos cuentan con GPS y mantenimiento preventivo riguroso.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Puedo rastrear mi carga en tiempo real?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Sí. Toda nuestra flota opera con <strong>sistema de monitoreo vehicular GPS 24/7</strong>. Como cliente puede consultar en cualquier momento la ubicación y el estado de su carga en tránsito a través del ejecutivo de cuenta asignado a su operación.</p>
            <p>Para operaciones críticas o de alto valor, contáctese con la <a href="/sucursales/" class="internal">sucursal de su ciudad</a> para conocer las opciones de acceso directo al sistema de seguimiento.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿La flota es propia o de terceros?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Contamos con <strong>flota propia certificada</strong> como base de nuestra operación, lo que nos permite garantizar los estándares de calidad, seguridad y trazabilidad que exigen nuestras certificaciones <strong>ISO 9001</strong> e <strong>BASC</strong>.</p>
            <p>En temporadas de alta demanda o para operaciones de gran escala, complementamos con aliados de transporte debidamente habilitados ante el <strong>Ministerio de Transporte</strong> y registrados en el <strong>RNDC</strong>.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué pasa si ocurre un inconveniente con mi carga en ruta?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Nuestro centro de monitoreo opera las <strong>24 horas, los 7 días de la semana</strong>. Ante cualquier novedad en ruta (accidente, cierre vial, retraso), el equipo de operaciones activa de inmediato el protocolo de contingencia e informa al cliente.</p>
            <p>Adicionalmente, puede comunicarse directamente con la <a href="/sucursales/" class="internal">sucursal de origen o destino</a> de su despacho para recibir atención personalizada.</p>
          </div>
        </div>
      </div>

      <!-- GRUPO 4: NORMATIVA -->
      <div class="faq-group" id="normativa">
        <div class="faq-group-header">
          <div class="faq-group-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
          <div class="faq-group-title">Normativa y Certificaciones</div>
          <span class="faq-count">4 preguntas</span>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué certificaciones tiene Transportadora Estrella?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Operamos con las tres certificaciones más relevantes del sector logístico colombiano:</p>
            <p><strong>ISO 9001 — ICONTEC (SC6003-1):</strong> Sistema de gestión de calidad que garantiza el mejoramiento continuo de nuestros procesos. <strong>Certificación BASC:</strong> Business Alliance for Secure Commerce, obligatoria para operar en las terminales portuarias de Colombia. <strong>Vigilados por SuperTransporte:</strong> Empresa habilitada, inspeccionada y regulada por la Superintendencia de Transporte.</p>
            <p>También somos miembros activos de <strong>Colfecar</strong>, <strong>Defencarga</strong> y <strong>Agrem</strong>.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué es el RNDC y cómo les afecta?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>El <strong>Registro Nacional de Despachos de Carga (RNDC)</strong> es la plataforma del Ministerio de Transporte que registra y valida todos los despachos de carga terrestre en Colombia. Operamos con cumplimiento pleno del RNDC, incluyendo la facturación electrónica obligatoria para el transporte de carga vigente desde 2025.</p>
            <p>Como cliente generador de carga, también tiene obligaciones ante el RNDC. Le recomendamos leer nuestro comunicado sobre <a href="/blog/obligaciones-del-generador-de-carga/" class="internal">obligaciones del generador de carga en el RNDC</a> para estar al día con la normativa.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Qué documentos se exigen para el transporte de carga peligrosa?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>Para el <a href="/servicios/transporte-de-carga-peligrosa/" class="internal">transporte de mercancías peligrosas</a> bajo el Decreto 1609 de 2002, se requieren entre otros: Manifiesto de carga, Hoja de seguridad (SDS/MSDS) del producto, Plan de contingencia vigente, Tarjeta de emergencia, Licencia de tránsito especial (según aplique) y Certificado de entrenamiento del conductor.</p>
            <p>Nuestro equipo gestiona y verifica toda la documentación antes de cada despacho. Contáctenos para conocer los requisitos específicos de su mercancía.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span class="faq-q-text">¿Cómo impacta el Decreto 1017 de 2025 a mi operación?</span>
            <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div>
          </div>
          <div class="faq-a">
            <p>El Decreto 1017 de 2025 establece nuevos parámetros para los <strong>tiempos logísticos en el transporte de carga terrestre</strong>, afectando los tiempos de cargue, descargue y espera en planta. Incumplir estos tiempos genera recargos para el generador de carga.</p>
            <p>Le recomendamos leer nuestro <a href="/blog/decreto-1017-2025-tiempos-logisticos-transporte/" class="internal">comunicado completo sobre el Decreto 1017</a> para entender el impacto concreto en su cadena logística. Para consultas específicas, contacte la <a href="/sucursales/" class="internal">sucursal más cercana</a>.</p>
          </div>
        </div>
      </div>

    </div><!-- /faq-groups -->
  </main>

  <!-- SIDEBAR -->
  <aside class="faq-sidebar">

    <div class="sidebar-section">
      <div class="sidebar-section-title">Nuestros Servicios</div>
      <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="svc-card-sm">
        <div class="svc-card-icon"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <div>
          <div class="svc-card-name">Carga Nacional</div>
          <div class="svc-card-sub">Cobertura total Colombia</div>
        </div>
        <div class="svc-card-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
      </a>
      <a href="/servicios/transporte-urbano-de-mercancias/" class="svc-card-sm">
        <div class="svc-card-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></div>
        <div>
          <div class="svc-card-name">Transporte Urbano</div>
          <div class="svc-card-sub">Distribución en ciudades</div>
        </div>
        <div class="svc-card-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
      </a>
      <a href="/servicios/transporte-de-carga-peligrosa/" class="svc-card-sm">
        <div class="svc-card-icon"><svg viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
        <div>
          <div class="svc-card-name">Carga Peligrosa</div>
          <div class="svc-card-sub">Bajo normativa vigente</div>
        </div>
        <div class="svc-card-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
      </a>
      <a href="/servicios/itr/" class="svc-card-sm">
        <div class="svc-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <div>
          <div class="svc-card-name">ITR Internacional</div>
          <div class="svc-card-sub">Puertos Buenaventura · Cartagena</div>
        </div>
        <div class="svc-card-arrow"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
      </a>
    </div>

    <div class="sidebar-section">
      <div class="sidebar-section-title">Sucursales</div>
      <div class="branch-list">
        <a href="/sucursales/sucursal-medellin/" class="branch-item main">
          <div class="branch-dot"></div>
          <div class="branch-item-name">Medellín</div>
          <div class="branch-item-phone">604 527 3300</div>
        </a>
        <a href="/sucursales/sucursal-bogota/" class="branch-item">
          <div class="branch-dot"></div>
          <div class="branch-item-name">Bogotá</div>
          <div class="branch-item-phone">312 826 5078</div>
        </a>
        <a href="/sucursales/sucursal-cali/" class="branch-item">
          <div class="branch-dot"></div>
          <div class="branch-item-name">Cali</div>
          <div class="branch-item-phone">310 369 5787</div>
        </a>
        <a href="/sucursales/sucursal-barranquilla/" class="branch-item">
          <div class="branch-dot"></div>
          <div class="branch-item-name">Barranquilla</div>
          <div class="branch-item-phone">310 442 7076</div>
        </a>
        <a href="/sucursales/sucursal-cartagena/" class="branch-item">
          <div class="branch-dot"></div>
          <div class="branch-item-name">Cartagena</div>
          <div class="branch-item-phone">314 772 8740</div>
        </a>
        <a href="/sucursales/sucursal-buenaventura/" class="branch-item">
          <div class="branch-dot"></div>
          <div class="branch-item-name">Buenaventura</div>
          <div class="branch-item-phone">313 659 7359</div>
        </a>
        <a href="/sucursales/" class="branch-item" style="border-style:dashed;justify-content:center;">
          <div class="branch-item-name" style="text-align:center;color:var(--ts-blue);">Ver Buga y Manizales →</div>
        </a>
      </div>
    </div>

    <div class="sidebar-cta">
      <h3>¿No encontró<br>su <span>Respuesta?</span></h3>
      <p>Nuestro equipo está disponible para resolver cualquier duda sobre su operación logística.</p>
      <a href="/contactanos/" class="sidebar-cta-btn">Contactar ahora →</a>
    </div>

  </aside>
</div>

<!-- INTERLINKING SERVICIOS -->
<section class="services-interlink">
  <div class="si-inner">
    <div class="si-header">
      <h2>Explore Nuestros <span>Servicios</span></h2>
      <a href="/servicios/">Ver todos los servicios →</a>
    </div>
    <div class="si-grid">
      <a href="/servicios/transporte-de-carga-terrestre-nacional/" class="si-card">
        <div class="si-card-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg" alt="Transporte de carga nacional Colombia" loading="lazy">
          <div class="si-card-ov"></div>
          <div class="si-card-tag">Nacional</div>
        </div>
        <div class="si-card-body">
          <div class="si-card-name">Carga Terrestre Nacional</div>
          <div class="si-card-desc">Cobertura total en Colombia. GPS 24/7 en toda la flota.</div>
        </div>
      </a>
      <a href="/servicios/transporte-urbano-de-mercancias/" class="si-card">
        <div class="si-card-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp" alt="Transporte urbano de mercancías" loading="lazy">
          <div class="si-card-ov"></div>
          <div class="si-card-tag">Urbano</div>
        </div>
        <div class="si-card-body">
          <div class="si-card-name">Transporte Urbano</div>
          <div class="si-card-desc">Distribución adaptada al modelo logístico de cada cliente.</div>
        </div>
      </a>
      <a href="/servicios/transporte-de-carga-peligrosa/" class="si-card">
        <div class="si-card-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp" alt="Transporte de carga peligrosa" loading="lazy">
          <div class="si-card-ov"></div>
          <div class="si-card-tag">Especializado</div>
        </div>
        <div class="si-card-body">
          <div class="si-card-name">Mercancías Peligrosas</div>
          <div class="si-card-desc">Protocolos certificados bajo normativa colombiana vigente.</div>
        </div>
      </a>
      <a href="/servicios/itr/" class="si-card">
        <div class="si-card-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg" alt="ITR importación exportación Colombia" loading="lazy">
          <div class="si-card-ov"></div>
          <div class="si-card-tag">Internacional</div>
        </div>
        <div class="si-card-body">
          <div class="si-card-name">ITR Internacional</div>
          <div class="si-card-desc">Importación y exportación. Puertos Buenaventura y Cartagena.</div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- INTERLINKING SUCURSALES -->
<section class="branches-interlink">
  <div class="bi-inner">
    <div class="bi-header">
      <h2>Atención Local en las <span>8 Sucursales</span></h2>
      <a href="/sucursales/">Ver todas las sucursales →</a>
    </div>
    <div class="bi-grid">
      <a href="/sucursales/sucursal-medellin/" class="bi-card main">
        <div class="bi-city">Medellín</div>
        <div class="bi-addr">Calle 64 #56-60, La Candelaria</div>
        <div class="bi-phone">PBX (604) 527 3300</div>
        <div class="bi-main-tag">★ Sede Principal</div>
      </a>
      <a href="/sucursales/sucursal-bogota/" class="bi-card">
        <div class="bi-city">Bogotá</div>
        <div class="bi-addr">Av. Troncal de Occidente No. 18-76 Of. 301</div>
        <div class="bi-phone">312 826 5078</div>
      </a>
      <a href="/sucursales/sucursal-cali/" class="bi-card">
        <div class="bi-city">Cali</div>
        <div class="bi-addr">Bloque A3 Oficina 104, Cencar 1 piso</div>
        <div class="bi-phone">310 369 5787</div>
      </a>
      <a href="/sucursales/sucursal-barranquilla/" class="bi-card">
        <div class="bi-city">Barranquilla</div>
        <div class="bi-addr">Cra. 28 #38-345 Av. Circunvalar</div>
        <div class="bi-phone">310 442 7076</div>
      </a>
      <a href="/sucursales/sucursal-cartagena/" class="bi-card">
        <div class="bi-city">Cartagena</div>
        <div class="bi-addr">Diagonal 21 N.° 45A–11, Av. El Bosque</div>
        <div class="bi-phone">314 772 8740</div>
      </a>
      <a href="/sucursales/sucursal-buenaventura/" class="bi-card">
        <div class="bi-city">Buenaventura</div>
        <div class="bi-addr">Calle 7B N.° 4–52 Piso 2</div>
        <div class="bi-phone">313 659 7359</div>
      </a>
      <a href="/sucursales/sucursal-buga/" class="bi-card">
        <div class="bi-city">Buga</div>
        <div class="bi-addr">Cra. 12A N.° 6Sur–94</div>
        <div class="bi-phone">313 655 3232</div>
      </a>
      <a href="/sucursales/sucursal-manizales/" class="bi-card">
        <div class="bi-city">Manizales</div>
        <div class="bi-addr">Calle 110 N.° 34A–75</div>
        <div class="bi-phone">310 369 5787</div>
      </a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-inner">
    <div style="display:inline-flex;align-items:center;gap:10px;font-family:var(--font-display);font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:var(--ts-gold);margin-bottom:14px;"><span style="width:34px;height:2px;background:var(--ts-gold);display:block;"></span>Hablemos hoy</div>
    <h2>¿Listo para Optimizar su<br><span>Operación Logística?</span></h2>
    <p>Más de 30 años conectando empresas con Colombia. Cuéntenos su necesidad y le diseñamos la solución de transporte de carga masiva ideal para su empresa.</p>
    <div class="cta-btns">
      <a href="/contactanos/" class="btn-primary">Solicitar cotización →</a>
      <a href="/sucursales/" class="btn-outline">Encontrar mi sucursal</a>
    </div>
  </div>
</section>



<script>
document.addEventListener('DOMContentLoaded', function() {

// Accordion toggle
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  });
});

});
</script>

<?php get_footer(); ?>
