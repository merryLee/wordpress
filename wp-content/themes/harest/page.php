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
* 3.23. float(shortcode) 설정.
* sidebar 페이지 별 구분.
*
*/

get_header(); ?>


<?php
$pageid = get_the_ID();

if(($pageid==14)||($pageid==18)
||($pageid==375)||($pageid==378)||($pageid==381)||($pageid==384)
||($pageid==898)||($pageid==901)||($pageid==905)||($pageid==908)) : ?>

<div class="three_fourth">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; ?>
</div>
<div class="one_fourth last" style="background-color: #fff;">
<!-- wp-modify -->
	<?php /* Sidebar */ thinkup_sidebar_html(); ?>
</div>

<?php else : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>