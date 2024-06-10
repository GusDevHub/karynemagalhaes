<?php 
/* Template Name: Tratamentos */
get_header(); ?>


<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">

  <div class="col-sm-12 col-md-12 col-lg-12 titulos">

    <h1>Tratamentos</h1>

  </div>

</div>

<section class="conteudos">

  <div class="wrap">

    <div class="col-xs-12 col-md-3 menu-interno">

      <?php wp_nav_menu( array( 'theme_location' => 'menu-tratamentos', 'container_class' => 'list-group', 'items_wrap' => '%3$s' ) ); ?>

    </div>

    <div class="col-xs-12 col-md-9 conteudos-internos">

     <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

     <h2 class="subtitulo"><?php echo esc_html( the_title() ); ?></h2>

     <?php echo esc_html( the_content() ); ?>

     <?php }

  } ?>

    </div>

  </div>

</section>

<?php get_footer(); ?>



