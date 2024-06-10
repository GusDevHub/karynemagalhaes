<?php
/* Template Name: Videos */
 get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>V&iacute;deos</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php $videos = new WP_Query( array( 'post_type'=>'videos','orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $videos->have_posts() ) : while( $videos->have_posts() ) : $videos->the_post(); ?>


        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 videos-archive-item" data-mh="nome">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">       
            <?php if( has_post_thumbnail( $post_id )){ ?>
              <?php the_post_thumbnail( 'post-videos', array( 'class'=>'img-responsive' ) ); ?>
            <?php } ?>
            <img src="https://i.ytimg.com/vi/<?php the_field('video_url'); ?>/maxresdefault.jpg" class="img-responsive" alt="<?php echo esc_html( the_title() ); ?>">

            <div class="videos-archive-titulo"><span class="video-archive-data"><?php the_time('d/m\/Y\ ') ?></span> <span class="video-archive-divisor">-</span> <?php echo esc_html( the_title() ); ?></div>          
          </a>
        </div>        
    <?php endwhile; endif; ?>
  </div>
</div>

<?php include'inc/paginacao-navegacao.php' ?>

<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>
<script>
$('.video').modaal({
  type: 'video'
});
</script><!-- script Modaal -->


<?php get_footer(); ?>

