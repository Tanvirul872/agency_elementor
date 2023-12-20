<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		while (have_posts()) :
			the_post();
		?>
			<div class="single-blog">
				<div class="blog-thumb">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
				</div>
				<div class="blog-content">
					<ul class="meta-info d-flex justify-content-between">
						<li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
						<li><?php the_time('M d, Y'); ?></li>
					</ul>
					<h1 class="blog-title my-3"><?php the_title(); ?></h1>
					<div class="blog-post-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php


		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>