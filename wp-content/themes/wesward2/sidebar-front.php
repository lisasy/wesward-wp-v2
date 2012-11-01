<aside id="sidebar" class="fivecol last">
    <div class="sidebar-front-small row">
        <h3>About Wesward</h3>
        <p>
            Wesward was born out of the feeling that anti-oppression, identity, activist and any other active Wesleyan student groups and students need an online hub for communication and collaboration.
        </p>
    </div>
    <ul id="social-links" class="row">
        <h3>Contact</h3>
        <li>
            <i class="icon-facebook-rect"></i>
            <a href="http://facebook.com/wesward.org">facebook.com/wesward.org</a>
        </li>
        <li>
            <span class="icon">%</span>
            <a href="mailto:contact@wesward.org">contact@wesward.org</a>
        </li>
        <li>
            <span class="icon">S</span>
            <a href="<?php bloginfo('rss2_url'); ?>">RSS feed</a>
        </li>
    </ul>
    <article id="side-opinion" class="block last">
        <h3>Opinion <span class="icon"></span></h3>
        <?php 
        query_posts( 'category_name=opinion' );
        while ( have_posts() ) : the_post(); ?>
        <div class="side-story">
            <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link() ?></small>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <a class="read-more" href="<?php echo get_option('home'); ?>/category/opinion/">Read more opinions.</a>
    </article>
    <?php dynamic_sidebar( 'front-sidebar' ); ?>
</aside>