<?php get_header( '404' ); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="background--tertiary text-align--center">

			<!-- article -->
			<article id="post-404" style="font-family: 'Press Start 2P', sans-serif;">

				<div class="fact fact--full">
					<h1>GAME OVER</h1>

					<a class="fact__icon max-width--500 animate animate--down margin-bottom--huge"><img src="/wp-content/uploads/2017/04/space-invader.svg" alt="space invader" /></a>

					<h2>You have wasted	<span id="demo"></span> seconds</h2>
					<h2> on a page that doesn't exist!</h2>

					<p><a href="/">Go back to awesome video game stats</a></p>
				</div>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

	<script>
	var js_variable  = 0;//'<?php echo $increment;?>';

		var interval = setInterval( increment, 1000);

		function increment(){
		    js_variable += 1;// js_variable % 360 + js_variable;

			document.getElementById("demo").innerHTML = js_variable;

		}

	</script>

<?php get_footer(); ?>
