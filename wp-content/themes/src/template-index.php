<?php /* Template Name: Index Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
			<?php
			$args = array( 'post_type' => 'fact', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$increment = get_field('increment_value');
				echo '<section class="fact-container" data-service="';
				echo $increment;
				echo '"';
				echo 'style="background-color:';
				the_field('background_colour');
				echo '">';
				echo '<h2>';
				the_title();
			    echo '</h2>';
				echo '<div id="demo"></div>';
				echo '</section>';
			endwhile;
			?>

	</main>

	<script>
		var js_variable  = '<?php echo $increment;?>';

		var interval = setInterval( increment, 1000);

		function increment(){
		    js_variable = js_variable % 360 + js_variable;
		}

		document.getElementById("demo").innerHTML = js_variable;
	</script>

<?php get_footer(); ?>
