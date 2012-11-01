<?php get_header(); ?>
<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="elevencol">
            	<article class="information sixteencol">
                   <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			       <?php /* If this is a category archive */ if (is_category()) { ?>
			        <h1>Archive for the Ô<?php single_cat_title(); ?>Õ Category<h1>
			       <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			        <h1>Posts Tagged Ô<?php single_tag_title(); ?>Õ<h1>
			       <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			        <h1>Showing posts from <?php the_time('F jS, Y'); ?><h1>
			       <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			        <h1>Showing posts from <?php the_time('F Y'); ?><h1>
			       <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			        <h1>Showing posts from <?php the_time('Y'); ?><h1>
			      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			        <h1>Author Archive<h1>
			       <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			        <h1>Blog Archives<h1>
			       <?php } ?>
				</article>
					<ul id="post-container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
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
                    <?php endwhile; else: endif; ?>
                </ul>
            </section>
            <?php include('sidebar-posts.php'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>