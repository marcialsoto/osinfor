<article <?php post_class(); ?>>
  <div class="media">
  	<?php if (has_post_thumbnail( $post->ID ) ){ ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<header class="media-left">
	<a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $image[0]; ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
	  <span><?php the_title(); ?></span>
	</a>
	</header>
	<?php } ?>
	<div class="media-body ">
		<h4 class="media-heading entry-title"><a href="<?php the_permalink(); ?>"><?php the_short_title( 170, '...' ); ?></a></h4>
		<?php get_template_part('templates/entry-meta'); ?>
		<div class="entry-summary">
		    <?php the_excerpt(); ?>
		</div>
	</div>
  </div>
</article>