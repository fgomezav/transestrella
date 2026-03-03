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
  <?php echo file_get_contents(get_stylesheet_directory() . '/blog.css');
?>
</style>

<!-- HERO -->
<section class="hero">
  <div class="hero-glow"></div>
  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Inicio</a><span class="breadcrumb-sep">›</span>
      <span>Blog</span>
    </div>
    <div class="hero-text">
      <div class="eyebrow">Conocimiento logístico</div>
      <h1>Blog de Logística<em>y Carga Terrestre</em></h1>
      <p>Guías prácticas, normativa actualizada, tendencias del sector y novedades de Transportadora Estrella. Todo lo
        que necesita saber sobre el transporte de carga masiva en Colombia.</p>
    </div>
  </div>
</section>

<!-- CATEGORÍAS -->
<?php
$categories = get_categories(array(
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty' => false,
));
?>
<div class="cats">
  <div class="cats-inner">
    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="cat-btn active">Todos</a>
    <?php foreach ($categories as $category): ?>
    <?php if ($category->slug !== 'uncategorized'): ?>
    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="cat-btn">
      <?php echo esc_html($category->name); ?>
    </a>
    <?php
  endif; ?>
    <?php
endforeach; ?>
  </div>
</div>

<!-- ARTÍCULO DESTACADO -->
<?php
$featured_args = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'post_status' => 'publish',
  'ignore_sticky_posts' => true,
);
$featured_query = new WP_Query($featured_args);
if ($featured_query->have_posts()):
  $featured_query->the_post();
  // get term
  $cats = get_the_category();
  $cat_name = !empty($cats) ? $cats[0]->name : 'Sin Categoría';

  // get read time
  $word_count = str_word_count(strip_tags(get_the_content()));
  $read_time = ceil($word_count / 200);
  if ($read_time == 0)
    $read_time = 1;
?>
<section class="featured">
  <div class="featured-inner">
    <a href="<?php the_permalink(); ?>" class="featured-card">
      <div class="featured-img">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
        <?php
  else: ?>
        <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
          alt="<?php the_title_attribute(); ?>" loading="lazy">
        <?php
  endif; ?>
        <div class="featured-img-ov"></div>
        <div class="featured-tag">Artículo Destacado</div>
      </div>
      <div class="featured-body">
        <div class="featured-meta">
          <span class="meta-cat">
            <?php echo esc_html($cat_name); ?>
          </span>
          <span class="meta-sep">·</span>
          <span class="meta-date">
            <?php echo get_the_date(); ?>
          </span>
          <span class="meta-sep">·</span>
          <span class="meta-date">
            <?php echo $read_time; ?> min lectura
          </span>
        </div>
        <h2>
          <?php the_title(); ?>
        </h2>
        <p>
          <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
        </p>
        <span class="read-more">Leer artículo completo <svg viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6" />
          </svg></span>
      </div>
    </a>
  </div>
</section>
<?php
  wp_reset_postdata();
endif;
?>

<!-- GRID ARTÍCULOS -->
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset = 1 + ($paged - 1) * 9;

$articles_args = array(
  'post_type' => 'post',
  'posts_per_page' => 9,
  'offset' => $offset,
  'post_status' => 'publish',
  'ignore_sticky_posts' => true,
);

$articles_query = new WP_Query($articles_args);

// Recalcular paginación manualmente tras usar offset (restamos 1 por el post destacado)
$total_posts = wp_count_posts('post')->publish;
$articles_query->found_posts = max(0, $total_posts - 1);
$articles_query->max_num_pages = ceil($articles_query->found_posts / 9);

if ($articles_query->have_posts()):
?>
<section class="articles">
  <div class="articles-inner">
    <div class="articles-header">
      <h3>Artículos <span>Recientes</span></h3>
    </div>
    <div class="articles-grid">
      <?php
  while ($articles_query->have_posts()):
    $articles_query->the_post();
    $cats = get_the_category();
    $cat_name = !empty($cats) ? $cats[0]->name : 'Sin Categoría';
    $word_count = str_word_count(strip_tags(get_the_content()));
    $read_time = ceil($word_count / 200);
    if ($read_time == 0)
      $read_time = 1;
