<?php /* Template Name: Index Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
			<?php
			$args = array( 'post_type' => 'fact', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$increment = get_field('increment_value');
				echo '<section class="fact" data-service="';
				echo $increment;
				echo '"';
				echo 'style="background-color:';
				the_field('background_colour');
				echo '">';

				echo '<div class="fact__container">';

				echo '<div class="fact__icon">';
				the_post_thumbnail();
				echo '</div>';

				echo '<h2 class="fact__value">2</h2>';

				echo '<h3 class="fact__strapline">';
				the_field('intro_text');
				echo '</h3>';

				echo '</div>';

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
