<?php get_header(); ?>

  <div id="page_content" class="post-single">
    <div class="content_area">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<p class="post_date"><strong><?php the_time('F j, Y'); ?></strong></p>
    	<h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(""); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="more">Keep Reading <i class="fa fa-long-arrow-right"></i></a>
			<?php endwhile; if(function_exists('wp_pagenavi')) { wp_pagenavi(); } endif; ?>
    </div>
</div>

<?php get_footer(); ?>