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
      <div class="button"><a href="http://www.theprojectweb.com"><span>The<br />Blog</span></a></div>
      <div class="clear"></div>
    </div>
  </section>
  
  <section id="updates_content">
    <h6 class="share">Stuff I Like to Share.</h6>
    <div class="updates_container">
      <div class="update_col bookmarks">
        <h4>Things I Find</h4>
        <?php echo do_shortcode('[RSSImport display="5" feedurl="http://delicious.com/v2/rss/theprojectweb" 
date="true"]'); ?>
        <p class="more_link"><a href="http://www.delicious.com/theprojectweb" title="More Links on Delicious">Get More</a></p>
      </div>
      <div class="update_col">
        <h4>Things I Say</h4>
        <?php echo do_shortcode('[aktt_tweets count=4]'); ?>
        <p class="more_link"><a href="http://twitter.com/clecompte" title="More Tweets on Twitter">Get More</a></p>
      </div>
      <div class="update_col">
        <h4>Things I Post</h4>
        <script src="http://feeds.feedburner.com/TheProjectWeb?format=sigpro" type="text/javascript" ></script><noscript><p>Subscribe to RSS headline updates from: <a href="http://feeds.feedburner.com/TheProjectWeb"></a><br/>Powered by FeedBurner</p> </noscript>
        <p class="more_link"><a href="http://www.theprojectweb.com" title="More Blog Posts from The Project Web">Get More</a></p>
      </div>
    </div>
    <div class="clear"></div>
  </section>

<?php get_footer(); ?>