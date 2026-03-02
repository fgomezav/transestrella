<?php
/**
 * Template Name: Blog (Posts Page)
 *
 * This is the template that displays all pages by default, or acts as home.php for the blog.
 */

get_header(); ?>

<style>
/* 
  Estilos del blog cargados desde /wp-content/themes/astra-child/blog.css.
*/
<?php echo file_get_contents( get_stylesheet_directory() . '/blog.css' ); ?>
</style>

<!-- HERO -->
<section class="hero">
  <div class="hero-glow"></div>
  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="/">Inicio</a><span class="breadcrumb-sep">›</span>
      <span>Blog</span>
    </div>
    <div class="hero-text">
      <div class="eyebrow">Conocimiento logístico</div>
      <h1>Blog de Logística<em>y Carga Terrestre</em></h1>
      <p>Guías prácticas, normativa actualizada, tendencias del sector y novedades de Transportadora Estrella. Todo lo que necesita saber sobre el transporte de carga masiva en Colombia.</p>
    </div>
  </div>
</section>

<!-- CATEGORÍAS -->
<div class="cats">
  <div class="cats-inner">
    <a href="/blog/" class="cat-btn active">Todos</a>
    <a href="/blog/categoria/normativa/" class="cat-btn">Normativa y Regulación</a>
    <a href="/blog/categoria/logistica/" class="cat-btn">Logística Terrestre</a>
    <a href="/blog/categoria/comercio-exterior/" class="cat-btn">Comercio Exterior</a>
    <a href="/blog/categoria/flota-seguridad/" class="cat-btn">Flota y Seguridad</a>
    <a href="/blog/categoria/eje-cafetero/" class="cat-btn">Eje Cafetero</a>
    <a href="/blog/categoria/noticias/" class="cat-btn">Noticias Empresa</a>
  </div>
</div>

<!-- ARTÍCULO DESTACADO -->
<section class="featured">
  <div class="featured-inner">
    <a href="/blog/decreto-1609-transporte-mercancias-peligrosas-colombia/" class="featured-card">
      <div class="featured-img">
        <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp" alt="Decreto 1609 transporte de mercancías peligrosas Colombia — Transportadora Estrella" loading="lazy">
        <div class="featured-img-ov"></div>
        <div class="featured-tag">Artículo Destacado</div>
      </div>
      <div class="featured-body">
        <div class="featured-meta">
          <span class="meta-cat">Normativa y Regulación</span>
          <span class="meta-sep">·</span>
          <span class="meta-date">14 de febrero de 2026</span>
          <span class="meta-sep">·</span>
          <span class="meta-date">8 min lectura</span>
        </div>
        <h2>Decreto 1609: Todo lo que debe saber sobre el transporte de mercancías peligrosas en Colombia</h2>
        <p>El Decreto 1609 de 2002 regula el transporte terrestre de materiales peligrosos en Colombia. Conozca los requisitos de documentación, las clases de riesgo ONU, las obligaciones del generador de carga y las sanciones por incumplimiento que aplica el Ministerio de Transporte.</p>
        <span class="read-more">Leer artículo completo <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
      </div>
    </a>
  </div>
</section>

