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
              <a class="et-hero-tab" href="#tab-overview">Camp Overview</a>
              <a class="et-hero-tab" href="#tab-accom">Accommodation</a>
              <a class="et-hero-tab" href="#tab-gallery">Gallery</a>
              <a class="et-hero-tab" href="#tab-activities">Activities</a>
          </div>
      </div>
  </section>