<div class="km-video desktop">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
          <source src=" <?php echo get_theme_mod( 'videohome', 'default_value' ); ?>" type="video/mp4" />
          <source src=" <?php echo get_theme_mod( 'videohomeWebm', 'default_value' ); ?>" type="video/webm" />          
        </video>
        <div class="poster">
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i><br>
          Seu navegador não suporta este tipo de vídeo.<br>Sugiro que tente outro tipo navegador.
        </div>
    </div>
</div>