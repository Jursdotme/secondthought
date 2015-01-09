			<!-- footer -->
			<footer class="footer" role="contentinfo">


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
