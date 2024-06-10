<?php
get_header(); ?>

	<section class="col-md-12 corpo busca-corpo">
	  <div id="titulos" class="col-md-12 clearfix">
        <div class="col-md-12 titulos"><h1><?php printf( __( 'Buscando por: <strong>%s</strong>', 'twentysixteen' ), '' . esc_html( get_search_query() ) . '' ); ?></h1></div>
      </div>
      <!-- /.titulos -->
      <div class="clearfix"></div>
		<div class="conteudos busca-lista" role="main">

		<?php if ( have_posts() ) : ?>			
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(				
				'prev_text'          => __( '<i class="fa fa-chevron-left"></i>', 'twentysixteen' ),
				'next_text'          => __( '<i class="fa fa-chevron-right"></i>', 'twentysixteen' ),
				'before_page_number' => '<span class="pg-num">' . __( '', 'twentysixteen' ) . '',
				'after_page_number'  => '</span>' . __( '', 'twentysixteen' ) . '',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


		</div><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
