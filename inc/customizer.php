<?php
/**
 * Gizele Zanato Theme Customizer.
 *
 * @package Tema_Desenvolvido
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tema_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'tema_customize_register' );





/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tema_customize_preview_js() {
	wp_enqueue_script( 'tema_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tema_customize_preview_js' );

//REDES SOCIAIS PAINEL PERSONALIZAR

function Redes_Sociais( $wp_customize ) {
  
class Template_Redes_Sociais extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" placeholder="código da rede social (FontAwesome)"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('rede_social_1', array('default' => '',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_1', array(
  'label' => 'Rede Social 1',
  'section' => 'social',
  'settings' => 'rede_social_1',
)));
$wp_customize->add_setting('rede_social_link_1', array('default' => '#',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_link_1', array(
  'label' => 'Link Rede Social 1',
  'section' => 'social',
  'settings' => 'rede_social_link_1',
)));
$wp_customize->add_setting('rede_social_tit_1', array('default' => 'Karyne Magalhães no Instagram',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_tit_1', array(
  'label' => 'Título Rede Social 1 (hover)',
  'section' => 'social',
  'settings' => 'rede_social_tit_1',
)));
$wp_customize->add_setting('rede_social_2', array('default' => '',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_2', array(
  'label' => 'Rede Social 2',
  'section' => 'social',
  'settings' => 'rede_social_2',
)));
$wp_customize->add_setting('rede_social_link_2', array('default' => '#',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_link_2', array(
  'label' => 'Link Rede Social 2',
  'section' => 'social',
  'settings' => 'rede_social_link_2',
)));
$wp_customize->add_setting('rede_social_tit_2', array('default' => 'Karyne Magalhães no Facebook',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_tit_2', array(
  'label' => 'Título Rede Social 2 (hover)',
  'section' => 'social',
  'settings' => 'rede_social_tit_2',
)));
$wp_customize->add_setting('rede_social_3', array('default' => '',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_3', array(
  'label' => 'Rede Social 3',
  'section' => 'social',
  'settings' => 'rede_social_3',
)));
$wp_customize->add_setting('rede_social_link_3', array('default' => '#',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_link_3', array(
  'label' => 'Link Rede Social 3',
  'section' => 'social',
  'settings' => 'rede_social_link_3',
)));
$wp_customize->add_setting('rede_social_tit_3', array('default' => 'Karyne Magalhães no YouTube',));
$wp_customize->add_control(new Template_Redes_Sociais($wp_customize, 'rede_social_tit_3', array(
  'label' => 'Título Rede Social 3 (hover)',
  'section' => 'social',
  'settings' => 'rede_social_tit_3',
)));
$wp_customize->add_section('social' , array(
  'title' => __('Redes Sociais (Template)','Tem'),
));
}
add_action( 'customize_register', 'Redes_Sociais' );


// VIDEO HOME

function VideoHome( $wp_customize ) {
  
class VideoHome extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="4" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('videohome', array('default' => 'http://dfcb.github.io/BigVideo.js/vids/dock.mp4',));
$wp_customize->add_control(new VideoHome($wp_customize, 'videohome', array(
  'label' => 'Link do vídeo em .mp4',
  'section' => 'videohome',
  'settings' => 'videohome',
)));
$wp_customize->add_setting('videohomeWebm', array('default' => 'http://dfcb.github.io/BigVideo.js/vids/dock.mp4',));
$wp_customize->add_control(new VideoHome($wp_customize, 'videohomeWebm', array(
  'label' => 'Link do vídeo em .webm',
  'section' => 'videohome',
  'settings' => 'videohomeWebm',
)));
$wp_customize->add_section('videohome' , array(
  'title' => __('Vídeo Institucional (Home)','Vid'),
));
}
add_action( 'customize_register', 'VideoHome' );

//CONTATOS PAINEL PERSONALIZAR

function Contatos( $wp_customize ) {
  
class Template_Contatos extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="5" style="width:100%;" placeholder="contatos"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
//ENDERECO

$wp_customize->add_setting('contato_endereco_icone', array('default' => '<i class="fa fa-map-marker" aria-hidden="true"></i>',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_endereco_icone', array(
  'label' => 'Endereço Ícone',
  'section' => 'footer',
  'settings' => 'contato_endereco_icone',
)));
$wp_customize->add_setting('contato_endereco_txt', array('default' => 'Endereço aqui',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_endereco_txt', array(
  'label' => 'Endereço Texto',
  'section' => 'footer',
  'settings' => 'contato_endereco_txt',
)));
$wp_customize->add_setting('contato_endereco_link', array('default' => 'https://goo.gl/maps/w8fSxHUB3kB2',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_endereco_link', array(
  'label' => 'Endereço Link',
  'section' => 'footer',
  'settings' => 'contato_endereco_link',
)));

//TELEFONE

$wp_customize->add_setting('contato_telefone_icone', array('default' => '<i class="fa fa-phone" aria-hidden="true"></i>',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_telefone_icone', array(
  'label' => 'Telefone Ícone',
  'section' => 'footer',
  'settings' => 'contato_telefone_icone',
)));
$wp_customize->add_setting('contato_telefone_txt', array('default' => '62 <span>4101-9203</span>',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_telefone_txt', array(
  'label' => 'Telefone Texto',
  'section' => 'footer',
  'settings' => 'contato_telefone_txt',
)));
$wp_customize->add_setting('contato_telefone_link', array('default' => '6241019203',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_telefone_link', array(
  'label' => 'Telefone Link',
  'section' => 'footer',
  'settings' => 'contato_telefone_link',
)));

//WHATSAPP

$wp_customize->add_setting('contato_whatsapp_icone', array('default' => '<i class="fa fa-whatsapp" aria-hidden="true"></i>',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_whatsapp_icone', array(
  'label' => 'WhatsAppe Ícone',
  'section' => 'footer',
  'settings' => 'contato_whatsapp_icone',
)));
$wp_customize->add_setting('contato_whatsapp_txt', array('default' => '62 <span>9 8134-0675</span>',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_whatsapp_txt', array(
  'label' => 'WhatsAppe Texto',
  'section' => 'footer',
  'settings' => 'contato_whatsapp_txt',
)));
$wp_customize->add_setting('contato_whatsapp_link', array('default' => '62981340675',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_whatsapp_link', array(
  'label' => 'WhatsApp Link',
  'section' => 'footer',
  'settings' => 'contato_whatsapp_link',
)));


//EMAIL

$wp_customize->add_setting('contato_email_icone', array('default' => '<i class="fa fa-envelope-o" aria-hidden="true"></i>',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_email_icone', array(
  'label' => 'E-mail Ícone',
  'section' => 'footer',
  'settings' => 'contato_email_icone',
)));
$wp_customize->add_setting('contato_email_txt', array('default' => 'contato@karynemagalhaes.com.br',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_email_txt', array(
  'label' => 'E-mail Texto',
  'section' => 'footer',
  'settings' => 'contato_email_txt',
)));
$wp_customize->add_setting('contato_email_link', array('default' => 'contato@karynemagalhaes.com.br',));
$wp_customize->add_control(new Template_Contatos($wp_customize, 'contato_email_link', array(
  'label' => 'E-mail Link',
  'section' => 'footer',
  'settings' => 'contato_email_link',
)));

//CHAMADA NO FRONTEND

$wp_customize->add_section('footer' , array(
  'title' => __('Contatos (Home+Contato)','Cont'),
));
}
add_action( 'customize_register', 'Contatos' );


//COPYRIGHT PAINEL PERSONALIZAR

function Copyright( $wp_customize ) {
  
class Copyright extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('copyright', array('default' => 'Karyne Magalhães © 2017 - Direitos Reservados',));
$wp_customize->add_control(new Copyright($wp_customize, 'copyright', array(
  'label' => 'Texto Copyright',
  'section' => 'copyright',
  'settings' => 'copyright',
)));
$wp_customize->add_section('copyright' , array(
  'title' => __('Texto Copyright (Template)','Cop'),
));
}
add_action( 'customize_register', 'Copyright' );

// REMOVENDO SECOES NO PERSONALIZAR

function mytheme_customize_register( $wp_customize ) {
  $wp_customize->remove_section( 'title_tagline');
  $wp_customize->remove_section( 'colors');
  $wp_customize->remove_section( 'header_image');
  $wp_customize->remove_section( 'background_image');
  //$wp_customize->remove_panel  ( 'nav_menus');
  $wp_customize->remove_section( 'static_front_page');
  $wp_customize->remove_panel  ( 'widgets' );
  $wp_customize->remove_section( 'custom_css');

}
add_action( 'customize_register', 'mytheme_customize_register',50 );




