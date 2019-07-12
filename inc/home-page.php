<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
 <?php 
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
<header class="header">
        <div class="container">
          <div class="row">
            <div class="col-12 header__title-center">
              <h1 class="header__title"><?php the_field('main-front-title'); ?></h1>
            </div>
            <div class="col-12 col-lg-8 col-md-7 offset-lg-4 offset-md-5">
              <div class="header__subtitle-wrapper">
                <div class="header__subtitle"><?php the_field('main-subtitle') ?></div>
                <div class="mouse__element2" data-aos="zoom-in-down"></div>
              </div>
            </div>
            <div class="col-12">
              <div class="header__btn-wrapper"><a class="header__btn modalBtn"><?php the_field('btn-promocode'); ?><span></span></a></div>
            </div>
            <div class="col-12">
              <div class="header__video"><a class="header__video-btn"></a>
                <div class="header__video-title"><?php the_field('main-video-title'); ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mouse__element1" data-aos="fade-right"></div>
        <div class="mouse__element3" data-aos="fade-down-left"></div>
        <div class="mouse__element4" data-aos="fade-left"></div>
      </header>
      <section class="promo-code">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="promo-code__title"><?php the_field('discount-title'); ?></h2>
              <div class="clearfix"></div>
              <div class="promo-code__price-wrapper">
                <div class="promo-code__price-first"></div>
                <div class="promo-code__price-last"></div>
                <div class="promo-code__green-heart" data-aos="fade-up-left" data-aos-duration="2000"></div>
              </div>
            </div>
            <div class="col-12 timer-padding">
              <div class="timer">
                <div class="mouse__element5" data-aos="fade-down-right"></div>
                <div class="mouse__element6" data-aos="fade-up" data-aos-duration="3000"></div>
                <div class="timer__title"><?php the_field('discount-body'); ?></div>
                <div class="timer__block">
                  <div class="timer__text">До завершения<span>осталось</span></div>
                  <div class="timer__count" id="timer"></div>
                </div>
              </div>
            </div>
            <div class="col-12 timer-padding">
              <div class="promo-form">
                <div class="mouse__element7" data-aos="flip-left" data-aos-duration="3000" data-aos-easing="ease-out-cubic"></div>
                <div class="mouse__element8" data-aos="fade-up-right"></div>
                <div class="mouse__element9" data-aos="zoom-in-left"></div>
                <form class="main-form" method="POST">
                  <div class="input-number-wrap">
                    <div class="number-code">+7</div>
                    <input class="input-number-field" id="phone" type="number" name="phone" placeholder="(123) 456-78-90" required>
                  </div>
                  <div class="shadow-wrap">
                    <input class="promo-form__btn" type="submit" value="<?php the_field('promocode'); ?>"><span></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonials">
        <div class="mouse__element11" data-aos="zoom-out-right"></div>
        <div class="mouse__element13" data-aos="zoom-out-left"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="testimonials__title"><?php the_field('emotion-title'); ?></h2>
            </div>
            <div class="col-12">
              <div class="testimonials__wrapper">
                <div class="mouse__element12"></div>
                <div class="testimonials__phone-frame-wrap">
                  <div class="testimonials__phone-frame"></div>
                  <div class="testimonials-slider-arrows">
                    <div class="arrow prev" id="jprev"></div>
                    <div class="arrow next" id="jnext"></div>
                  </div>
                </div>
                <div class="row slide-wrap-overflow">
                  <div class="col-12">
                   <?php if( have_rows('emotion-slider') ) : 
                    $count = 1; ?>
                    <ul class="slide-wrap" id="slider">
                     <?php while ( have_rows('emotion-slider') ) : the_row(); ?>
                      <li class="pos<?php echo $count++; ?>">
                        <div class="inner"><img src="<?php the_sub_field('emotion-slide'); ?>" alt="Resnitsa"></div>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="volume">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="volume__title"><?php the_field('res-title'); ?></h2>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
         <?php if( have_rows('res-slider') ) : 
             $count = 0;
             $count2 = 0;
             $count3 = 0; ?>
        <div class="volume-slider">
          <div class="volume-slider__dots">
            <div class="mouse__element14" data-aos="flip-down" data-aos-duration="3000"></div>
            <div class="mouse__element15" data-aos="zoom-in-up"></div>
            <?php while ( have_rows('res-slider') ) : the_row(); ?>
            <button class="<?php echo $count==0 ? 'active' : ' ' ?>" data-v-slider="<?php echo $count;?>"><?php the_sub_field('res-type'); ?></button>
            <?php $count++; ?>
            <?php endwhile; ?>
          </div>
