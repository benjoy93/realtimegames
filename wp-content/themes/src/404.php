<?php get_header( '404' ); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="error404background error404section">

			<!-- article -->
			<article id="post-404" style="font-family: 'Press Start 2P', sans-serif;">

				<div class="fact fact--full">
					<h1>GAME OVER</h1>

					<a class="error404image animate animate--down margin-bottom--huge" href="/"><img src="/wp-content/uploads/2017/04/space-invader.svg" /></a>

					<h2>You have wasted	<span id="demo"></span> seconds</h2>
					<h2> on a page that doesn't exist!</h2>

					<p class="hover404"> <a href="/">Go back to awesome video game stats</a></p>
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
