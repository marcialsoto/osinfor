<div class="pre__footer">
	<div class="container">
		<?php get_template_part('templates/slider', 'footer'); ?>
	</div>
</div>
<footer class="content-info" role="contentinfo">
    <div class="footer__brand">
		<div class="container">
	    	<div class="footer__logo">
				<h1 class="logo">
					<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
				</h1>
	    	</div>
			<div class="footer__sidedar footer--1">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
			<div class="footer__sidedar footer--2">2</div>
			<div class="footer__sidedar footer--3">3</div>
	    </div>
    </div>
	
	<div class="inst__logo">
		<div class="container">
			<div class="logo">
				<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
			</div>
		</div>
	</div>
</footer>
