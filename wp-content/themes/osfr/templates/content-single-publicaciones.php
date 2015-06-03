<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>    
  	<header>
	  	<div class="media">
	  		<?php if ( has_post_thumbnail() ) {?>
	  			<div class="media-left">
	  				<?php the_post_thumbnail( 'full', array( 'class' => 'media-object' ) ); ?>
	  			</div>
	  		<?php } ?>

	  		<div class="media-body">
	  			<h4 class="entry-title media-heading"><?php the_title(); ?></h4>

	  			<?php 
	  				global $post;

					$autores = get_the_terms( $post->ID, 'autores' );
					$temas = get_the_terms( $post->ID, 'temas' );
					$anos = get_the_terms( $post->ID, 'anos' );
					$lenguajes = get_the_terms( $post->ID, 'lenguajes' );
	  			?>
	  			<table class="table table-condensed table-bordered">
	  				<?php if ( $autores ); { ?>
	  				<tr>
	  				<th>Autor(es):</th>
	  				<td>
		  				<?php 
						
						foreach ( $autores as $autor ) { $term_link = get_term_link( $autor );
						    if ( is_wp_error( $term_link ) ) {
						        continue;
						    }
						    echo '<a class="hidden-sm" href="' . esc_url( $term_link ) . '">' . $autor->name . '</a>';
						}

						?>
					</td>
					</tr>
					<?php } ?>
					
					<?php if ( $temas ); { ?>
					<tr>
	  				<th>Temas:</th>
	  				<td>
		  				<?php 
						echo '<ul class="list-inline">';
						foreach ( $temas as $tema ) { $term_link = get_term_link( $tema );
						    if ( is_wp_error( $term_link ) ) {
						        continue;
						    }
						    echo '<li><a class="hidden-sm" href="' . esc_url( $term_link ) . '">' . $tema->name . '</a></li>';
						}
						echo '</ul>';
						?>
					</td>
					</tr>
					<?php } ?>

					<?php if ( $anos ); { ?>
					<tr>
	  				<th>Año:</th>
	  				<td>
		  				<?php 
						echo '<ul class="list-inline">';
						foreach ( $anos as $ano ) { $term_link = get_term_link( $ano );
						    if ( is_wp_error( $term_link ) ) {
						        continue;
						    }
						    echo '<li><a class="hidden-sm" href="' . esc_url( $term_link ) . '">' . $ano->name . '</a></li>';
						}
						echo '</ul>';
						?>
					</td>
					</tr>
					<?php } ?>

					<?php if ( $lenguajes ); { ?>
					<tr>
	  				<th>Idioma:</th>
	  				<td>
		  				<?php 
						echo '<ul class="list-inline">';
						foreach ( $lenguajes as $lenguaje ) { $term_link = get_term_link( $lenguaje );
						    if ( is_wp_error( $term_link ) ) {
						        continue;
						    }
						    echo '<li><a class="hidden-sm" href="' . esc_url( $term_link ) . '">' . $lenguaje->name . '</a></li>';
						}
						echo '</ul>';
						?>
					</td>
					</tr>
					<?php } ?>
	  			</table>
	  		</div>
	  	</div>
    </header>
    <div class="entry-content">
    	<hr />
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>