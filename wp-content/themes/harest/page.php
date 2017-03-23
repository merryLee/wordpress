<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package ThinkUpThemes
 */

/*
* 3.22. sidebar 위치 footer->page로 수정.
* 3.23. float(부트스트랩) 설정.
*
*/

get_header(); ?>

<div class="three_fourth">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; ?>
</div>

<div class="one_fourth last">
<!-- wp-modify -->
	<?php /* Sidebar */ thinkup_sidebar_html(); ?>
</div>

<?php get_footer(); ?>