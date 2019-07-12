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
            <div class="col-12">
              <div class="extension__desc">
                <div class="extension__desc-overlay"></div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <h2 class="title"><?php the_title(); ?></h2>
                 <p><?php the_content(); ?></p>
        </article>
        <div class="extension__read-more"><?php echo __('Подробнее'); ?></div>
        <a class="header__btn extension__btn" href="<?php bloginfo('url'); ?>/blog"><?php the_field('blog-button'); ?><span></span></a>
              </div>
            </div>
        </main>
					<div class="modal">
        <div class="closeBtn">&times;</div>
        <div class="modal-content">
          <div class="modal-title"><?php echo __('Записаться <span>со скидкой </span>на первое наращивание'); ?></div>
          <div class="modal-subtitle"><?php echo __('Оставьте свой телефон и мы пришлем вам СМС с номером купона'); ?></div>
          <form class="main-form" method="POST">
            <div class="input-number-wrap">
              <div class="number-code">+7</div>
              <input class="input-number-field" id="phone2" type="number" name="phone" placeholder="(123) 456-78-90" required>
            </div>
            <div class="shadow-wrap">
              <input class="promo-form__btn" type="submit" value="<?php echo __('Записатся со скидкой'); ?>"><span></span>
            </div>
          </form>
          <div class="modal-privacy"><?php echo __('Нажимая кнопку “Записаться со скидкой“ вы соглашаетесь с <a href="">политикой конфиденциальности</a>'); ?></div>
        </div>
      </div>
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