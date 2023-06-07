<?php

/**
 * The template for displaying all single Camps
 *
 * @package Campi_Ya_Kanzi
 */
get_header(); ?>



<?php
$heroImage = get_field('hero_image');
$overviewImage = get_field('overview_background_image');
$standardText = get_field('page_element_headings', 'options');
$anchorTop = get_field('hero_image_bleed');
?>

<div class="container" id="video-container" data-fade-delay="13">
    <video id="video" width="100%" height="100%" autoplay loop muted>
        <source src="/wp-content/uploads/2023/06/coast_-_88507-720p.mp4" type="video/mp4">
    </video>
    <div class="camp-heading row col-10" id="camp-content">

        <h1 class="heading-1 heading-1--light"><?php the_title(); ?></h1>
        <div class="camp-nav">
            <ul>
                <li class="tile">Camp Overview</li>
                <li class="tile">Accommodation</li>
                <li class="tile">Gallery</li>
                <li class="tile">Activities</li>
                <li class="tile">Booking</li>
            </ul>
        </div>

    </div>
</div>



<section class="section-overview">
    <div class="bg-image">
        <?php 
$overviewImage = get_field('overview_background_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $overviewImage ) {
    echo wp_get_attachment_image( $overviewImage, $size );
}?></div>
    <div class="container">
        <div class="row col-6 text-cent">
            <div class="overview-intro">
                <h3 class="heading-2">
                    <?php if (get_field('title')) { 
    the_field('title');
} else {
    the_title();
} ?>
                </h3>
                <?php the_field('overview_intro');?>
            </div>
        </div>
        <div class="row col-10">
            <div class="overview-content">
                <?php if( have_rows('overview_block') ): ?>

                <?php while( have_rows('overview_block') ): the_row(); 
        $image = get_sub_field('image');
        ?>
                <div class="overview-content--image fmleft">
                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                </div>
                <div class="overview-content--text fmright">
                    <h3 class="heading-2"><?php the_sub_field('header'); ?></h3>
                    <?php the_sub_field('text'); ?>
                </div>
                <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
        <div class="row extended">
            <div class="camp-cta">
                <a href="<?php echo esc_url( $standardText['camp_cta']['url'] ); ?>">
                    <h3 class="heading-2 heading-2--light"><?php echo esc_html( $standardText['camp_cta']['title'] ); ?>
                    </h3>
                </a>
            </div>
        </div>

    </div>


</section>

<section class="section-accommodation">


</section>


<section class="section-gallery">


</section>

<section class="section-activities">


</section>


<section class="section-booking">


</section>
<!-- <div class="sub-page hero-wrapper <?php if ($anchorTop) : echo 'anchor-top'; endif; ?>">
    <section
        class="container header full-image imageoff-<?php the_field('mobile_offset'); ?> hero-75  anchor-<?php the_field('image_anchor'); ?>"
        style="background-image: url(<?php if ($heroImage) : ?><?php echo $heroImage['sizes']['hero-image']; ?><?php else : ?><?php echo get_the_post_thumbnail_url(get_the_ID(), 'hero-image'); ?><?php endif ?>">
        <div class="hero-textblock">
            <h1 class="heading-1 tileup"><?php the_sub_field( 'hero_heading' );?></h1>
            <?php 
$link = get_sub_field('hero_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
            <a class="button light tileup" href="<?php echo esc_url( $link_url ); ?>"
                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
                    class="fa-sharp fa-light fa-arrow-right"></i></a>
            <?php endif; ?>
        </div>
        <div class="center-wrapper">
            <div class="center bounce">
                <i class="fa-sharp fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </section>
</div> -->

<?php get_template_part('template-parts/flexible'); ?>
<?php $showCta = get_field('events','options'); if ($showCta == 'true'):?>
<?php get_template_part('template-parts/sitecta'); ?>
<?php endif;?>

<?php $legacy = get_field('legacy_post'); if ($legacy == 'true'):?>
<section class="container">
    <div class="row col-10">
        <?php the_content() ?>
    </div>

</section>
<?php endif;?>
<?php get_footer(); ?>