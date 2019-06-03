<?php
/**
* Template Name: Homepage Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

      the_content();

		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_footer();

