<?php
/*
Template Name: FAQs
*/
?>

<?php get_header(); ?>

<!-- main -->
<div id="main">
    <div class="container">
        <div class="row">
            <section id="content" class="elevencol">
            	<article class="information sixteencol">
            			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
				    	<div class="post-header">
					        <h1><?php the_title(); ?></h1>
				    	</div>
				        <div class="post-body">
				            <div class="row">
				                <?php remove_filter ('the_content',  'wpautop'); ?>
								<?php the_content();?>
				            </div>
				        </div>
				    <?php endwhile; else: endif; ?>

            		<!-- <ul id="faq_menu">
            			<li><a href="#1">What is Wesward?</a></li>
            			<li><a href="#2">What is the what? How is it done? Why?</a></li>
            			<li><a href="#3">Who organizes Wesward?</a></li>
            		</ul>
            		<dl>
            			<dt id="1">What is Wesward?</dt>
            			<dd>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>

            			<dt id="2">What is the what? How is it done? Why?</dt>
            			<dd>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>

            			<dt id="2">What is the what? How is it done? Why?</dt>
            			<dd>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>

            			<dt id="3">Who organizes Wesward?</dt>
            			<dd>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</dd>
            		</dl> -->

				</article>
            </section>

            <?php include('sidebar-information.php'); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>