<article <?php post_class(); ?>>
  <header>
    <h4 class="entry-title"><?php the_title(); ?></h4>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
</article>