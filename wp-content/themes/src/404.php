<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Nothing to see here!', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

				<div id="demo"></div>

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
