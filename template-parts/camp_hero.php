  <!-- Hero -->
  <?php
$heroImage = get_field('hero_image');?>
  <section class="et-hero-tabs">
      <video id="video" width="100%" height="100%" autoplay loop muted>
          <source src="/wp-content/uploads/2023/06/coast_-_88507-720p.mp4" type="video/mp4">
      </video>
      <h1 class="heading-1 heading-1--light"><?php the_title(); ?></h1>
      <div class="et-hero-tabs-container">
          <a class="et-hero-tab" href="#tab-es6">Camp Overview</a>
          <a class="et-hero-tab" href="#tab-flexbox">Accommodation</a>
          <a class="et-hero-tab" href="#tab-react">Gallery</a>
          <a class="et-hero-tab" href="#tab-angular">Activities</a>
          <a class="et-hero-tab" href="#tab-other">Booking</a>
      </div>
  </section>

  <!-- Main -->
  <main class="et-main">
      <section class="et-slide" id="tab-es6">
          <h1>ES6</h1>
          <h3>something about es6</h3>
      </section>
      <section class="et-slide" id="tab-flexbox">
          <h1>Flexbox</h1>
          <h3>something about flexbox</h3>
      </section>
      <section class="et-slide" id="tab-react">
          <h1>React</h1>
          <h3>something about react</h3>
      </section>
      <section class="et-slide" id="tab-angular">
          <h1>Angular</h1>
          <h3>something about angular</h3>
      </section>
      <section class="et-slide" id="tab-other">
          <h1>Other</h1>
          <h3>something about other</h3>
      </section>