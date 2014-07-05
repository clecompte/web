<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

  <section id="page_content">
    <h6 class="tagline">I <span>Design</span>, <span>Build</span> &amp; <span>Manage</span> for the Web.</h6>
    <div id="home_buttons">
      <div class="button"><a href="/projects/"><span>Web Design Projects</span></a></div>
      <div class="button"><a href="/about/"><span>My<br />History</span></a></div>
      <div class="button"><a href="/blog/"><span>The<br />Blog</span></a></div>
      <div class="clear"></div>
    </div>
  </section>
  
  <section id="updates_content">
    <h6 class="share">Stuff I Write.</h6>
    <div class="updates_container">
      <?php
        $args = array('posts_per_page' => 10);
        $home_post_featured = new WP_Query($args);
        if($home_post_featured->have_posts()) : while($home_post_featured->have_posts()) : $home_post_featured->the_post(); ?>
      <div class="post">
        <p class="post_date"><strong><?php the_time('F j, Y'); ?></strong></p>
        <h3 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <div class="post_content">
          <?php global $more; $more = 0; the_content(); ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="more">Keep Reading <i class="fa fa-long-arrow-right"></i></a>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <a href="/blog/page/2/" class="more-lg">More Posts <i class="fa fa-chevron-right"></i></a>
    </div>
    <div class="clear"></div>
  </section>

<?php get_footer(); ?>