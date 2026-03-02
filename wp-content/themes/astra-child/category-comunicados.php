<?php
/**
 * Template Name: Categoría Comunicados
 * 
 * Plantilla específica para la categoría "comunicados" (archive).
 * WordPress usará wp-content/themes/astra-child/category-comunicados.php automáticamente
 * si el slug de la categoría es "comunicados".
 */

get_header(); ?>

<style>
/* 
  Estilos de comunicados cargados desde /wp-content/themes/astra-child/comunicados.css.
*/
<?php echo file_get_contents( get_stylesheet_directory() . '/comunicados.css' ); ?>
</style>

<!-- HERO -->
<section class="hero">
  <div class="hero-glow"></div>
  <div class="hero-inner">
    <div>
      <div class="breadcrumb">
        <a href="<?php echo home_url('/'); ?>">Inicio</a><span class="breadcrumb-sep">›</span>
        <span>Comunicados</span>
      </div>
      <div class="eyebrow">Transportadora Estrella · Oficial</div>
      <h1>Comunicados<em>Institucionales</em></h1>
      <p class="hero-desc">Información oficial sobre normativa, regulaciones del sector y novedades operativas que afectan el transporte de carga masiva en Colombia. Manténgase al día con los cambios que impactan su operación logística.</p>
    </div>
    <div class="hero-seal">
      <div class="seal-ring">
        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
      </div>
      <div class="seal-label">Comunicados<br>Oficiales</div>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
  <div class="stats-bar-inner">
    <?php
    $cat_obj = get_category_by_slug('comunicados');
    $comunicados_count = $cat_obj ? $cat_obj->count : 0;
    ?>
    <div class="stat-item">
      <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
      <div><div class="stat-num"><?php echo $comunicados_count; ?></div><div class="stat-lbl">Comunicados publicados</div></div>
    </div>
    <div class="stat-item">
      <div class="stat-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
      <div><div class="stat-num"><?php echo date('Y') - 1; ?>–<?php echo date('Y'); ?></div><div class="stat-lbl">Período cubierto</div></div>
    </div>
    <div class="stat-item">
      <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
      <div><div class="stat-num">RNDC · SPIA · Decreto</div><div class="stat-lbl">Temas regulatorios</div></div>
    </div>
    <div class="stat-item">
      <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
      <div><div class="stat-num">Suscríbase</div><div class="stat-lbl">Reciba alertas por correo</div></div>
    </div>
  </div>
</div>

<?php 
// 1. COMUNICADO DESTACADO (el más reciente)
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat_id = $cat_obj ? $cat_obj->term_id : 0;

if($paged == 1 && $cat_id):
    $featured_args = array(
        'cat'            => $cat_id,
        'posts_per_page' => 1,
        'post_status'    => 'publish'
    );
    $featured_query = new WP_Query($featured_args);
    
    if($featured_query->have_posts()):
        $featured_query->the_post();
        // Intentar obtener un "tipo" desde tags, si no, usar 'Comunicado'
        $tags = get_the_tags();
        $com_type = !empty($tags) ? $tags[0]->name : 'Comunicado';
?>
<!-- COMUNICADO DESTACADO -->
<section class="featured">
  <div class="featured-inner">
    <div class="section-label">Comunicado más reciente</div>
    <a href="<?php the_permalink(); ?>" class="featured-card">
      <div class="featured-img">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', ['loading' => 'eager']); ?>
        <?php else: ?>
            <img src="https://transestrella.com/wp-content/uploads/2025/12/comunicado-de-prensa-decreto-1017-1-621x1024.jpeg" alt="<?php the_title_attribute(); ?>" loading="eager">
        <?php endif; ?>
        <div class="feat-badge"><?php echo esc_html($com_type); ?></div>
      </div>
      <div class="featured-body">
        <div class="com-date-block">
          <div class="com-date-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <div class="com-date"><?php echo get_the_date(); ?></div>
        </div>
        <h2><?php the_title(); ?></h2>
        <p><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
        <span class="read-more">Leer comunicado completo <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
      </div>
    </a>
  </div>
</section>
<?php 
    endif;
    wp_reset_postdata();
endif;
?>

<!-- LISTA DE COMUNICADOS -->
<?php
// Usaremos la query principal de WP, no un WP_Query personalizado, dado que esto es una plantilla category.php
if ( have_posts() ) :
?>
<section class="comunicados">
  <div class="comunicados-inner">
    <div class="section-label">Todos los comunicados</div>
    <div class="com-list">
      <?php 
      $count = 0;
      while ( have_posts() ) : the_post(); 
          // Si estamos en la página 1, saltar el primer post ya que es el destacado
          if($paged == 1 && $count == 0) {
              $count++;
              continue;
          }
          
          $tags = get_the_tags();
          $com_type = !empty($tags) ? $tags[0]->name : 'Notificación';
      ?>
      <a href="<?php the_permalink(); ?>" class="com-card">
        <div class="com-img">
          <?php if(has_post_thumbnail()): ?>
             <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
          <?php else: ?>
             <img src="https://transestrella.com/wp-content/uploads/2025/10/obligaciones-remitente-carga-2025-1024x683.jpg" alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php endif; ?>
          <div class="com-img-ov"></div>
        </div>
        <div class="com-body">
          <div class="com-meta">
            <span class="com-type operativa"><?php echo esc_html($com_type); ?></span>
            <span class="com-date-sm">
              <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <?php echo get_the_date('j \d\e F \d\e Y'); ?>
            </span>
          </div>
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
          <span class="com-link">Leer comunicado <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </a>
      <?php 
      $count++;
      endwhile; 
      ?>
    </div>
    
    <div class="pagination" style="margin-top:40px;text-align:center;">
        <?php 
        global $wp_query;
        echo paginate_links(array(
            'total' => $wp_query->max_num_pages,
            'prev_text' => '← Anterior',
            'next_text' => 'Siguiente →'
        )); 
        ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- SUSCRIPCIÓN -->
<section class="subscribe">
  <div class="subscribe-inner">
    <div class="sub-text">
      <div class="eyebrow">Alertas regulatorias</div>
      <h2>Reciba los Comunicados<br><span>Antes que Nadie</span></h2>
      <p>Los cambios normativos en el transporte de carga pueden afectar su operación de un día para otro. Suscríbase y reciba nuestros comunicados directamente en su correo.</p>
      <div class="sub-chips">
        <span class="sub-chip">Decretos y resoluciones</span>
        <span class="sub-chip">Alertas de puertos</span>
        <span class="sub-chip">RNDC y DIAN</span>
        <span class="sub-chip">Novedades operativas</span>
      </div>
    </div>
    <div class="sub-form">
      <h3>Suscribirse a Comunicados</h3>
      <p>Sin spam. Solo alertas cuando hay novedades que impactan su operación.</p>
      <div class="forminator-ph">
        <?php echo do_shortcode('[forminator_form id="536"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
