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

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
