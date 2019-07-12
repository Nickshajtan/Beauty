<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,user-scalable=0">
    <meta name="keywords" content=""><!--link(rel="shortcut icon" type="image/x-png" href="<?php echo get_template_directory_uri() ?>/static/img/svg/logo.png")  -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav__wrapper">
        <div class="nav">
          <div class="nav__mobile-btn"><span class="nav__mobile-btn--top"></span><span class="nav__mobile-btn--middle"></span><span class="nav__mobile-btn--bottom"></span></div><a class="nav__logo" href="<?php bloginfo('url') ?>"><img src="<?php the_field('logo','options') ?>" alt="Resnitsa"></a>
          <div class="nav__subtitle"><?php the_field('subtitle','options') ?></div>
          <?php $addresses = get_field('addresses','options');
                $tel = get_field('tel','options'); ?>
          <div class="nav__address"><?php echo $addresses['metro'] ?><br /><?php echo $addresses['metro1'] ?></div><a class="nav__phone" href="tel:<?php echo $tel['tel_form'] ?>"><?php echo $tel['tel_view'] ?></a>
          <div class="mobile-menu">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <?php wp_nav_menu(); 
                  $social = get_field('socials','options')?>
                  <div class="mobile-menu__social"><a href="<?php echo $social['facebook'] ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/social/fb.png" alt=""></a><a href="<?php echo $social['telegram'] ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/social/tw.png" alt=""></a><a href="<?php echo $social['instagram'] ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/social/insta.png" alt=""></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>