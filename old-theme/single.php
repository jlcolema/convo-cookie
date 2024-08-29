<?php get_header(); ?>

	<div class="body group">

		<div class="main">

			<h2>Ask <span class="pink">Aunt</span><span class="red">CC</span>! <i>Advice Column</i></h2>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h1 class="entry-title"><?php the_title(); ?></h1>
		
					<div class="entry-content">
						
						<?php the_content(); ?>
		
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
						<?php the_tags( 'Tags: ', ', ', ''); ?>

					</div>
					
					<?php edit_post_link('Edit this entry','','.'); ?>
					
				</article>

			<?php endwhile; endif; ?>

		</div>

		<div class="sidebar">
			
			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>