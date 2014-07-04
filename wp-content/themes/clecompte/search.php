<?php get_header(); ?>

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <p class="post-date"><?php the_time('F j, Y'); ?></p>
				<div class="entry">
					<?php the_content('<div align="right" class="read_more"><img src="/wp-content/themes/clecompte/images/read-more.png" /></div>'); ?>
				</div>
				<p class="comment-line"><strong><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></strong></p>
			</div>
		<?php endwhile; ?>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        <?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

		<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>