<!-- GRID ARTÍCULOS -->
<section class="articles">
  <div class="articles-inner">
    <div class="articles-header">
      <h3>Artículos <span>Recientes</span></h3>
    </div>
    <div class="articles-grid">

      <a href="/blog/que-es-basc-certificacion-comercio-exterior/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg" alt="Qué es BASC certificación comercio exterior Colombia" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Comercio Exterior</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">3 feb 2026</span><span class="art-read-time">6 min</span></div>
          <h4>Qué es la certificación BASC y por qué es obligatoria para operar en los puertos colombianos</h4>
          <p>BASC (Business Alliance for Secure Commerce) es el estándar internacional de seguridad para el comercio exterior. Sin esta certificación, no es posible operar en los terminales de Buenaventura ni Cartagena. Le explicamos qué implica y cómo verificarla.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/corredor-logistico-medellin-bogota-colombia/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg" alt="Corredor logístico Medellín Bogotá Colombia carga masiva" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Logística Terrestre</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">21 ene 2026</span><span class="art-read-time">5 min</span></div>
          <h4>Corredor Medellín–Bogotá: tiempos, rutas y claves logísticas para el transporte de carga</h4>
          <p>El corredor Medellín–Bogotá es la ruta de carga más transitada de Colombia, con más de 400 km entre las dos principales ciudades del país. Conozca los tiempos reales, los puntos críticos y las consideraciones logísticas para planear sus envíos.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/diferencia-carga-masiva-semi-masiva-paqueteo/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp" alt="Diferencia entre carga masiva semi masiva y paqueteo Colombia" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Logística Terrestre</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">10 ene 2026</span><span class="art-read-time">4 min</span></div>
          <h4>Carga masiva, semi masiva y paqueteo: diferencias y cuándo aplica cada modalidad</h4>
          <p>No toda la carga es igual. Entender la diferencia entre transporte de carga masiva, semi masiva y paqueteo le ayudará a elegir el servicio correcto y a negociar tarifas más eficientes con su operador logístico.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/itr-importacion-exportacion-puertos-colombia/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg" alt="ITR importación exportación puertos Colombia Buenaventura Cartagena" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Comercio Exterior</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">18 dic 2025</span><span class="art-read-time">7 min</span></div>
          <h4>ITR en Colombia: cómo funciona el transporte internacional de carga por los puertos del Pacífico y el Caribe</h4>
          <p>El transporte internacional terrestre (ITR) conecta los terminales de Buenaventura y Cartagena con el interior del país. Entienda el proceso completo: gate in, inspección de aduana, documentación DIAN y entrega al cliente final.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/mantenimiento-preventivo-flota-transporte-carga/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg" alt="Mantenimiento preventivo flota transporte de carga Colombia" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Flota y Seguridad</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">5 dic 2025</span><span class="art-read-time">5 min</span></div>
          <h4>Por qué el mantenimiento preventivo de la flota es clave para reducir siniestros en carretera</h4>
          <p>Los accidentes de carga en Colombia tienen causas técnicas prevenibles en más del 60% de los casos. Un programa de mantenimiento preventivo riguroso no solo protege la mercancía — también reduce los costos operativos a largo plazo.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/transporte-cafe-verde-eje-cafetero-exportacion/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp" alt="Transporte café verde pergamino Eje Cafetero exportación Colombia" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Eje Cafetero</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">22 nov 2025</span><span class="art-read-time">6 min</span></div>
          <h4>Transporte de café verde para exportación: ruta desde el Eje Cafetero hasta los puertos colombianos</h4>
          <p>El café es el producto de exportación más emblemático de Colombia. Conozca el proceso logístico completo: desde la trilladora en Manizales, Pereira o Armenia hasta el embarque en Buenaventura o Cartagena, con trazabilidad BASC en toda la cadena.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/seguimiento-gps-carga-colombia-beneficios/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg" alt="Seguimiento GPS carga terrestre Colombia beneficios monitoreo" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Flota y Seguridad</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">8 nov 2025</span><span class="art-read-time">4 min</span></div>
          <h4>Seguimiento GPS 24/7: qué información debe exigirle a su empresa de transporte de carga</h4>
          <p>El monitoreo GPS no es solo saber dónde está el vehículo — es gestión de riesgo, cumplimiento de tiempos y visibilidad de la cadena logística. Le explicamos qué preguntar y qué datos son imprescindibles en cualquier operación.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/iso-9001-transporte-carga-colombia-que-garantiza/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg" alt="ISO 9001 transporte de carga Colombia qué garantiza certificación" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Normativa y Regulación</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">25 oct 2025</span><span class="art-read-time">5 min</span></div>
          <h4>ISO 9001 en transporte de carga: qué garantiza realmente esta certificación para su empresa</h4>
          <p>Muchas empresas dicen tener ISO 9001 pero no todas saben explicar qué implica en la práctica. Como generador de carga, entender qué exige esta norma le permite evaluar mejor a sus proveedores logísticos y reducir riesgos operativos.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

      <a href="/blog/corredor-logistico-buenaventura-cali-ruta-pacifico/" class="art-card">
        <div class="art-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp" alt="Corredor logístico Buenaventura Cali Ruta del Pacífico Colombia" loading="lazy">
          <div class="art-img-ov"></div>
          <div class="art-cat">Logística Terrestre</div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">11 oct 2025</span><span class="art-read-time">6 min</span></div>
          <h4>La Ruta del Pacífico: el corredor más exigente de Colombia y cómo optimizar el transporte de carga</h4>
          <p>Los 130 km entre Buenaventura y Cali concentran algunos de los mayores retos logísticos del país: pendientes, clima, alta densidad de tráfico pesado y restricciones de horario. Conozca las claves para operar este corredor sin contratiempos.</p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="newsletter">
  <div class="newsletter-inner">
    <div class="nl-text">
      <div class="eyebrow">Manténgase informado</div>
      <h2>Novedades de Logística<br><span>en su Correo</span></h2>
      <p>Reciba los nuevos artículos, actualizaciones normativas y guías prácticas de transporte de carga masiva directamente en su bandeja de entrada. Sin spam, solo contenido útil para su operación.</p>
      <div class="nl-tags">
        <span class="nl-tag">Normativa colombiana</span>
        <span class="nl-tag">Comercio exterior</span>
        <span class="nl-tag">Rutas y corredores</span>
        <span class="nl-tag">Seguridad vial</span>
        <span class="nl-tag">Novedades empresa</span>
      </div>
    </div>
    <div class="nl-form">
      <h3>Suscribirse al Blog</h3>
      <p>Nuevo contenido cada dos semanas. Se puede dar de baja en cualquier momento.</p>
      <div class="nl-forminator">
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        <p>Formulario Newsletter — Forminator</p>
        <span>[forminator_form id="536"] · Formulario de suscripción por correo</span>
      </div>
      <p class="nl-privacy">Al suscribirse acepta nuestra <a href="/politica-de-privacidad/">Política de Privacidad</a> y el tratamiento de datos conforme a la Ley 1581 de 2012.</p>
    </div>
  </div>
