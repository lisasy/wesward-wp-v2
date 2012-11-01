<?php get_header(); ?>

<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="elevencol">
                <h1>Showing posts from: <?php
                if ($cat)
                {echo get_the_category_by_ID($cat);}
                ?> </h1>
                <ul id="post-container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                    <li>
 <article class="sixteencol post-body">
                            <aside class="fourcol">
                                <ol>
                                    <li><?php the_time('M. j, Y'); ?> <span class="icon">P</span></li>
                                    <li><?php comments_popup_link( '0 comments', '1 comment', '% comments' ); ?> <span class="icon">:</span></li>
                                    <ul class="tags">
                                        <?php foreach((get_the_category()) as $category) { echo $category->cat_name . '<li>  </li>'; } ?>
                                    </ul>
                                </ol>
                            </aside>
                            <div class="content twelvecol last">
                                <a href="<?php the_permalink(); ?>" class="row"><h2><?php the_title(); ?></h2></a>
                                <span class="author row">By <?php the_author_posts_link() ?>
                                </span>
                                <?php echo get_post_meta($post->ID, 'description', true); ?>
                                <?php the_content(); ?>
                                <a href="<?php the_permalink(); ?>" class="read-more">(...read more)</a>
                            </div>
                        </article>
                    <li>
                    <?php endwhile; else: endif; ?>
                </ul>

            </section>

            <?php include('sidebar-posts.php'); ?>

        </div>
    </div>
</div>

</div>
</body>
</html>