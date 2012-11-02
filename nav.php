<!--header-->
<div id="header"> 
    <div class="container">
        <div class="row">
            <div id="logo-block" class="fourcol">
                <a href="<?php echo get_option('home'); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/white_logo.png"></a>
            </div>
            <div class="twelvecol last">
                <div id="top-info" class="row">
                    <ul class="tencol">
                        <?php wp_nav_menu (
                            array(
                                'menu'=>'top-info'
                            ))
                        ;?>
                    </ul>
                </div>
                <div id="top-menu" class="row">
                    <ul id="top-menu-links" class="sixteencol"><!-- menu-->
                        <li>
                            <span class="menu-icon icon">ï</span>
                            <a href="<?php echo get_option('home'); ?>">Home</a>
                        </li>
                        <li>
                            <span class="menu-icon icon">O</span>
                            <a href="<?php echo get_option('home'); ?>/voices">Voices</a>
                        </li>
                        <li>
                            <span class="menu-icon icon">l</span>
                            <a href="<?php echo get_option('home'); ?>/resources">Resources</a>
                        </li>
                        <li>
                            <span class="menu-icon icon">P</span>
                            <a href="<?php echo get_option('home'); ?>/calendar">Calendar</a>
                        </li>
                        <li id="post-content-link">
                           <a href="<?php echo get_option('home'); ?>/post-something/">Post Something!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 