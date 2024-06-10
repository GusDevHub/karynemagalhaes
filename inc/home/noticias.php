<h1 class="oculto">Notícias</h1>
<div class="noticias-destaque">
<h2 class="oculto">Destaques</h2>
<?php $noticias = new WP_Query( array( 'post_type'=>'noticias','posts_per_page' => '3','category_name'=>'destaque','orderby' => 'date','order' => 'DESC' ) ); ?>
<?php if( $noticias->have_posts() ) : while( $noticias->have_posts() ) : $noticias->the_post(); ?>
<div class="col-xs-6 col-sm-6 col-md-6 not-container-destaque">
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">  
	    <span class="not-img-destaque" style="background:url(<?php the_post_thumbnail_url(); ?>);">	    	
	    	<h3 class="not-tit-destaque">
	    		<span class="cat-nome-destaque"><?php echo categorias(''); ?></span>
	    		<?php echo esc_html( the_title() ); ?>
	    	</h3>
	    </span>	    
	</a> 
</div>
<?php endwhile; endif; ?>
</div>
<div class="clearfix"></div>
<div class="conteudos noticias">
<h2 class="oculto">Outras Notícias Publicadas</h2>
<?php $noticias = new WP_Query( array( 'post_type'=>'noticias','category__not_in' => array(3),'posts_per_page' => '8','orderby' => 'name','order' => 'ASC' ) ); ?>
<?php if( $noticias->have_posts() ) : while( $noticias->have_posts() ) : $noticias->the_post(); ?>
	<div class="col-xs-6 col-sm-3 col-md-3 not-container">
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">  
	    <span class="not-img" style="background:url(<?php the_post_thumbnail_url(); ?>);">
	    	<span class="cat-nome"><?php echo categorias(''); ?></span>
	    </span>
	    <h3 class="not-tit"><?php echo esc_html( the_title() ); ?></h3>
	</a> 
</div>
<?php endwhile; endif; ?>
<div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"><a class="btn col-xs-12 col-sm-12 col-md-12 btn-primary botao" href="noticias" role="button" title="veja mais notícias">ver mais</a></div>
</div>