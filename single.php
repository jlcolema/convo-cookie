<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<h2>Ask <span class="pink">Aunt</span><span class="red">CC</span>! <i>Advice Column</i></h2>

		<div id="primary">

			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

		</div><!-- #primary -->

	</div>

	<div class="sidebar">

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>