<?php 
$args = array( 'post_type' => 'post', 'tag__not_in' => array('10'), 'posts_per_page' => 3 );
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
<div class="noticias">
	<div class="page-header">
		<h3>Noticias<a class="pull-right" href="<?php echo bloginfo( 'url' ); ?>/category/notas-de-prensa"><small>Ver todas <i class="fa fa-angle-double-right"></i></small></a></h4>
	</div>

	<ul class="media-list">
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li class="media">
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="media-left">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail( 'thumb-news' ); ?>
					</a>
				</div>
				<?php } ?>
				<div class="media-body">
					<div class="media-info">
						<?php get_template_part('templates/entry-meta'); ?>
					</div>
					<h4 class="media-heading">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h4>
				</div>	
			</li>
		<?php endwhile; ?>
		<!-- end of the loop -->
	</ul>
</div>
	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>