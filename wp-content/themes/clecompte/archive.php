<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="category_title"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


	

        <?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <div class="sub_line">
                  <div class="sub_line_left">
                    <div class="post-date"><?php the_time('F j, Y'); ?></div>
                  </div>
                  <div class="sub_line_right">
                    <div class="top_comments"><strong><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></strong></div>
                    <div class="share_post"><?php if (function_exists('sharethis_button')) { sharethis_button(); } ?></div>
                    <div class="facebook_share"><?php if(function_exists(addtofacebook)) : addtofacebook(); endif; ?></div>
                    <div class="tweetmeme_button">
                      <script type="text/javascript">tweetmeme_url = '<?php the_permalink(); ?>';</script>
                      <script type="text/javascript">tweetmeme_style = 'compact';</script>
                      <script type="text/javascript">tweetmeme_source = 'clecompte';</script>
					  <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
                    </div>
                  </div>
                </div>
				<div class="entry">
					<?php the_content('<img src="/wp-content/themes/clecompte/images/read-more.png" alt="Read More" title="Read More" />'); ?>
				</div>
			</div>
		<?php endwhile; ?>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
