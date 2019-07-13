      <footer class="footer" style="background-image: url('<?php echo get_template_directory_uri() ?>/static/img/general/footer-bgr.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <?php $top = get_field('first_row','options') ?>
              <div class="footer__header">
                <div class="footer__header-left">
                  <h2 class="footer__title"><?php echo $top['title'] ?></h2>
                  <div class="footer__subtitle"><?php echo $top['subtitle'] ?></div>
                </div>
                <div class="footer__header-right"><a href="<?php echo get_field('socials','options')['instagram'] ?>" target="_blank"><?php echo $top['button_text'] ?></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="insta-slider"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="footer__topline">
                <div class="footer__topline-phone">
                  <?php $tel = get_field('tel','options'); ?>
                  <div class="footer__topline-phone-icons"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/icons/phone-icon2.png" alt=""><img src="<?php echo get_template_directory_uri() ?>/static/img/general/icons/phone.png" alt=""></div><a href="tel:<?php echo $tel['tel_form'] ?>"><?php echo $tel['tel_view'] ?></a>
                </div>
                <?php $addresses = get_field('addresses','options') ?>
                <div class="footer__topline-address"><span><?php echo $addresses['metro'] ?></span><span><?php echo $addresses['concrete'] ?></span></div>
                <div class="footer__topline-address"><span><?php echo $addresses['metro1'] ?></span><span><?php echo $addresses['concrete1'] ?></span></div>
              </div>
            </div>
			  
            <div class="col-12">
         <div  class="acf-map" id="map">
	 <?php $group = get_field('google_group','options');?>
	 <?php if( ! empty($group) ): ?>
	 	<?php foreach($group['g_mark_group'] as $g_mark_group): ?>
				<?php 
	 $loc = $group['g_mark_group'];			
	 $location = $g_mark_group['mark']; /*if( !empty($location) ):*/ ?>	
	<div class="marker"  style="width: 100%; height: 350px;" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				<?php endforeach; endif; ?>
				  
			  </div>
            </div>
            <div class="col-12">
              <div class="footer__middleline">
                <div class="footer__middleline-left"><a class="footer__middleline-left-logo" href="<?php bloginfo('url') ?>"><img src="<?php the_field('logo','options') ?>" alt="Resnitsa"></a>
                  <div class="footer__middleline-left-subtitle"><?php the_field('subtitle','options') ?></div>
                </div>
                <?php wp_nav_menu( array('items_wrap' => '<ul class="footer__middleline-right">%3$s</ul>') ); ?>
              </div>
              <div class="footer__bottomline">
                <?php $social = get_field('socials','options'); $bottom = get_field('last_row','options') ?>
                <div class="footer__bottomline-left">
                  <div class="footer__bottomline-left-social"><a href="<?php echo $social['facebook'] ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/social/fb.png" alt=""></a><a href="<?php echo $social['telegram'] ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/social/tw.png" alt=""></a><a href="<?php echo $social['instagram'] ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/static/img/general/social/insta.png" alt=""></a></div>
                  <div class="footer__bottomline-left-copyright"><?php echo $bottom['copyright'] ?></div>
                </div>
                <div class="footer__bottomline-right"><a class="footer__bottomline-right-privacy" href=""><?php echo $bottom['politic'] ?></a>
                  <div class="footer__bottomline-right-marketing"><span><?php echo $bottom['market'] ?></span><a href="<?php echo $bottom['link'] ?>" target="_blank"><img src="<?php echo $bottom['image'] ?>" alt="makeFresh"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="son_wrapper">
        <div class="son_outercircle"></div><a href="#" onclick="showSonlineWidget(sonlineWidgetOptions);">
          <div class="son_circle"><br>Онлайн<br> запись</div></a>
      </div>
      <div id="widgetSonline"></div>
    </div>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
    <script>
      var sonlineWidgetOptions = {
         groupid:178
      }
    </script>
    <?php wp_footer(); ?>
  </body>
</html>