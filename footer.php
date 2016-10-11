			</div>
			<!-- /container -->
		</div>
		<!-- /wrapper -->

		<!-- footer -->
		<footer id="footer">

			<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</div>
			<?php }

			if (class_exists('acf') && !get_field('skjul_footer_addresselinie','option')) { ?>

				<div class="footer-address-wrapper">
					<div class="footer-address" role="contentinfo">

						<?php
							$firmanavn      = get_field('firmanavn', 'option');
							$adresse        = get_field('adresse', 'option');
							$postnummer     = get_field('postnummer', 'option');
							$by             = get_field('by', 'option');
							$telefonnummer  = get_field('telefonnummer', 'option');
							$email_addresse = get_field('email_addresse', 'option');
						?>


							<?php echo ( $firmanavn ? '<span class="firmanavn">' . $firmanavn . '</span>' : '' ) ?>

							<?php echo ( $adresse ? '<span class="adresse">' . $adresse . '</span>' : '') ?>

							<?php echo ( $postnummer ? '<span class="postnr-by">' . $postnummer : '' ) ?>

							<?php echo ( $by ? $by . '</span>' : '' ) ?>

							<?php echo ( $telefonnummer ? '<span class="tlf"><a href="tel:'.$telefonnummer.'">Tlf.: ' . $telefonnummer . '</a></span>' : '' ) ?>

							<?php echo ( $email_addresse ? '<span class="email"><a href="mailto:'.$email_addresse.'">' . $email_addresse . '</a></span>' : '' ) ?>

					</div>
				</div>

				<?php } ?>

		</footer>
		<!-- /footer -->



		<?php wp_footer(); ?>

		<script>
		   WebFontConfig = {
				 google: {
					 families: ['Raleway:100,100i,200,200i,300,300i,400,400i,700','Roboto:400,400i,700']
				 }
		   };

		   (function(d) {
		      var wf = d.createElement('script'), s = d.scripts[0];
		      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
		      s.parentNode.insertBefore(wf, s);
		   })(document);
		</script>

	</body>
</html>
