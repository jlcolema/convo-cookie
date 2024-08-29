<?php get_header(); ?>

	<div class="body group">

		<div class="main">

			<h2>Ask <span class="pink">Aunt</span><span class="red">CC</span>! <i>Advice Column</i></h2>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

					<div class="entry">
						<?php the_content(); ?>
					</div>
		
				</article>
		
			<?php endwhile; ?>
		
			<?php include (TEMPLATEPATH . '/-/inc/nav.php' ); ?>
		
			<?php else : ?>
		
				<h2>Not Found</h2>
		
			<?php endif; ?>

		</div>

		<div class="sidebar">
	
			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
