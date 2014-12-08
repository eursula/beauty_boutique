	
	<footer>
		<div class="mobile">
			<div class="footer-pic"></div>
			<div class="logo"><p>B</p></div>
			<div class="footer-pic"></div>
		</div>
		<div class="desktop container">
			<div class="left-box">
				<?php if(is_user_logged_in()): ?>
					<?php wp_nav_menu( array( 'theme_location' => 'logged-in-pages' ) ); ?>
				<?php else: ?>
					<?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
				<?php endif; ?>
			</div>
			<div class="right-box">
				<?php if(is_user_logged_in()): ?>
					<?php wp_nav_menu( array( 'theme_location' => 'logged-in-pages' ) ); ?>
				<?php else: ?>
					<?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
				<?php endif; ?>
			</div>
		</div>
	</footer>
	</div><!-- end of .pusher -->
	
		
	

	<?php wp_footer(); ?>
</body>
</html>