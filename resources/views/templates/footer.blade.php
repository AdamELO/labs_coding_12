	<!-- Footer section -->
	<footer class="footer-section">
		<?php
			$footer->footer = str_replace('Colorlib', "<a href='https://colorlib.com' target='_blank'>Colorlib</a>", $footer->footer);
		?>
		<h2>{!!$footer->footer!!}</h2>
	</footer>
	<!-- Footer section end -->