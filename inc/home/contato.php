<div class="contato-container">
  <div class="contato-titulo">Contato</div>
  <div class="contato-subtitulo">Agende sua consulta - Esclareça suas dúvidas</div>
  <div class="contato">
    <div class="col-xs-12 col-md-6">
      <div class="contato-logo">
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
      <div class="contatos">
        <a href="<?php echo get_theme_mod( 'contato_endereco_link', 'default_value' ); ?>" target="_blank">
          <?php echo get_theme_mod( 'contato_endereco_icone', 'default_value' ); ?><?php echo get_theme_mod( 'contato_endereco_txt', 'default_value' ); ?>
        </a>
        <a href="tel:+55<?php echo get_theme_mod( 'contato_telefone_link', 'default_value' ); ?>">
          <?php echo get_theme_mod( 'contato_telefone_icone', 'default_value' ); ?><?php echo get_theme_mod( 'contato_telefone_txt', 'default_value' ); ?>
        </a>
        <a href="tel:+55<?php echo get_theme_mod( 'contato_whatsapp_link', 'default_value' ); ?>">
          <?php echo get_theme_mod( 'contato_whatsapp_icone', 'default_value' ); ?><?php echo get_theme_mod( 'contato_whatsapp_txt', 'default_value' ); ?>
        </a>
        <a href="mailto:<?php echo get_theme_mod( 'contato_email_link', 'default_value' ); ?>">
          <?php echo get_theme_mod( 'contato_email_icone', 'default_value' ); ?><?php echo get_theme_mod( 'contato_email_txt', 'default_value' ); ?>
        </a>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 form">
      <?php echo do_shortcode( '[contact-form-7 id="791" title="contato"]' ); ?>
    </div>
  </div>
</div>