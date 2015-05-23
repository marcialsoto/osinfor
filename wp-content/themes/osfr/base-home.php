<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap slider" role="document">
		  <?php get_template_part('templates/slider', 'main'); ?>
    </div>
    <div class="wrap container feeds" role="document">
      <div class="content row">
        <main class="main" role="main">
          <?php get_template_part('templates/view', 'noticias'); ?>
        </main><!-- /.main -->

          <aside class="sidebar sidebar--1" role="complementary">
            Sidebar 1
          </aside><!-- /.sidebar -->
          <aside class="sidebar sidebar--2" role="complementary">
            Sidebar 2
          </aside><!-- /.sidebar -->

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <div class="wrap" role="document">
      <div class="container">
        <?php get_template_part('templates/section', 'multimedia'); ?>
      </div>
    </div>
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>