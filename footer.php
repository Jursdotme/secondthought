			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<?php
					$options = (array)get_option('company_options');
					$name = $options['companyname'];
					$address = $options['companyaddress'];
					$zip = $options['companyzip'];
					$city = $options['companycity'];
					$phone = $options['companyphone'];
					$email = $options['companyemail'];
				 ?>

				<!-- copyright -->
				<div class="copyright">
					<p><?php echo $name; ?> &middot; <?php echo $address; ?> &middot; <?php echo $zip; ?> <?php echo $city; ?> &middot; tlf <?php echo $phone; ?> &middot; <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<?php if ( is_page_template( 'page_templates/contact.php' ) ) {
			get_template_part('partials/acf-google-maps');
		} ?>

	</body>
</html>
