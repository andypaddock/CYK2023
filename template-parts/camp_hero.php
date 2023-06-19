  <!-- Hero -->
  <?php
$heroImage = get_field('hero_image');?>
  <section class="et-hero-tabs container">
      <video id="video" width="100%" height="100%" autoplay loop muted>
          <source src="/wp-content/uploads/2023/06/coast_-_88507-720p.mp4" type="video/mp4">
      </video>
      <div class="row">
          <h1 class="heading-1 heading-1--light"><?php the_title(); ?></h1>
          <div class="et-hero-tabs-container">
              <a class="et-hero-tab" href="#tab-overview">Camp Overview</a>
              <a class="et-hero-tab" href="#tab-accom">Accommodation</a>
              <a class="et-hero-tab" href="#tab-gallery">Gallery</a>
              <a class="et-hero-tab" href="#tab-activities">Activities</a>
              <a class="et-hero-tab" href="#tab-booking">Booking</a>
          </div>
      </div>
  </section>