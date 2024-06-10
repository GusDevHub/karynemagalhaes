<?php
/* Template Name: Saiu na Imprensa */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Saiu na Imprensa</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php $imprensa = new WP_Query( array( 'post_type'=>'saiu-na-imprensa','orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $imprensa->have_posts() ) : while( $imprensa->have_posts() ) : $imprensa->the_post(); ?>


        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 imprensa-archive-item" data-mh="nome">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">       
            <div style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
            <div class="imprensa-archive-titulo"><span class="imprensa-archive-data"><?php the_time('d/m\/Y\ ') ?></span> <span class="imprensa-archive-divisor">-</span> <?php echo esc_html( the_title() ); ?></div>          
          </a>
        </div>        
    <?php endwhile; endif; ?>
  </div>
</div>

<?php include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

