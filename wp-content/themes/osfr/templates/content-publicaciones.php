<?php 
	global $post;

	$autores = get_the_terms( $post->ID, 'autores' );
	$temas = get_the_terms( $post->ID, 'temas' );
	$anos = get_the_terms( $post->ID, 'anos' );
	$lenguajes = get_the_terms( $post->ID, 'lenguajes' );
?>

<article <?php post_class(); ?>>
  <div class="media">
  	<?php global $post; ?>
  	<?php if (has_post_thumbnail( $post->ID ) ){ ?>
	<header class="media-left">
	<a href="<?php the_permalink(); ?>">
	  <?php the_post_thumbnail(); ?>
	</a>
	</header>
	<?php } ?>
	<div class="media-body ">
		<h4 class="media-heading entry-title"><a href="<?php the_permalink(); ?>"><?php the_short_title( 170, '...' ); ?></a></h4>
		<?php /*get_template_part('templates/entry-meta'); */ ?>
		<div class="entry-summary">
			<dl>
				<?php if ( $autores ); { ?>
				<dt>Autor:</dt>
				<dd>
					<?php 

					foreach ( $autores as $autor ) { $term_link = get_term_link( $autor );
					if ( is_wp_error( $term_link ) ) {
					continue;
					}
					echo '<a class="hidden-sm" href="' . esc_url( $term_link ) . '">' . $autor->name . '</a>';
					}

					?>
				</dd>
				<?php } ?>
			</dl>

			<?php the_content(); ?>
		</div>
	</div>
  </div>
</article>