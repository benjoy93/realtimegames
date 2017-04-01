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

				echo '<h2 class="fact__value" id="demo">2</h2>';

				echo '<h3 class="fact__strapline">';
				the_field('intro_text');
				echo '</h3>';

				echo '</div>';

				echo '</section>';
			endwhile;
			?>

	</main>

	<script>
	var js_variable  = 0;//'<?php echo $increment;?>';

		var interval = setInterval( increment, 1000);

		function increment(){
		    js_variable += 1;// js_variable % 360 + js_variable;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			  if (this.readyState == 4 && this.status == 200) {
			   document.getElementById("demo").innerHTML = this.responseText * js_variable;
			  }
			};
			xhttp.open("GET", "/wp-content/test.php", true);
			xhttp.send();
		}


	</script>

<?php get_footer(); ?>
