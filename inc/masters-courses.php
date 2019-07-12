<?php
/**
 * Template Name: Courses
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<header class="header header__team header__training">
        <div class="container">
        	<?php $group = get_field('first') ?>
          <div class="row">
            <div class="col-12 header__title-center">
              <h1 class="header__team-title"><?php echo $group['title'] ?></h1>
            </div>
            <div class="col-12">
              <div class="header__subtitle-training"><?php echo $group['subtitle'] ?></div>
            </div>
            <div class="col-12">
              <div class="header__video about__video"><a class="header__video-btn"></a>
                <div class="header__video-title"><?php echo $group['video_text'] ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mouse__element1" data-aos="fade-right"></div>
        <div class="mouse__element3" data-aos="fade-down-left"></div>
        <div class="mouse__element4" data-aos="fade-left"></div>
      </header>
      <section class="about about__training-s">
        <div class="container">
        	<?php $group = get_field('second') ?>
          <div class="row">
            <div class="col-12 col-md-8 offset-md-4">
              <h2 class="about__title about__title-training"><?php echo $group['title'] ?></h2>
              <div class="about__training-master">
                <div class="about__training-master-name"><?php echo $group['name'] ?></div>
                <div class="about__training-master-position"><?php echo $group['position'] ?></div>
              </div>
              <?php echo $group['text'] ?>
              <div class="about__training">
              	<?php foreach($group['yph'] as $yph): ?>
	                <div class="about__training-block">
	                  <div class="about__training-number"><?php echo $yph['number'] ?></div>
	                  <div class="about__training-desc"><?php echo $yph['text'] ?></div>
	                </div>
            	<?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="course">
        <div class="mouse__element29" data-aos="fade-down-left" data-aos-duration="2000"></div>
        <div class="container">
        	<?php $group = get_field('third') ?>
          <div class="row">
            <div class="col-12">
              <h2 class="course__header"><?php echo $group['title'] ?></h2>
            </div>
            <?php foreach($group['course'] as $course): ?>
            <div class="col-12 col-lg-4 col-md-6">
              <div class="course__card">
                <div class="course__img"><img src="<?php echo $course['image'] ?>" alt=""></div>
                <div class="course__info">
                  <div class="course__subtitle"><?php echo $course['type'] ?></div>
                  <div class="course__title" id="course-name" name="course-name"><?php echo $course['name'] ?></div><a class="course__program" href=""><?php echo $course['program'] ?></a>
                  <div class="course__duration"><?php echo __('Длительность','') ?> <span><?php echo $course['time'] ?></span></div>
                  <div class="course__price"><?php echo __('Стоимость','') ?> <span><?php echo $course['price'] ?></span></div><a class="header__btn course__btn"><?php echo __('Записаться на курс','') ?><span></span></a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <section class="extension extension__training">
        <div class="container">
        	<?php $group = get_field('fourth') ?>
          <div class="row">
            <div class="col-12">
              <h2 class="extension__title"><?php echo $group['title'] ?></h2>
            </div>
            <div class="col-12">
              <div class="extension__desc">
                <div class="extension__desc-overlay"></div>
                <?php echo $group['text'] ?>
                <div class="extension__read-more"><?php echo __('Подробнее','') ?></div><a href="<?php get_home_url() ?>/blog" class="header__btn extension__btn"><?php echo $group['text_blog'] ?><span></span></a>
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
      	<?php $group = get_field('first') ?>
        <div class="closeBtn">&times;</div>
        <div class="modal-content-video">
          <iframe src="//www.youtube.com/embed/<?php echo $group['link'] ?>" allowfullscreen></iframe>
        </div>
      </div>

<?php get_footer(); ?>