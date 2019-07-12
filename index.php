<?php
/**
 * The main template file
 *
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
<div class="warp-page" style="height:80px;"></div> 
<?php 
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
<section class="extension extension-2" style="margin-top:0;">
	<main>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="extension__title"><?php the_field('desc'); ?></h2>
            </div>
            <div class="col-12">
              <div class="extension__desc">
                <div class="extension__desc-overlay"></div>
				  <div class="row blog_card" style="margin-bottom: 25px;">
				  <div class="col-12 col-lg-4 col-md-6"><?php the_post_thumbnail('blog-thumb'); ?></div>	  
				  <div class="col-12 col-lg-8 col-md-6">
<div class="col-sm-12"><h2 class="course__title"><a style="color: #464646;" href="<?php echo get_permalink($post); ?>"><?php the_title(); ?></a></h2></div>		
					  <div class="course__subtitle" style="min-height:80px;"><?php the_content(); ?></div>
					  <div class="col-sm-12">
						  <button style="padding: 12px 15px;" class="btn-lg blog-btn">
						  	<a style="color:#fff;" href="<?php echo get_permalink($post); ?>"><?php echo __('Читать дальше'); ?></a>
						  </button>
					  </div>
				  </div>
				  </div>
                <div class="extension__read-more"><?php echo __('Подробнее'); ?></div>
              </div>
            </div>
          </div>
        </div>
        </main>
</section>
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
      <div class="modal-video">
        <div class="closeBtn">&times;</div>
        <div class="modal-content-video">
          <iframe src="//www.youtube.com/embed/XSQQUqJQjUw" allowfullscreen></iframe>
        </div>
      </div>
	
      <?php //End the loop
                endwhile; ?>	
    <?php  else : ?>
<div class="warp-page"></div> 
      <section class="extension" style="margin-top:0;">
        <center>
		  <h2>error 404: Page not found</h2>
		</center>
	  </section>
  <?php  endif; ?>  
<?php get_footer(); ?>