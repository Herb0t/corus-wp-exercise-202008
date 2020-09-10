<?php
/**
 * The template for displaying all single posts
 *
 * @package corus
 */

get_header();
?>

	<main id="main" class="site-main single">

		<?php
		while ( have_posts() ) :
            the_post();
        ?>
            <div class="slider">
                <div><?php print_r(get_field('slider_image_1')); ?></div>
                <div><?php print_r(get_field('slider_image_2')); ?></div>
                <div><?php print_r(get_field('slider_image_3')); ?></div>
            </div>
        <?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();