<?php while ( have_rows('res-slider') ) : the_row(); ?>
          <div class="volume-slider__info <?php echo $count2==0 ? 'volume-slider__info--active' : ' ' ?>" data-v-slider="<?php  echo $count2; ?>">
            <div class="volume-slider__info-block slider-info">
              <div class="slider-info__title"><?php the_sub_field('res-type'); ?></div>
              <div class="slider-info__subtitle"><?php the_sub_field('res-slogan'); ?></div>
              <div class="slider-info__data">
                <div class="slider-info__data-block">
                  <div class="data-block__desc"><?php the_sub_field('res-param-1'); ?></div>
                  <div class="data-block__info"><?php the_sub_field('res-param-1-body'); ?></div>
                </div>
                <div class="slider-info__data-block">
                  <div class="data-block__desc"><?php the_sub_field('res-param-2'); ?></div>
                  <div class="data-block__info"><?php the_sub_field('res-param-2-body'); ?></div>
                </div>
                <div class="slider-info__data-block">
                  <div class="data-block__desc"><?php the_sub_field('res-param-3'); ?></div>
                  <div class="data-block__info"><?php the_sub_field('res-param-3-body'); ?></div>
                </div>
              </div>
              <div class="slider-info__desc"><?php the_sub_field('res-desc-1'); ?></div>
              <div class="slider-info__desc-another"><?php the_sub_field('res-desc-2'); ?></div>
            </div>
          </div>
    <?php $count2++; ?>
