<?php get_header(); ?>

  <div id="page_content" class="post-single">
  	<p class="post_date"><strong><?php the_time('F j, Y'); ?></strong></p>
    <h1 class="post_title"><?php the_title(); ?></h1>
    <div class="content_area">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	  <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>