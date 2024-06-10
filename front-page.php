<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/home.css">

<main class="col-md-12 clearfix wrap">
<section class="col-md-12 corpo"> 
 <!-- video -->
  <?php get_template_part ('inc/home/video') ?>
  <div class="clearfix"></div>
  <!-- blog -->
  <?php get_template_part ('inc/home/blog') ?>
  <div class="clearfix"></div>
  <!-- sobre -->
  <?php get_template_part ('inc/home/sobre') ?>
  <div class="clearfix"></div>
  <!-- videos -->
  <?php get_template_part ('inc/home/videos') ?>
  <div class="clearfix"></div>
  <!-- saiu na imprensa -->
  <?php get_template_part ('inc/home/imprensa') ?>
  <div class="clearfix"></div>
  <!-- contato -->
  <?php get_template_part ('inc/home/contato') ?>
</section>
<!-- /.corpo -->
</main>

<?php get_footer(); ?>