</section>

<!-- TEMAS POPULARES -->
<section class="topics">
  <div class="topics-inner">
    <div class="topics-header">
      <div class="eyebrow center">Explorar por tema</div>
      <h2>Categorías del <span>Blog</span></h2>
    </div>
    <div class="topics-grid">
      <a href="/blog/categoria/normativa/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
        <div class="topic-name">Normativa y Regulación</div>
        <div class="topic-count">Decretos, resoluciones y requisitos legales</div>
        <div class="topic-desc">Decreto 1609, ISO 9001, BASC, SuperTransporte, regulación de carga peligrosa y normativa de comercio exterior vigente en Colombia.</div>
      </a>
      <a href="/blog/categoria/logistica/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <div class="topic-name">Logística Terrestre</div>
        <div class="topic-count">Rutas, corredores y operaciones</div>
        <div class="topic-desc">Corredores viales de Colombia, tiempos de tránsito, carga masiva vs semi masiva, planificación de rutas y buenas prácticas operativas.</div>
      </a>
      <a href="/blog/categoria/comercio-exterior/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <div class="topic-name">Comercio Exterior</div>
        <div class="topic-count">Importación, exportación y puertos</div>
        <div class="topic-desc">Operaciones ITR, terminales portuarios, documentación aduanera, DIAN, agentes de carga y la conexión terrestre con los puertos colombianos.</div>
      </a>
      <a href="/blog/categoria/flota-seguridad/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
        <div class="topic-name">Flota y Seguridad</div>
        <div class="topic-count">GPS, mantenimiento y siniestralidad</div>
        <div class="topic-desc">Seguimiento vehicular, mantenimiento preventivo, reducción de siniestros, seguridad en ruta y protección de la carga en tránsito.</div>
      </a>
    </div>
  </div>
</section>

<!-- CTA STRIP -->
<section class="cta-strip">
  <div class="cta-strip-inner">
    <div class="cta-strip-text">
      <h2>¿Listo para optimizar <span>su logística de carga?</span></h2>
      <p>Cuéntenos su operación y le diseñamos la solución ideal. 30 años de experiencia en carga masiva a su disposición.</p>
    </div>
    <div class="cta-strip-btns">
      <a href="/contactanos/" class="btn-gold">Solicitar Cotización →</a>
      <a href="/servicios/" class="btn-white-outline">Ver Servicios</a>
    </div>
  </div>
</section>



<?php get_footer(); ?>
