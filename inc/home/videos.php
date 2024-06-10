<div class="videos-container">
  <div class="videos-titulo">Vídeos</div>
  <div class="videos-subtitulo"><a href="videos" title="veja mais vídeos...">Veja mais vídeos</a></div>
  <div class="videos">
    <?php $videos = new WP_Query( array( 'post_type'=>'videos','posts_per_page'   => 4 ) ); ?>
    <?php if( $videos->have_posts() ) : while( $videos->have_posts() ) : $videos->the_post(); ?>
    <div class="col-sm-12 col-sm-6 col-md-6" data-mh="videos">
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_html( the_title() ); ?>">
        <img src="https://i.ytimg.com/vi/<?php the_field('video_url'); ?>/maxresdefault.jpg" class="img-responsive aligncenter" alt="<?php echo esc_html( the_title() ); ?>">
        <div class="video-titulo"><?php the_title(); ?></div>
      </a>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>