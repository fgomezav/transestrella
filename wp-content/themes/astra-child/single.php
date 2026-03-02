<?php
/**
 * Template Name: Entrada de Blog (Single Post)
 * Template Post Type: post
 * 
 * The template for displaying all single posts.
 */

get_header(); ?>

<style>
/* 
  Estilos del post individual cargados desde /wp-content/themes/astra-child/post.css.
*/
<?php echo file_get_contents( get_stylesheet_directory() . '/post.css' ); ?>
</style>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 

        // Categorías
        $cats = get_the_category();
        $cat_name = !empty($cats) ? $cats[0]->name : 'Sin Categoría';
        $cat_link = !empty($cats) ? get_category_link($cats[0]->term_id) : '#';

        // Tiempo de lectura (estimado 200 palabras/minuto)
        $word_count = str_word_count( strip_tags( get_the_content() ) );
        $read_time = ceil( $word_count / 200 );
        if($read_time == 0) $read_time = 1;
?>

<!-- ═══ HERO ═══ -->
<section class="post-hero">
  <div class="post-hero-glow"></div>
  <div class="post-hero-inner">
    <div class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Inicio</a><span class="breadcrumb-sep">›</span>
      <a href="<?php echo get_post_type_archive_link('post'); ?>">Blog</a><span class="breadcrumb-sep">›</span>
      <a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($cat_name); ?></a><span class="breadcrumb-sep">›</span>
      <span><?php echo wp_trim_words(get_the_title(), 5, '...'); ?></span>
    </div>
    <div class="post-header">
      <div class="post-cat-tag"><span><?php echo esc_html($cat_name); ?></span></div>
      <h1><?php the_title(); ?></h1>
      <?php if(has_excerpt()): ?>
        <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
      <?php endif; ?>
      <div class="post-meta">
        <div class="post-author">
          <div class="author-av">TE</div>
          <div>
            <div class="author-name">Transportadora Estrella</div>
            <div class="author-role">Equipo de Contenidos</div>
          </div>
        </div>
        <div class="meta-sep"></div>
        <div class="meta-item">
          <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <?php echo get_the_date('j \d\e F \d\e Y'); ?>
        </div>
        <div class="meta-item">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <?php echo $read_time; ?> minutos de lectura
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ IMAGEN DESTACADA ═══ -->
<?php if ( has_post_thumbnail() ) : ?>
<div class="post-img-wrap">
  <div class="post-img-inner">
    <div class="post-img">
      <?php the_post_thumbnail('full', ['loading' => 'lazy']); ?>
      <?php 
      $caption = get_the_post_thumbnail_caption();
      if($caption): 
      ?>
        <div class="post-img-caption"><?php echo esc_html($caption); ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- ═══ ARTÍCULO + SIDEBAR ═══ -->
<div class="post-layout">

  <article class="post-content">
    
    <?php the_content(); ?>

    <!-- Tags al final del artículo -->
    <?php 
    $post_tags = get_the_tags();
    if ( $post_tags ) : 
    ?>
    <div class="post-tags">
      <span class="post-tags-label">Temas:</span>
      <a href="<?php echo esc_url($cat_link); ?>" class="post-tag"><?php echo esc_html($cat_name); ?></a>
      <?php foreach( $post_tags as $tag ) : ?>
        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag"><?php echo esc_html($tag->name); ?></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- Botones de share -->
    <div class="post-share">
      <span class="share-label">Compartir:</span>
      <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" class="share-btn share-wa">
        <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
        WhatsApp
      </a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-btn share-li">
        <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        LinkedIn
      </a>
    </div>

  </article>

  <aside class="post-sidebar">

    <!-- CTA -->
    <div class="sidebar-cta">
      <h3>¿Necesita <span>Cotizar?</span></h3>
      <p>Más de 30 años moviendo carga masiva en Colombia. Le respondemos en menos de 24 horas hábiles.</p>
      <div class="sidebar-cta-items">
        <div class="sci">
          <div class="sci-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z"/></svg></div>
          <div class="sci-val"><a href="tel:+576045273300">604 527 3300</a></div>
        </div>
        <div class="sci">
          <div class="sci-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="sci-val">8 sucursales en Colombia</div>
        </div>
      </div>
      <a href="<?php echo home_url('/contactanos/'); ?>" class="sidebar-cta-btn">Solicitar Cotización →</a>
    </div>

    <!-- Certificaciones -->
    <div class="cert-badge-box">
      <div class="cert-badge-title">Nuestras Certificaciones</div>
      <div class="cert-badges">
        <div class="cert-b">ISO 9001</div>
        <div class="cert-b">BASC</div>
        <div class="cert-b">SuperTransporte</div>
      </div>
    </div>

  </aside>
