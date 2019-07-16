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

	<div class="bg-white p-2">
			<div class="row mx-auto">
					<div class="mx-auto mt-3 " id="sponsors">
							<a href="https://kettlesyard.org"><img class="img-responsive" alt="Kettle's Yard logo" src="/wp-content/themes/staff-pages-theme/images/ky.jpg"></a>
							<a href="https://maa.cam.ac.uk"><img class="img-responsive" alt="Museum of Arch and Anth logo" src="/wp-content/themes/staff-pages-theme/images/maa.jpeg"></a>
							<a href="https://botanic.cam.ac.uk"><img class="img-responsive" alt="Botanical Garden logo" src="/wp-content/themes/staff-pages-theme/images/cubg-logo.jpg"></a>
							<a href="https://fitzmuseum.cam.ac.uk"><img class="img-responsive" alt="Fitzwilliam Museum logo" src="/wp-content/themes/staff-pages-theme/images/FitzwilliamLogo.png"></a>
							<a href="https://sedgwickmuseum.org"><img class="img-responsive" alt="Sedgwick Museum logo" src="/wp-content/themes/staff-pages-theme/images/sedgwick.jpg"></a>
							<a href="https://classics.cam.ac.uk"><img class="img-responsive" alt="Classical Archaeology Museum logo" src="/wp-content/themes/staff-pages-theme/images/classarch.png"></a>
							<a href="https://www.spri.cam.ac.uk/museum/"><img class="img-responsive" alt="Polar Research Museum logo" src="/wp-content/themes/staff-pages-theme/images/polar.jpg"></a>
							<a href="http://www.sites.hps.cam.ac.uk/whipple/"><img class="img-responsive" alt="Whipple Museum logo" src="/wp-content/themes/staff-pages-theme/images/whipple.jpg"></a>
							<a href="https://www.museum.zoo.cam.ac.uk/"><img class="img-responsive" alt="Museum of Zoology logo" src="/wp-content/themes/staff-pages-theme/images/zoology.jpg"></a>
					</div>

			</div>
	</div>
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
