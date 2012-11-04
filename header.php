<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Wesward</title>
    <meta name="author" content="Wesward" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

    <!-- CSS --> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/1140.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsiveslides.css" />

    <!-- TypeKit -->
    <script type="text/javascript" src="//use.typekit.net/dmg5qgn.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- jQuery -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script> 
    <script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script> 
    <script> 
    $(document).ready(function() {  // The code should be placed so it runs when the page is ready

    // make clickable boxes
    $("#top-menu-links li").click(function(){
         window.location=$(this).find("a").attr("href"); 
         return false;
    });
    $("#post-navigation li").click(function(){
         window.location=$(this).find("a").attr("href"); 
         return false;
    });

    // slider
    $("#slider3").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
      });

    // edit event
    $("#footer aside:last-child").addClass('last');

    }); // end document ready
    </script>
    <!-- Top Notifcation -->
<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29358197-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_head(); ?>
</head>
<body>
<?php include('nav.php'); ?>