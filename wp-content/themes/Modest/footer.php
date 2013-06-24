			</div> <!-- end #content-area -->
		</div> <!-- end .container -->

		<?php if ( is_home() && get_option('modest_blog_style') == 'false' && get_option('modest_footer_quote') == 'on' ) { ?>
		<!--	<div id="call-to-action">
				<div class="container">
					<p><?php echo get_option('modest_footer_quote_text'); ?>
						<a href="<?php echo esc_url(get_option('modest_footer_quote_url')); ?>" class="learn-more"><span><?php esc_html_e('Learn More','Modest'); ?></span></a>
					</p>
					<span id="down-arrow"></span>
				</div> <! end .container 
			</div>  end #call-to-action -->
		<?php } ?>
	</div> <!-- end .left-shadow -->
</div> <!-- end .right-shadow -->

<div id="footer">
	<div class="right-shadow">
		<div class="left-shadow">
			<div id="footer-top">
				<div class="container">
					<div id="footer-widgets" class="clearfix">
						<div class="footer-info"><div class="phone"></div><div class="info-text">(85)3223-0969</div></div>
						<div class="footer-info"><div class="email"></div><div class="info-text">contato@acens.com.br</div></div>
						<div class="footer-info"><div class="local"></div><div class="info-text">Rua: Dede Brasil, 205 - Itapery</div></div>

						<div id="mapa">
						<iframe width="350" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?q=Rua+Padre+Galv%C3%A3o,+180,+Piracicaba+-+S%C3%A3o+Paulo&amp;sll=-22.713018,-47.638914&amp;hl=pt&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Padre+Galv%C3%A3o,+180+-+S%C3%A3o+Dimas,+Piracicaba+-+S%C3%A3o+Paulo,+13416-008&amp;t=m&amp;source=embed&amp;ll=-22.712698,-47.639873&amp;spn=0.003365,0.00751&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?q=Rua+Padre+Galv%C3%A3o,+180,+Piracicaba+-+S%C3%A3o+Paulo&amp;sll=-22.713018,-47.638914&amp;hl=pt&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Padre+Galv%C3%A3o,+180+-+S%C3%A3o+Dimas,+Piracicaba+-+S%C3%A3o+Paulo,+13416-008&amp;t=m&amp;source=embed&amp;ll=-22.712698,-47.639873&amp;spn=0.003365,0.00751&amp;z=16" style="color:#FFF;text-align:left">Ver mapa maior</a></small>
						<!--	<iframe width="350" height="170" frameborder="0"   scrolling="no" output="embed"  marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?q=Rua+Padre+Galv%C3%A3o,+180,+Piracicaba+-+S%C3%A3o+Paulo&amp;sll=-22.713018,-47.638914&amp;hl=pt&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Padre+Galv%C3%A3o,+180+-+S%C3%A3o+Dimas,+Piracicaba+-+S%C3%A3o+Paulo,+13416-008&amp;ll=-22.713018,-47.638914&amp;spn=0.006047,0.010546&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?q=Rua+Padre+Galv%C3%A3o,+180,+Piracicaba+-+S%C3%A3o+Paulo&amp;sll=-22.713018,-47.638914&amp;hl=pt&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Padre+Galv%C3%A3o,+180+-+S%C3%A3o+Dimas,+Piracicaba+-+S%C3%A3o+Paulo,+13416-008&amp;ll=-22.713018,-47.638914&amp;spn=0.006047,0.010546&amp;t=m&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#fff;text-align:left">Ver mapa maior</a></small>
						--></div>
						<a href="https://www.twitter.com"><div class="logo-twitter"></div></a>
						<a href="https://www.twitter.com"><div class="logo-face"></div></a>
						<a href="https://www.acens.com.br"><div class="logo-acens"></div></a>
						<div></div>

					</div> <!-- end #footer-widgets -->



<!--
					<div id="footer-bottom" class="clearfix">
						<?php $menuClass = 'bottom-nav';
						$footerNav = '';

						if (function_exists('wp_nav_menu')) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false, 'depth' => '1' ) );
						if ($footerNav == '') show_page_menu($menuClass);
						else echo($footerNav); ?>

						<p id="copyright"><?php esc_html_e('Designed by','Modest'); ?> <a href="http://www.elegantthemes.com">Elegant WordPress Themes</a> | <?php esc_html_e('Powered by', 'Modest'); ?> <a href="http://www.wordpress.org">WordPress</a></p>
					</div> <!-end #footer-bottom -->

				</div> <!-- end .container -->
			</div> <!-- end #footer-top -->
		</div> <!-- end .left-shadow -->
	</div> <!-- end .right-shadow -->
</div> <!-- end #footer -->

<?php get_template_part('includes/scripts'); ?>
<?php wp_footer(); ?>

</body>
</html>