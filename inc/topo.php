<!-- topo -->
<header id="topo" class="col-md-12">
  <h1 class="oculto">Karyne Magalhães</h1>
  <div class="col-md-12 topo">
    <!-- logo -->
    <span class="col-xs-4 col-sm-4 col-md-5" id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a p&aacute;gina inicial" class="logo">Dra. Karyne Magalhães | Cirurgiã-Dentista - CRO-GO 7954</a></span>
    <!-- chamada do menu mobile -->
    <a href="#navegacao" class="mobile fullscreen ic-menu"><span>Abrir Menu Mobile</span></a>
    <!-- navegacao menu -->
    <div class="navegacao" id="navegacao">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'lista-menu' ) ); ?>      
    </div>
    <!-- navegacao menu -->
    <div class="busca-redes-sociais">
      <?php get_search_form(); ?>
      <div class="redes-sociais">
        <a href="<?php echo get_theme_mod( 'rede_social_link_1', 'default_value' ); ?>" target="_blank" title="<?php echo get_theme_mod( 'rede_social_tit_1', 'default_value' ); ?>" class="hvr-grow">
          <?php echo get_theme_mod( 'rede_social_1', 'default_value' ); ?>
        </a>
        <a href="<?php echo get_theme_mod( 'rede_social_link_2', 'default_value' ); ?>" target="_blank" title="<?php echo get_theme_mod( 'rede_social_tit_2', 'default_value' ); ?>" class="hvr-grow">
          <?php echo get_theme_mod( 'rede_social_2', 'default_value' ); ?>
        </a>
        <a href="<?php echo get_theme_mod( 'rede_social_link_3', 'default_value' ); ?>" target="_blank" title="<?php echo get_theme_mod( 'rede_social_tit_3', 'default_value' ); ?>" class="hvr-grow">
          <?php echo get_theme_mod( 'rede_social_3', 'default_value' ); ?>
        </a>
      </div>
    </div>
  </div>
</header>