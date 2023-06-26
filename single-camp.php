<?php

/**
 * The template for displaying all single Camps
 *
 * @package Campi_Ya_Kanzi
 */
get_header(); ?>

<?php get_template_part('template-parts/camp_hero'); ?>

<?php
$heroImage = get_field('hero_image');
$defaultText = get_field('recipe_headings', 'options');
$standardText = get_field('page_element_headings', 'options');
$anchorTop = get_field('hero_image_bleed');
$pagebg = get_field('background_image');
?>
<?php get_template_part('template-parts/overview'); ?>

<?php get_template_part('template-parts/accom'); ?>

<?php get_template_part('template-parts/campgallery'); ?>


<section class="et-slide container camp-content--activities" id="tab-activities">
    <div class="row">
        <h1>Activities</h1>
        <h3>something about Activities</h3>
    </div>
</section>
<section class="et-slide container camp-content--booking" id="tab-booking">
    <div class="row">
        <h1>Booking</h1>
        <h3>something about Booking</h3>
    </div>
</section>







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