<?php endwhile; ?>
          <div class="volume-slider__image-wrapper">
          <?php while ( have_rows('res-slider') ) : the_row(); ?>
               <img class="volume-slider__image <?php echo $count3==0 ? 'volume-slider__image--active' : ' ' ?>" src="<?php the_sub_field('res-image'); ?>" alt="" data-v-slider="<?php  echo $count3; ?>">
           <?php $count3++; ?>
           <?php endwhile; ?>
            <div class="volume-slider__arrow volume-slider__arrow--prev"></div>
            <div class="volume-slider__arrow volume-slider__arrow--next"></div>
          </div>
        </div>
        <?php endif; ?>
      </section>
      <section class="period" style="background-image: url(<?php echo get_template_directory_uri() ?>/static/img/general/period-bgr.jpg)">
        <div class="container">
          <div class="scroll__element1" data-aos="zoom-in"></div>
          <div class="scroll__element2" data-aos="zoom-in-left" data-aos-duration="2000"></div>
          <div class="scroll__element3" data-aos="fade-up-left" data-aos-duration="3000"></div>
          <div class="row">
            <div class="col-12">
              <h2 class="period__title"><?php the_field('master-exp'); ?></h2>
              <div class="period__subtitle"><?php the_field('master-exp-2'); ?></div>
            </div>
            <div class="col-12">
             <?php if( have_rows('master-exp-block') ) : 
             $count = 0; ?>
              <div class="period__card-wrapper">
               <?php while ( have_rows('master-exp-block') ) : the_row();  
                $count++; ?>
                <?php if( $count==4 ): 
                $count=0;
                endif;?>
                <div class="period__card <?php echo $count==3 ? 'period__card--1001' : ' ' ?>">
                  <div class="period__card-title"><?php the_sub_field('master-position'); ?></div>
                  <div class="period__card-subtitle"><?php the_sub_field('master-special'); ?></div>
                  <div class="period__card-master"><?php the_sub_field('master-desc-1'); ?><span><?php the_sub_field('master-desc-1-position'); ?></span></div>
                  <div class="period__card-master period__card-transformation"><?php the_sub_field('master-desc-2'); ?><span><?php the_sub_field('master-desc-2-position'); ?></span></div>
                  <div class="period__card-price period__card-price<?php echo $count==3 ? '--rounded' : ' ' ?>"><span><?php the_sub_field('master-price'); ?></span></div>
                </div>
              <?php endwhile; ?>   
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="view" style="background-image: url(<?php echo get_template_directory_uri() ?>/static/img/general/new-view-bgr.jpg)">
        <div class="mouse__element16" data-aos="fade-up" data-aos-duration="3000"></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-11 offset-lg-4 offset-md-1">
              <h2 class="view__title"><?php the_field('up-title'); ?></h2>
            </div>
            <div class="col-12 col-md-11 offset-lg-4 offset-md-1">
            <?php if( have_rows('up') ) : 
             $count = 1; ?>
              <div class="row">
               <?php while ( have_rows('up') ) : the_row();  
                $count++; ?>
                <div class="col-lg-5">
                 <div class="col-lg-10 col-md-12">
                  <div class="view__adv">
                    <div class="view__adv-icon"><img src="<?php the_sub_field('up-image'); ?>" alt=""></div>
                    <div class="view__adv-desc"><?php the_sub_field('up-text'); ?></div>
                  </div>
                  </div>
                  </div>
                 <?php endwhile; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="cost">
        <div class="mouse__element17" data-aos="fade-right" data-aos-duration="2000"></div>
        <div class="mouse__element18" data-aos="fade-up-right" data-aos-duration="3000"></div>
        <div class="mouse__element19" data-aos="fade-down-left" data-aos-duration="3000"></div>
        <div class="container cost__container">
          <div class="row no-gutters">
            <div class="col-12 col-lg-8">
              <div class="cost__header">
                <h2 class="cost__title"><?php the_field('see-title'); ?></h2>
                <div class="cost__subtitle"><?php the_field('see-title-2'); ?></div>
              </div>
            </div>
            <?php if( have_rows('see') ) : ?>
            <?php while ( have_rows('see') ) : the_row(); ?>
            
            <div class="col-12 col-md-4 col-sm-6">
              <div class="cost__card"><img src="<?php the_sub_field('see-image'); ?>" alt="">
                <div class="cost__card-overlay"></div>
                <div class="cost__price"><?php the_sub_field('see-price'); ?></div>
                <div class="cost__desc">
                  <div class="cost__info"><?php the_sub_field('see-info'); ?></div>
                  <div class="cost__name"><?php the_sub_field('see-name'); ?></div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <section class="access">
        <div class="mouse__element20" data-aos="zoom-in-up" data-aos-duration="2000"></div>
        <div class="mouse__element21" data-aos="zoom-in" data-aos-duration="2000"></div>
        <div class="mouse__element22" data-aos="zoom-in-left" data-aos-duration="2000"></div>
        <div class="mouse__element23" data-aos="flip-right" data-aos-duration="3000"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="access__title"><?php the_field('access-title'); ?></h2>
            </div>
            <div class="col-12">
              <?php if( have_rows('access') ) : 
               $count = 1; ?>
            <?php while ( have_rows('access') ) : the_row(); ?>
               <div class="access__line">
                <div class="access__line-block">
                  <div class="access__step"><span><?php echo $count++; ?></span></div>
                  <div class="access__block-title access__block-title--<?php echo $count%2 ==0  ? 'right' :  'left' ?>"><span><?php the_sub_field('access-body'); ?></span></div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="master" style="background-image: url(<?php the_field('masters-foto'); ?>">
        <div class="mouse__element24" data-aos="fade-up-right" data-aos-duration="2000"></div>
        <div class="mouse__element25" data-aos="fade-down-left" data-aos-duration="2000"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="master__header">
                <h2 class="master__title"><?php the_field('desc-master-1'); ?></h2><a href="<?php bloginfo('url'); ?>/masters-courses"><?php echo __('Все мастера студии'); ?></a>
              </div>
              <div class="master__subtitle"><?php the_field('desc-master-2'); ?></div>
            </div>
          </div>
        </div>
        <?php if( have_rows('masters') ) : 
        $count = 0; ?>
        <?php while ( have_rows('masters') ) : the_row(); ?>
        <?php $array = array('first', 'second', 'third', 'fourth'); ?>
        <?php if( $count<4 ) : ?>
        <div class="master__desc master__desc--<?php echo $array[$count++]; ?>"> 
                    <?php else : 
                    $count = 0; ?>
        <div class="master__desc master__desc--<?php echo $array[$count++]; ?>">      
                    <?php endif; ?>
          <div class="master__desc-name"><?php the_sub_field('master-name'); ?></div>
          <div class="master__desc-position"><?php the_sub_field('master-position'); ?></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>
      <section class="case">
        <div class="mouse__element26" data-aos="flip-left" data-aos-duration="2000"></div>
        <div class="mouse__element27" data-aos="fade-down-left" data-aos-duration="2000"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="case__title"><?php the_field('desc-case'); ?></h2>
            </div>
            <div class="col-12 col-lg-6 order-lg-2 case__list-center">
              <?php if( have_rows('case-body') ) : ?>
              <ul class="case__list">
               <?php while ( have_rows('case-body') ) : the_row(); ?> 
                <li><?php the_sub_field('case-body-first'); ?></li>
              <?php endwhile; ?>
              </ul>
              <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 order-lg-1">
                <?php 
                $image = get_field('case-image');
                if( !empty($image) ): ?>
    <img class="case__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>
          </div>
        </div>
      </section>
      <section class="extension">
       <main>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="extension__title"><?php the_field('desc'); ?></h2>
            </div>
            <div class="col-12">
              <div class="extension__desc">
                <div class="extension__desc-overlay"></div>
                 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <p><?php the_content(); ?></p> 
                  </article>
                <div class="extension__read-more"><?php echo __('Подробнее'); ?></div>
               <a class="header__btn extension__btn" href="<?php bloginfo('url'); ?>/blog"><?php the_field('blog-button'); ?><span></span></a>
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
          <iframe src="//www.youtube.com/embed/<?php the_field('linke'); ?>" allowfullscreen></iframe>
        </div>
      </div>
      <?php //End the loop
                endwhile; ?>	
    <?php  else : 
        echo "<h2>error 404: Page not found</h2>"; 
    endif; ?>  
<?php get_footer(); ?>