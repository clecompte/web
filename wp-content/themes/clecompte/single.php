<?php get_header(); ?>

  <div id="page_content" class="post-single">
    <div class="content_area">
    	<p class="post_date"><strong><?php the_time('F j, Y'); ?></strong></p>
    	<h1 class="post_title"><?php the_title(); ?></h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		  <?php endwhile; endif; ?>
		  <p class="post-contact">Have a question or comment about this post? <a href="/contact/">Drop me a line!</a></p>
    </div>
</div>

<?php get_footer(); ?>