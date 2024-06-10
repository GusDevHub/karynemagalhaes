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

     <h2 class="subtitulo">Conheça os tratamentos no menu <span class="desktop">ao lado</span><span class="mobile">acima</span></h2>     

    </div>

  </div>

</section>

<?php get_footer(); ?>



