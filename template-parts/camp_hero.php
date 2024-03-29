  <!-- Hero -->
  <?php
$posterImage = get_field('poster_image');
$heroVideo = get_field('hero_video');?>
  <section id="camp-tabs" class="et-hero-tabs container">
      <video id="video" width="100%" height="100%" autoplay loop muted
          poster="<?php echo esc_url($posterImage['url']); ?>">
          <source src="<?php echo $heroVideo['url']; ?>" type="video/mp4">
      </video>
      <div class="row">
          <h1 class="heading-1 heading-1--light"><?php the_title(); ?></h1>
          <div class="et-hero-tabs-container">
              <?php if(get_field('display_over_tab')):?>
              <a class="et-hero-tab"
                  href="#tab-<?php echo str_replace(' ', '', get_field('tab_title_over')); ?>"><?php the_field('tab_title_over');?></a>
              <?php endif;?>
              <?php if(get_field('display_faq_tab')):?>
              <a class="et-hero-tab"
                  href="#tab-<?php echo str_replace(' ', '', get_field('tab_title_faq')); ?>"><?php the_field('tab_title_faq');?></a>
              <?php endif;?>
              <?php if(get_field('display_accom_tab')):?>
              <a class="et-hero-tab"
                  href="#tab-<?php echo str_replace(' ', '', get_field('tab_title_accom')); ?>"><?php the_field('tab_title_accom');?></a>
              <?php endif;?>
              <?php if(get_field('display_gallery_tab')):?>
              <a class="et-hero-tab"
                  href="#tab-<?php echo str_replace(' ', '', get_field('tab_title_gall')); ?>"><?php the_field('tab_title_gall');?></a>
              <?php endif;?>
              <?php if(get_field('display_activities_tab')):?>
              <a class="et-hero-tab"
                  href="#tab-<?php echo str_replace(' ', '', get_field('tab_title_act')); ?>"><?php the_field('tab_title_act');?></a>
              <?php endif;?>
              <?php if(get_field('display_rates_tab')):?>
              <a class="et-hero-tab"
                  href="#tab-<?php echo str_replace(' ', '', get_field('tab_title_rates')); ?>"><?php the_field('tab_title_rates');?></a>
              <?php endif;?>
              <?php 
if (get_field('display_booking_tab')) {
    $link = get_field('booking_link');
    if ($link && $link['url'] && $link['title']) {
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
              <a class="et-hero-tab-contact" href="<?php echo esc_url( $link_url ); ?>"
                  target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php
    }
}
?>


          </div>
      </div>
  </section>