<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0" />

<title><?php if(is_home()) { echo('Web Design, Project Management, Client Relationships - Chris LeCompte'); } else { wp_title('-', true, right); echo('Chris LeCompte'); } ?></title> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://www.clecompte.com/feed/" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="http://www.clecompte.com/feed/" />
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/html5shiv.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cl.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/codeview.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.min.js"></script>

</head>

<body <?php body_class($class); ?>>

<div id="page_body">

  <header id="page_header">
    <a href="/home/" title="Chris LeCompte" id="logo">Chris LeCompte</a>
    <div class="header_right">
      <p>I'm passionate about creating awesome websites and managing projects and businesses.</p>
      <nav class="page_nav">
        <ul>
          <li><a href="/projects/" title="Project Portfolio">Portfolio &amp; Case Studies</a></li>
          <li><a href="/about/" title="About Me">About Me</a></li>
          <li><a href="/contact/" title="Contact Me">Contact Me</a></li>
        </ul>
      </nav>
    </div>
  </header>