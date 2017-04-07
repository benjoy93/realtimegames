<?php /* Template Name: Index Page Template */ get_header(); ?>

<main role="main" aria-label="Content">

	<section class="fact fact--full text-color--dark">
		<aside class="position--absolute position--top position--left padding--large text-align--left">
			<h2>Credits</h2>
			<?php
				$args = array( 'post_type' => 'credit', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				echo '<a href="';
					the_field('credit_url');
				echo '">';

				echo '<div class="credits">';

					echo '<h3 class="display--inline">';
						the_field('credit_name');
					echo '</h3>';

					echo '<h3 class="display--inline margin-left--normal text-fade text-fade--dark">';
						the_field('credit_role');
					echo '</h3>';

				echo '</div>';

				echo '</a>';
				endwhile;
			?>
		</aside>

		<h1>Video Games in real time</h1>
		<h5>Scroll down to see what has happened in the video game world since you landed on this page!</h5>

		<a href="#facts"><img class="max-width--50 animate animate--down" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg"></a>
	</section>

	<section id="facts">

	<?php
	$namea = 1;
	$args = array( 'post_type' => 'fact', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$increment = get_field('increment_value');

	echo '<section class="fact position--relative ';
	the_title();
	echo '" ';

	echo 'id="';
	the_title();
	echo '" ';

	echo 'data-increment="';
	echo $increment;
	echo '"';

	echo 'style="background-color:';
	the_field('background_colour');
	echo '">';

	echo '<div class="fact__container ">';

	echo '<div class="fact__icon">';
	the_post_thumbnail();
	echo '</div>';

	echo '<h2 class="fact__value display--inline-block" id="demo-';
	the_title();
	echo '"></h2>';

	echo '<h2 class="display--inline-block margin-left--normal">';
	the_field('increment_unit');
	echo '</h2>';

	echo '<h3 class="fact__strapline text-weight--normal">';
	the_field('intro_text');
	echo '</h3>';

	?>

	<div class="fact__source position--right position--bottom">
		<cite>Sourced from:
			<a class="margin-left--small" href="<?php the_field('source_url'); ?>"> <?php the_field('source_name'); ?> </a>
		</cite>
	</div>

	<?php

	echo '</div>';

	echo '</section>';
	?>

	<script>
	var js_variable<?php echo $namea; ?>  = 0;//'<?php echo $increment;?>';

	var interval<?php echo $namea ?> = setInterval( increment<?php echo $namea ?>, 1000);

	function increment<?php echo $namea; ?>(){
		js_variable<?php echo $namea; ?> += 1;// js_variable % 360 + js_variable;

		document.getElementById("demo-<?php the_title(); ?>").innerHTML = document.getElementById("<?php the_title(); ?>").getAttribute('data-increment') * js_variable<?php echo $namea; ?>;
	}
	</script>

	<?php
		$namea++;
		endwhile;
	?>

	</section>

</main>

<?php get_footer(); ?>
