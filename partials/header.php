<header class="header">
	<div class="uk-section uk-padding-remove-vertical">
		<div class="uk-container">
				<div class="header-logo"></div>
				<a href="#nav_mobile" class="hamburger" uk-toggle>
					<div class="nav-icon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
				<div class="offcanvas-nav">
					<div class="nav-mobile" id="nav_mobile" uk-offcanvas="flip: true;">
						<div class="uk-offcanvas-bar"><?php 
						wp_nav_menu( array(
							'theme_location' => 'header',
							'container' => 'nav',
							'container_class' => 'mainMenu-menu',
							'menu' => 'Main Nav',
							'menu_class' => 'mainMenu-mobile')); ?> 
						</div>
					</div>
				</div>
				<div class="nav"><?php 
					wp_nav_menu( array(
						'theme_location' => 'header',
						'container' => 'nav',
						'container_class' => 'mainMenu-menu',
						'menu' => 'Main Nav',
						'menu_class' => 'mainMenu-list uk-flex')); ?> 
				</div>
			</div>
		</div>
	</div>
	<div uk-scrollspy="cls:uk-animation-fade;">  
		<div class="uk-panel uk-panel-box scroller">
			<a class="" uk-totop uk-scroll href="#">go to top</a>  
		</div>  
	</div>
</header>
<?php /*
	<div class="header-container container">
		<?php if( is_front_page() ) : ?>
			<h1 class="header-logo">
				<a class="header-logo" href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>
			</h1>
		<?php else : ?>
			<a class="header-logo" href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>
		<?php endif; ?>

		<div class="header-menu mainMenu">
			<div class="mainMenu-titleBar">
				<button class="mainMenu-toggle">&times;</button>
			</div>
			<div class="searchForm searchForm--mainMenu">
				<?php try_get_template_part('partials', 'searchform'); ?>
			</div>

			<?php wp_nav_menu( array(
				'theme_location' => 'header',
				'container' => 'nav',
				'container_class' => 'mainMenu-menu',
				'menu' => 'Header',
				'menu_class' => 'mainMenu-list'
			)); ?>
		</div>
	</div>
*/ ?>
