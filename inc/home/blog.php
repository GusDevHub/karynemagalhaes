<div class="blog-container-geral">
  <div class="blog-titulo">Blog</div>
  <div class="blog-container">
    <?php $blog = new WP_Query( array( 'posts_per_page' => 4 ) );

     ?>

    <?php if( $blog->have_posts() ) : while( $blog->have_posts() ) : $blog->the_post();
          $categoria = get_the_category();
          $nomeCategoria = $categoria[0]->cat_name;
    ?>
    

    <div class="col-sm-12 blog-post">
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>" data-mh="nome">

        <!-- IMG -->
        <div class="blog-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>

        <!-- TITULO -->
        <div class="blog-tit" data-mh="nome"><?php the_title(); ?></div>

        <!-- DATA + CATEGORIA -->
        <div class="blog-data-cat">
          <span class="blog-data"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m\/Y\ ') ?></span>          
          <span class="blog-categoria"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?php echo $nomeCategoria; ?></span>
        </div>

        <!-- RESUMO -->
        <div class="blog-intro" data-mh="nome"><?php the_excerpt() ?></div>

        <!-- btDESTAQUE -->
        <span class="blog-link">ver mais</span>

      </a>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>