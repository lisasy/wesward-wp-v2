<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Wesward</title>
    <meta name="author" content="Wesward" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

    <!-- CSS --> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/1140.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsiveslides.css" />

    <!-- LESS -->
    <link rel="stylesheet/less" href="<?php bloginfo('template_directory'); ?>/less/style.less" type="text/css" />
    <script src="<?php bloginfo('template_directory'); ?>/js/less-1.3.0.min.js"></script>

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
<!-- AddThis Welcome BEGIN -->
<script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=ra-5035132306b6fcd3"></script>
<script type='text/javascript'>
addthis.bar.initialize({'default':{"backgroundColor":"#000000","buttonColor":"#16b3da","textColor":"#FFFFFF","buttonTextColor":"#FFFFFF"},rules:[{"name":"Facebook","match":{"referringService":"facebook"},"message":"Tell your friends about us:","action":{"type":"button","text":"Share on Facebook","verb":"share","service":"facebook"}}]});
</script>
<!-- AddThis Welcome END -->
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