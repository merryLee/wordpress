<?php
/**
 * The main template file.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php if( have_posts() ): ?>

				<div id="container">

				<?php while( have_posts() ): the_post(); ?>

					<div class="blog-grid element<?php echo thinkup_input_stylelayout(); ?>">

					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>

						<?php if( has_post_thumbnail() ) { ?>
						<header class="entry-header">

							<?php thinkup_input_blogimage(); ?>

						</header>
						<?php } ?>

						<div class="entry-content">

							<?php thinkup_input_blogtitle(); ?>
							<?php thinkup_input_blogmeta(); ?>
							<?php thinkup_input_blogtext(); ?>
							<?php thinkup_input_readmore(); ?>

						</div>

					</article><!-- #post-<?php get_the_ID(); ?> -->

					</div>

				<?php endwhile; ?>

				</div><div class="clearboth"></div>

				<div id="pag-infinite">
					<a class="more-link themebutton"><?php _e( 'Load More', 'harest' ); ?></a>
				</div>

				<?php the_posts_pagination(); ?>

			<?php else: ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>		

			<?php endif; ?>

<?php get_footer() ?>