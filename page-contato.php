<?php 
/* Template Name: Contato */
get_header(); ?>


<div id="titulos" class="col-sm-12 col-md-12 col-lg-12 clearfix">

  <div class="col-sm-12 col-md-12 col-lg-12 titulos">

    <h1>Contato</h1>

  </div>

</div>

<section class="conteudos pg-contato">
  
    <div class="col-xs-12 col-md-6 form">
      <?php echo do_shortcode( '[contact-form-7 id="791" title="contato"]' ); ?>
    </div>

    <div class="col-xs-12 col-md-6">      
      <div class="contato">
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

</section>

<?php get_footer(); ?>



