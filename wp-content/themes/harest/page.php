<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; ?>
			
<!-- wp-modify -->
			<?php /* Sidebar */ thinkup_sidebar_html(); ?>
<?php get_footer(); ?>