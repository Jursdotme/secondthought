			<!-- footer -->
			<footer class="footer-container">

				<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
						<div class="footer-widgets">
							<?php dynamic_sidebar( 'footer-widget-area' ); ?>
						</div>
				<?php } ?>

				<?php if (!get_field('skjul_footer_addresselinie','option')) { ?>

				<div class="footer-address-bar-wrapper">
					<div class="footer-address-bar" role="contentinfo">

						<?php

							$firmanavn      = get_field('firmanavn', 'option');
							$adresse        = get_field('adresse', 'option');
							$postnummer     = get_field('postnummer', 'option');
							$by             = get_field('by', 'option');
							$telefonnummer  = get_field('telefonnummer', 'option');
							$fax            = get_field('fax', 'option');
							$faxEnabled     = get_field('vi_har_fax', 'option');
							$email_addresse = get_field('email_addresse', 'option');

							if($faxEnabled) {
								$insertFax = "Fax: " . $fax . "<hr>";
							} else {
								$insertFax = "";
							};
						?>

						<div class="footer-address">
							<?php if($firmanavn) { echo '<span class="firmanavn">' . $firmanavn . '</span><hr>';} ?>
							<?php if($adresse) { echo '<span class="adresse">' . $adresse . '</span><hr>';} ?>
							<?php if($postnummer) { echo '<span class="postnr-by">' . $postnummer;} ?>
							<?php if($by) { echo $by . '</span><hr>';} ?>
							<?php if($telefonnummer) { echo '<span class="tlf"><a href="tel:'.$telefonnummer.'">Tlf.: ' . $telefonnummer . '</a></span><hr>'; } ?>
							<a href="mailto:<?php echo $email_addresse; ?>"><?php echo $email_addresse; ?></a>
						</div>
					</div>
				</div>

				<?php } ?>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script>
		   WebFontConfig = {
				 google: {
					 families: ['Montserrat', 'Roboto']
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
