<?php get_header(); ?>

  <div id="page_content">
    <h6 class="title"><span>Projects</span> &amp; <span>Case Studies</span>.</h6>
    <div class="content_area project_container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="project_name"><?php the_title(); ?></h1>
        <p class="project_statement"><?php the_field('statement'); ?></p>
        <?php the_post_thumbnail(); ?>
        <div class="project_details">
		  <?php the_content(); ?>
        </div>
	  <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>