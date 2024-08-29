<?php get_header(); ?>

	<div class="body group">

		<div class="main">

			<h2><?php the_title(); ?></h2>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
				<article class="post" id="post-<?php the_ID(); ?>">

					<div class="entry">
		
						<?php the_content(); ?>
		
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
		
					</div>
		
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
				</article>

			<?php endwhile; endif; ?>

		</div>

		<div class="sidebar">

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