?>
      <a href="<?php the_permalink(); ?>" class="art-card">
        <div class="art-img">
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
          <?php
    else: ?>
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
            alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php
    endif; ?>
          <div class="art-img-ov"></div>
          <div class="art-cat">
            <?php echo esc_html($cat_name); ?>
          </div>
        </div>
        <div class="art-body">
          <div class="art-meta"><span class="art-date">
              <?php echo get_the_date('j M Y'); ?>
            </span><span class="art-read-time">
              <?php echo $read_time; ?> min
            </span></div>
          <h4>
            <?php the_title(); ?>
          </h4>
          <p>
            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
          </p>
          <span class="art-link">Leer más <svg viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6" />
            </svg></span>
        </div>
      </a>
      <?php
  endwhile;
?>
    </div>

    <div class="pagination" style="margin-top:40px;text-align:center;">
      <?php
  echo paginate_links(array(
    'total' => $articles_query->max_num_pages,
    'prev_text' => '← Anterior',
    'next_text' => 'Siguiente →'
  ));
?>
    </div>
  </div>
</section>
<?php
  wp_reset_postdata();
endif;
?>

<!-- NEWSLETTER -->
<section class="newsletter">
  <div class="newsletter-inner">
    <div class="nl-text">
      <div class="eyebrow">Manténgase informado</div>
      <h2>Novedades de Logística<br><span>en su Correo</span></h2>
      <p>Reciba los nuevos artículos, actualizaciones normativas y guías prácticas de transporte de carga masiva
        directamente en su bandeja de entrada. Sin spam, solo contenido útil para su operación.</p>
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

      <?php echo do_shortcode('[forminator_form id="1758"]'); ?>

      <p class="nl-privacy">Al suscribirse acepta nuestra <a href="/politica-privacidad/">Política de Privacidad</a>
        y el tratamiento de datos conforme a la Ley 1581 de 2012.</p>
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
        <div class="topic-icon"><svg viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <polyline points="14 2 14 8 20 8" />
            <line x1="16" y1="13" x2="8" y2="13" />
            <line x1="16" y1="17" x2="8" y2="17" />
            <polyline points="10 9 9 9 8 9" />
          </svg></div>
        <div class="topic-name">Normativa y Regulación</div>
        <div class="topic-count">Decretos, resoluciones y requisitos legales</div>
        <div class="topic-desc">Decreto 1609, ISO 9001, BASC, SuperTransporte, regulación de carga peligrosa y normativa
          de comercio exterior vigente en Colombia.</div>
      </a>
      <a href="/blog/categoria/logistica/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24">
            <rect x="1" y="3" width="15" height="13" rx="1" />
            <path d="M16 8h4l3 5v4h-7V8z" />
            <circle cx="5.5" cy="18.5" r="2.5" />
            <circle cx="18.5" cy="18.5" r="2.5" />
          </svg></div>
        <div class="topic-name">Logística Terrestre</div>
        <div class="topic-count">Rutas, corredores y operaciones</div>
        <div class="topic-desc">Corredores viales de Colombia, tiempos de tránsito, carga masiva vs semi masiva,
          planificación de rutas y buenas prácticas operativas.</div>
      </a>
      <a href="/blog/categoria/comercio-exterior/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="2" y1="12" x2="22" y2="12" />
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
          </svg></div>
        <div class="topic-name">Comercio Exterior</div>
        <div class="topic-count">Importación, exportación y puertos</div>
        <div class="topic-desc">Operaciones ITR, terminales portuarios, documentación aduanera, DIAN, agentes de carga y
          la conexión terrestre con los puertos colombianos.</div>
      </a>
      <a href="/blog/categoria/flota-seguridad/" class="topic-card">
        <div class="topic-icon"><svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg></div>
        <div class="topic-name">Flota y Seguridad</div>
        <div class="topic-count">GPS, mantenimiento y siniestralidad</div>
        <div class="topic-desc">Seguimiento vehicular, mantenimiento preventivo, reducción de siniestros, seguridad en
          ruta y protección de la carga en tránsito.</div>
      </a>
    </div>
  </div>
</section>

<!-- CTA STRIP -->
<section class="cta-strip">
  <div class="cta-strip-inner">
    <div class="cta-strip-text">
      <h2>¿Listo para optimizar <span>su logística de carga?</span></h2>
      <p>Cuéntenos su operación y le diseñamos la solución ideal. 30 años de experiencia en carga masiva a su
        disposición.</p>
    </div>
    <div class="cta-strip-btns">
      <a href="<?php echo home_url('/contactanos/'); ?>" class="btn-gold">Solicitar Cotización →</a>
      <a href="<?php echo home_url('/servicios/'); ?>" class="btn-white-outline">Ver Servicios</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
