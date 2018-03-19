<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tammsaare
 */

?>

<?php wp_footer(); ?>

	<div class="row">
		<footer class="footer">
			<div class="row">
				<div class="large-4 columns">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo-left.png">
				</div>
				<div class="large-2 columns">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo-right.png">
				</div>				
			</div>
			<div class="footer-middle">
				<div class="row">
					<div class="large-2 columns"><h2>Kontakt</h2></div>
					<div class="large-10 columns">
						<div class="contact-person-box">
							<div class="row">
								<div class="large-5 columns">
									<div class="contact-person-image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blank.png">
									</div>
									<div class="contact-person-info">
										<h6>Priit-Risto Lunden</h6>
										<p>Haldusjuht unden@kaamos.ee 506 1608</p> 
										<p>TÄK 664 0061</p>
									</div>
								</div>
								<div class="large-5 columns end">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blank.png">
									<div class="contact-person-info">
										<h6>Silver Verrev</h6>
										<p>Haldusjuht silver@kaamos.ee 506 1608</p>
										<p>TÄK 664 0062</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="large-4 columns">
						<p>A. H. Tammsaare tee 47, 11314 Tallinn  </p>
					</div>
					<div class="large-3 columns">
						<a href="#">
							<span class="fb-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-icon.png"></span>
							<span class="fb-link"><p>Jälgi meid Facebookis</p></span>
						</a>
					</div>
				</div>
			</div>
		</footer>
	</div>

</body>
</html>