</div>

<?php 
    endwhile; 
endif; 
?>

<!-- ═══ ARTÍCULOS RELACIONADOS ═══ -->
<?php
// Obtener posts de la misma categoría (excluyendo el actual)
if(!empty($cats)){
    $related_args = apply_filters('astra_related_posts_args', array(
        'post_type'           => 'post',
        'posts_per_page'      => 3,
        'post__not_in'        => array( get_the_ID() ),
        'cat'                 => $cats[0]->term_id,
        'ignore_sticky_posts' => 1,
    ));
    
    $related_query = new WP_Query($related_args);
    
    if($related_query->have_posts()):
?>
<section class="related">
  <div class="related-inner">
    <div class="related-header">
      <h2>Artículos <span>Relacionados</span></h2>
    </div>
    <div class="related-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;">

      <?php while($related_query->have_posts()): $related_query->the_post(); 
             $rel_cats = get_the_category();
             $rel_cat_name = !empty($rel_cats) ? $rel_cats[0]->name : 'Sin Categoría';
      ?>
      <a href="<?php the_permalink(); ?>" class="rel-card" style="border:1px solid #E0E0E0; border-radius:12px; overflow:hidden; text-decoration:none; display:flex; flex-direction:column; background:#fff;">
        <div class="rel-img" style="position:relative; height:180px; overflow:hidden;">
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium_large', ['style' => 'width:100%; height:100%; object-fit:cover; display:block;']); ?>
          <?php else: ?>
             <img style="width:100%; height:100%; object-fit:cover; display:block;" src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg" alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php endif; ?>
          <div class="rel-img-ov" style="position:absolute; inset:0; background:linear-gradient(to top, rgba(8,50,102,.5), transparent 55%);"></div>
          <div class="rel-cat" style="position:absolute; bottom:12px; left:12px; font-family:'Barlow Condensed',sans-serif; font-size:11px; font-weight:700; letter-spacing:.08em; text-transform:uppercase; color:#fff; background:#F5A623; border-radius:3px; padding:3px 8px;"><?php echo esc_html($rel_cat_name); ?></div>
        </div>
        <div class="rel-body" style="padding:18px 20px;">
          <div class="rel-date" style="font-size:11px; text-transform:uppercase; letter-spacing:.06em; color:#999999; margin-bottom:6px; font-weight:700;"><?php echo get_the_date('j M Y'); ?></div>
          <h4 style="font-family:'Barlow Condensed',sans-serif; font-size:17px; font-weight:800; text-transform:uppercase; color:#333; line-height:1.1; margin-bottom:12px;"><?php the_title(); ?></h4>
          <span class="rel-link" style="font-family:'Barlow Condensed',sans-serif; font-size:11px; font-weight:700; letter-spacing:.06em; text-transform:uppercase; color:#0F5BA7; display:inline-block; margin-top:auto;">Leer artículo →</span>
        </div>
      </a>
      <?php endwhile; ?>

    </div>
  </div>
</section>
<?php 
    wp_reset_postdata();
    endif;
}
?>

<?php get_footer(); ?>
