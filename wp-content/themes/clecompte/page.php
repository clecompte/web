<?php get_header(); ?>

  <div id="page_content">
    <?php if (is_page('about')) echo '<h6 class="title">A Little <span>Background Info</span>.</h6>'; ?>
    <?php if (is_page('contact')) echo '<h6 class="title">Send <span>a Message</span>.</h6>'; ?>
    <?php if (is_page('why-hire-me')) echo '<h6 class="title">Why <span>Hire</span> Me?</h6>'; ?>
    <div class="content_area">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	  <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>