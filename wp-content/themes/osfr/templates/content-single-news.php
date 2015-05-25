<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <img src="<?php echo bloginfo('template_directory'); ?>/dist/images/news__header.jpg" class="img-responsive" />
      <?php the_excerpt(); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
		<?php if ( has_post_thumbnail() ) { 
			the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
		} ?>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php get_template_part('templates/entry-meta', 'news'); ?>
    </footer>
  </article>
<?php endwhile; ?>
