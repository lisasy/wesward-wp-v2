<script> 
$(document).ready(function() {  // The code should be placed so it runs when the page is ready
 
$('ul#filter a').click(function() {  // When we click on something in the filter menu
        $(this).css('outline','none'); // Remove css outline
        $('ul#filter .current').removeClass('current'); // Removes the current class from where it is now
        $(this).parent().addClass('current'); // Adds the current class to the item we clicked on
 
        var filterVal = $(this).text().toLowerCase().replace(' ','-'); // Get the text inside the current filter item, transform it to lowercase, replace spaces with "-" and save it to filterVal.
 
        if(filterVal == 'all') { // If we clicked on "ALL"
            $('ul#post-container li.hidden').fadeIn('slow').removeClass('hidden'); // Removes all the hidden classes and show all posts
 
        } else {
            $('ul#post-container li').each(function() { // Loop through all post items
                if(!$(this).hasClass(filterVal)) { // If the post item does NOT have the class we clicked on (the category)
                    $(this).fadeOut('normal').addClass('hidden'); // hide it
                } else { // If the post item have the class with the category name we clicked on...
                    $(this).fadeIn('slow').removeClass('hidden'); // ...fade it slowly in
                }
            });
        }
        return false;
    });
}); // end document ready
</script>

<!-- Post Body Loop-->
<ul id="post-container">
    
    <!-- beginning of the loop -->
    <?php
    // The Query
    $the_query = new WP_Query();
     
    // The Loop
    while ( $the_query -> have_posts() ) : $the_query -> the_post();?>

    <!-- every post within list-items <li> with category-slug as classes -->
    <li class="<?php foreach((get_the_category()) as $category) {
echo get_cat_slug($category->cat_ID) . ' ';} ?> post-excerpt sixteencol">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <div class="post-body">
            <aside class="fourcol">
                <ol>
                    <li><?php the_time('F jS, Y'); ?> <span class="icon">P</span></li>
                    <li>Comments <span class="icon">:</span></li>
                    <ul class="tags">
                        <?php the_category(', ') ?>
                    </ul>
                </ol>
            </aside>
            <div class="content twelvecol last">
                <span class="author">By <?php the_author_posts_link() ?></span>
                <?php the_excerpt(); ?>
                <a href="#" class="read-more">(...read more)</a>
            </div>
        </div>
    <li>
    <?php endwhile;
    if(function_exists('wp_paginate')) {
        wp_paginate();
    }
    // Reset Post Data
    wp_reset_postdata();
    ?>
    <!-- edit -->
</ul>




<!-- Post Body Loop-->
<ul id="post-container">
    <!-- beginning of the loop -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <li class="post-excerpt sixteencol">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <div class="post-body">
                <aside class="fourcol">
                    <ol>
                        <li><?php the_time('F jS, Y'); ?> <span class="icon">P</span></li>
                        <li>Comments <span class="icon">:</span></li>
                        <ul class="tags">
                            <?php the_category(', ') ?>
                        </ul>
                    </ol>
                </aside>
                <div class="content twelvecol last">
                    <span class="author">By <?php the_author_posts_link() ?></span>
                    <?php the_excerpt(); ?>
                    <a href="#" class="read-more">(...read more)</a>
                </div>
            </div>
        </li>
    <?php endwhile; else : endif; ?>
</ul>




<!-- Post Body Loop-->
                <!-- beginning of the loop -->
                <ul id="post-container">
                	<?php

					// The Query
					$the_query = new WP_Query( $args );

					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();?>
					<li>	
					<?php the_title(); ?>
					</li>	
					<?php endwhile;

					// Reset Post Data
					wp_reset_postdata();

					?>
                </ul>

                <li class="<?php foreach((get_the_category()) as $category) {
				echo get_cat_slug($category->cat_ID) . ' ';} ?> post-excerpt sixteencol">

				<?php
				$category = get_the_category();
				$cat_=name =  $category[0]->cat_name;
				?>

				<li class="<?php echo ">

				<li class="<?php foreach(get_the_category() as $category) {
echo $category->slug . ' ';} ?>">

<!-- if else thumbnails test -->
<!-- If Post-Thumbnail Exists -->
                        <?php if( has_post_thumbnail()) {

                        echo 
                        '<div class="post-body">
                            <aside class="fourcol">
                                <div class="excerpt-image row">
                                <?php
                                if ( has_post_thumbnail() ) {the_post_thumbnail();}
                                ?></div>
                                <ol class="row">
                                    <li><?php the_time("M. j, Y"); ?> <span class="icon">P</span></li>
                                </ol>
                            </aside>
                            <div class="content twelvecol last">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <span class="author row">By <?php the_author_posts_link() ?>
                                </span>
                                <?php echo get_post_meta($post->ID, "description", true); ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="read-more">(...read more)</a>
                            </div>
                        </div>';

                        } else {

                        echo 
                        '<div class="post-body">
                            <div class="content sixteencol last">
                                <ol class="row">
                                    <li><?php the_time("M. j, Y"); ?> <span class="icon">P</span></li>
                                </ol>
                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                <span class="author row">By <?php the_author_posts_link() ?>
                                </span>
                                <?php echo get_post_meta($post->ID, "description", true); ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="read-more">(...read more)</a>
                            </div>
                        </div>';

                        }?>
