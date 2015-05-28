<article <?php post_class(); ?>>
  <div class="media">
	<header class="media-left">
	<a href="#">
	  <?php the_post_thumbnail( 'thumbnail' ); ?>
	</a>
	</header>
	<div class="media-body ">
		<h4 class="media-heading entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php get_template_part('templates/entry-meta'); ?>
		<div class="entry-summary">
		    <?php the_excerpt(); ?>
		</div>
	</div>
  </div>
</article>