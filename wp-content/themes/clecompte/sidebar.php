      </div>
      <div class="content_right">
		<div class="sidebar">
          <a href="http://www.theprojectweb.com" title="The Project Web Blog"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-project-web-logo.png" alt="The Project Web - Resources to Help Small Business and Freelance Web Designers Get the Project Done" /></a>
          <a href="/feed/" title="RSS Subscribe"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-subscribe.png" class="title_img" alt="RSS"></a>
          <!--<a href="http://www.projectpalace.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/project-palace-button.png" class="title_img"></a>-->
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-about.png" class="title_img" alt="About Me">
          <div class="snippet"><p>I'm a web designer and project manager based out of Northern Virginia working at <a href="http://www.cavendo.com" title="Cavendo Web Design">my own company</a>. This blog is an extension of my knowledge (including what I'm learning) and experience.<br /><strong><a href="/about/" title="More About Chris LeCompte">Read More</a></strong></p></div>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-recent.png" class="title_img" alt="Recent Blog Posts">
          <div class="snippet">
			 <?php
             global $post;
             $myposts = get_posts('numberposts=5&cat=-260');
             foreach($myposts as $post) :
             ?>
                <p><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong> <span class="post-title-sm"><?php the_time('F j, Y'); ?></span></p>
             <?php endforeach; ?>
		  </div>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-categories.png" class="title_img" alt="Blog Categories">
          <ul class="categories">    
			<?php wp_list_categories('title_li=&exclude=1,10,3,6,7,9,11,12,13,131,17'); ?> 
		  </ul>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-what-saying.png" class="title_img" alt="Twitter Updates">
          <div class="snippet"><p><?php aktt_latest_tweet(); ?> &nbsp;&nbsp; <strong><a href="http://www.twitter.com/clecompte" title="More Twitter Updates">Get More</a></strong></p></div>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-connect.png" class="title_img" alt="Social Media">
          <div class="social_media"><a href="http://www.twitter.com/clecompte" title="Chris LeCompte on Twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-twitter.png"></a><a href="http://www.facebook.com/clecompte" title="Chris LeCompte on Facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-facebook.png"></a><a href="http://www.linkedin.com/in/clecompte" title="Chris LeCompte on LinkedIn"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side-linkedin.png"></a></div>
        </div>
      </div>