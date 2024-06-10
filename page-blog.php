<?php
/* Template Name: Blog */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Blog</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php $blog = new WP_Query( array( 'orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $blog->have_posts() ) : while( $blog->have_posts() ) : $blog->the_post(); 
          $categoria = get_the_category();
          $nomeCategoria = $categoria[0]->cat_name;
    ?>


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 imprensa-archive-item" data-mh="nome">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">       
            <div style="background-image:url(<?php the_post_thumbnail_url(); ?>);"><span class="blog-categoria"><?php echo $nomeCategoria; ?></span></div>
            <div class="imprensa-archive-titulo"><span class="imprensa-archive-data"><?php the_time('d/m\/Y\ ') ?></span> <span class="imprensa-archive-divisor">-</span> <?php echo esc_html( the_title() ); ?></div>          
          </a>
        </div>        
    <?php endwhile; endif; ?>
  </div>
</div>
<div class="clearfix"></div>
<?php include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>

<?php get_footer(); ?>

