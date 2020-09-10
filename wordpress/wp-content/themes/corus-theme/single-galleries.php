<?php
/**
 * The template for displaying all single posts
 *
 * @package corus
 * 
 * Template Name: Full-width
 * Template Post Type: Gallery
*
 */

get_header();
?>

	<main id="main" class="site-main single-galleries">

		<?php
		while ( have_posts() ) :
            the_post();
        ?>
            <div class="gallery-slider">
                <?php 
                    for ($i=1; $i < 4; $i++) { 
                        $slide = get_field('slider_image_'. $i); 

                        // echo '<div>';
                        // print_r($slide);
                        // echo '</div>';
                        ?>
                        <div>
                            <img src="<?php echo $slide['sizes']['medium_large'] ?>" alt="<?php echo $slide['description'] ?>" width="<?php echo $slide['width'] ?>" height="<?php echo $slide['height'] ?>" >
                        </div>
                        <?php
                    }
                ?>
            </div>
        <?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();