<?php
/**
 * Template Name: Thanks
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

      <div class="thank" style="background-image: url(<?php echo get_template_directory_uri() ?>/static/img/general/thanks-bgr.jpg)">
        <div class="thank__block">
          <div class="thank__block-title"><?php the_field('title') ?></div>
          <div class="thank__block-subtitle"><?php the_field('sub_title') ?></div>
          <div class="thank__block-insta"><?php the_field('subscribe') ?> <a href="" target="_blank"><?php the_field('link') ?></a></div><a class="thank__block-back" href="<?php bloginfo('url'); ?>"><?php the_field('return') ?> ></a>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>