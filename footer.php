			<!-- footer -->
			<div class="footer-container">
				<footer class="footer" role="contentinfo">

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
						<?php if($telefonnummer) { echo '<span class="tlf">Tlf.: ' . $telefonnummer . '</span><hr>'; } ?>
							<?php echo '<span class="">' . $insertFax; ?> <a href="mailto:<?php echo $email_addresse; ?>"><?php echo $email_addresse; ?></a>
					</div>
				</footer>
			</div>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<?php if ( is_page_template( 'page_templates/contact.php' ) ) {
			get_template_part('partials/acf-google-maps');
		} ?>

	</body>
</html>