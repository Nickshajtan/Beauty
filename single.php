<?php
/**
 * The template file for any page
 *
 */
get_header(); ?>
<div class="warp-page"></div> 
      <section class="extension" style="margin-top:0;">
<main role="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="extension__desc">
                    <div class="extension__desc-overlay"></div>
    <?php if ( have_posts() ) : ?>
    
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <h2 class="title"><?php the_title(); ?></h2>
                 <p><?php the_content(); ?></p>
        </article>
        <div class="extension__read-more"><?php echo __('Подробнее'); ?></div>
       <?php //End the loop
                endwhile; ?>	
    <?php  else : 
        echo "<h2>error 404: Page not found</h2>"; 
    endif; ?>
                    </div>
                </div>
            </div>
        </div>
</main>    
</section>
<?php get_footer(); ?>