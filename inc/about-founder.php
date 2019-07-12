<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<header class="header header__team">
        <div class="container">
          <?php $group = get_field('first') ?>
          <div class="row">
            <div class="col-12 header__title-center">
              <h1 class="header__team-title"><?php echo $group['title'] ?></h1>
            </div>
            <div class="col-12">
              <div class="header__team-subtitle-name"><?php echo $group['name'] ?></div>
              <div class="header__team-subtitle-position"><?php echo $group['position'] ?></div>
            </div>
          </div>
        </div>
        <div class="mouse__element1" data-aos="fade-right"></div>
        <div class="mouse__element3" data-aos="fade-down-left"></div>
        <div class="mouse__element4" data-aos="fade-left"></div>
      </header>
      <section class="about">
        <div class="mouse__element28" data-aos="fade-down-left" data-aos-duration="2000"></div>
        <div class="container">
          <?php $group = get_field('second') ?>
          <div class="row">
            <div class="col-12 col-md-8 offset-md-4">
              <h2 class="about__title"><?php echo $group['title'] ?></h2>
              <?php echo $group['text'] ?>
              <div class="header__video about__video"><a class="header__video-btn"></a>
                <div class="header__video-title"><?php echo $group['video_text'] ?></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="team">
        <div class="container">
          <?php $group = get_field('third') ?>
          <div class="row">
            <div class="col-12">
              <h2 class="team__title"><?php echo $group['title'] ?></h2>
            </div>
            <?php foreach($group['member'] as $member): ?>
            <div class="col-12 col-md-4">
              <div class="team__img"><img src="<?php echo $member['image'] ?>" alt=""></div>
              <div class="team__name"><?php echo $member['name'] ?></div>
              <div class="team__position"><?php echo $member['position'] ?></div>
              <div class="team__desc"><?php echo $member['kredo'] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <section class="promo-code">
        <div class="container">
          <?php $group = get_field('fourth') ?>
          <div class="row">
            <div class="col-12">
              <h2 class="promo-code__title"><?php echo $group['title'] ?></h2>
              <div class="clearfix"></div>
              <div class="promo-code__price-wrapper">
                <div class="promo-code__price-first"></div>
                <div class="promo-code__price-last"></div>
                <div class="promo-code__green-heart"></div>
              </div>
            </div>
            <div class="col-12 promo-code__500-wrapper"><img class="promo-code__500" src="<?php echo get_template_directory_uri() ?>/static/img/general/500.png" alt="Resnitsa"></div>
            <div class="col-12 timer-padding">
              <div class="timer">
                <div class="mouse__element5" data-aos="fade-down-right"></div>
                <div class="mouse__element6" data-aos="fade-up" data-aos-duration="3000"></div>
                <div class="timer__title"><?php echo $group['request'] ?></div>
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
                    <input class="promo-form__btn" type="submit" value="<?php echo $group['butt_text'] ?>"><span></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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
        <?php $group = get_field('second') ?>
        <div class="closeBtn">&times;</div>
        <div class="modal-content-video">
          <iframe src="//www.youtube.com/embed/<?php echo $group['link'] ?>" allowfullscreen></iframe>
        </div>
      </div>

<?php get_footer(); ?>