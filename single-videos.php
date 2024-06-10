<?php get_header(); ?>

<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <div class="col-sm-12 col-md-12 col-lg-12 titulos">
    <h1>Vídeos</h1>
  </div>
</div>

<div class="conteudos">
  <div class="wrap">
    <?php while ( have_posts() ) : the_post(); //INÍCIO DO LOOP ?>


        <div class="col-xs-12 col-sm-8 col-md-8 interna-link nopaddl">
          
          <iframe class="video-single-iframe" width="" height="" src="https://www.youtube.com/embed/<?php the_field('video_url'); ?>?rel=0" frameborder="0" allowfullscreen></iframe>
          <div class="video-single-data">Publicado em <?php the_time('d/m\/Y\. ') ?></div>
          <h2 class="video-single-titulo"><?php echo esc_html( the_title() ); ?></h2>
        </div>        
    <?php endwhile; //FINAL DO LOOP ?>
  </div>



  <div class="video-single-outros-header col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <h4>V&iacute;deos Recentes</h4> <a href="videos" class="video-single-link" title="ver todos os vídeos">[+]</a>
  </div> 
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopadding wrap outros-videos">
    <?php $currentID = get_the_ID(); $videos = new WP_Query( array( 'post_type'=>'videos','posts_per_page'   => 4, 'post__not_in' => array($currentID),'orderby' => 'date','order' => 'DESC' ) ); ?>
    <?php if( $videos->have_posts() ) : while( $videos->have_posts() ) : $videos->the_post(); ?>


        <div class="interna-link">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">       
            <?php if( has_post_thumbnail( $post_id )){ ?>
              <?php the_post_thumbnail( 'post-videos', array( 'class'=>'img-responsive' ) ); ?>
            <?php } ?>
            <div class="col-xs-12 col-sm-6"><img src="https://i.ytimg.com/vi/<?php the_field('video_url'); ?>/maxresdefault.jpg" class="img-responsive" alt="<?php echo esc_html( the_title() ); ?>"></div>
            <div class="col-xs-12 col-sm-6 video-single-outros-titulo"><?php echo esc_html( the_title() ); ?></div>
            <div class="clearfix video-single-outros-divisao"></div>
          </a>
        </div>        
    <?php endwhile; endif; ?>
  </div>

  </div>

<?php //include'inc/paginacao-navegacao.php' ?>


<script src="<?=get_template_directory_uri()?>/js/jquery-1.11.2.js"></script><!-- JS Modaal -->
<script src="<?=get_template_directory_uri()?>/js/modaal.js"></script>
<script>
$('.video').modaal({
  type: 'video'
});
</script><!-- script Modaal -->
<?php get_footer(); ?>

