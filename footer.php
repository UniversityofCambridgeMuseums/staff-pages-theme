<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FitzIntranet
 */

?>

	</div><!-- #content -->
	<footer class="text-white bg-black w-100">

		<div class="row">
			<div class="col-md-4 col-black">
				<a  href="https://museums.cam.ac.uk/"><img width="300" class="ml-4 pt-3 img-fluid" alt="UCM logo" src="https://research.museums.cam.ac.uk/images/ucm-logo.png"></a>

			</div>
			<div class="col col-yellow minimum">
				<a href="https://museums.cam.ac.uk/"><img class="ml-3 img-fluid pt-3" alt="Arts Council logo" src="https://research.museums.cam.ac.uk/images/ace.png"></a>
			</div>
			</div>

		<a href="#0" class="cd-top js-cd-top">Top</a>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://intranet.fitzmuseum.cam.ac.uk/wp-content/themes/fitzmuseum/js/backtotop.js"></script>
<script src="https://helpdesk.fitzmuseum.cam.ac.uk/assets/chat/chat.min.js"></script>
<script>
$(function() {
  new ZammadChat({
    background: '#1a6e78',
    fontSize: '12px',
    flat: true,
    chatId: 1
  });
});
</script>
</body>
</html>
