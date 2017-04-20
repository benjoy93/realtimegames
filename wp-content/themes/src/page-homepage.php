<?php /* Template Name: Index Page Template */ get_header(); ?>

<main role="main" aria-label="Content">

	<section class="fact height--full flex flex--center text-color--dark">
		<aside class="position--absolute position--top position--left position--front padding--large text-align--left">
			<h2>Credits</h2>
			<?php
			$args = array( 'post_type' => 'credit', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

			?>

			<a href="<?php the_field('credit_url');	?>">
				<div class="credits">

					<h3 class="display--inline">
						<?php the_field('credit_name');	?>
					</h3>

					<h3 class="display--inline margin-left--normal text-fade text-fade--dark">
						<?php the_field('credit_role');	?>
					</h3>

				</div>
			</a>

		<?php endwhile;	?>
	</aside>

	<h1><?php the_field('intro_header', 4); ?></h1>
	<p class="text-weight--bold"><?php the_field('intro_text', 4); ?></p>

	<a href="#facts"><img class="max-width--50 animate animate--down" src="<?php the_field('arrow_icon', 4); ?>" alt="animated down arrow"></a>
</section>

<section id="facts">

	<?php
	$namea = 1;
	$args = array( 'post_type' => 'fact', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$increment = get_field('increment_value');
	$type = get_field('fact_type');

	?>

	<?php
	if ($type != "half") {
		echo "<div class='float--clear'></div>";
	}
	?>

	<section class="fact position--relative flex flex--center width--<?php echo $type; ?> <?php the_title(); ?>" id="<?php the_title(); ?>" data-increment="<?php echo $increment; ?>" style="background-color: <?php the_field('background_colour'); ?>">
		<div class="fact__container ">

			<div class="fact__icon">
				<?php the_post_thumbnail(); ?>
			</div>

			<h2 class="fact__value display--inline-block" id="demo-<?php the_title(); ?>">
			<h2 class="display--inline-block margin-left--normal"><?php the_field('increment_unit'); ?></h2>

			<h3 class="fact__strapline text-weight--normal"><?php the_field('intro_text'); ?></h3>

			<div class="fact__source position--right position--bottom">
				<cite>Sourced from:
					<a class="margin-left--small" href="<?php the_field('source_url'); ?>"><?php the_field('source_name'); ?></a>
				</cite>
			</div>
		</div>
	</section>

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
