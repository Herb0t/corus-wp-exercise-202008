<?php
get_header();
?>

	<main id="main" class="main-site">

		<?php
		if ( have_posts() ) :
			
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
            endif;
            
            while ( have_posts() ) :
				the_post();

				// display the content
				the_content();

			endwhile;

			the_posts_navigation();

		else :
			echo "no post found";

		endif;
		?>

	</main>

<?php
get_sidebar();
get_footer();