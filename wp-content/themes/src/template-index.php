<?php /* Template Name: Index Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

			<?php
			$args = array( 'post_type' => 'fact', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			  echo '<div class="fact-container">';
				  the_title();
				  the_field('increment_value');
				  the_field('background_colour');
			  echo '</div>';
			endwhile;
			?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
