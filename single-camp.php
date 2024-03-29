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
<?php if(get_field('display_over_tab')):?>
<?php get_template_part('template-parts/overview'); ?>
<?php endif;?>
<?php if(get_field('display_faq_tab')):?>
<?php get_template_part('template-parts/campaccord'); ?>
<?php endif;?>
<?php if(get_field('display_accom_tab')):?>
<?php get_template_part('template-parts/accom'); ?>
<?php endif;?>
<?php if(get_field('display_gallery_tab')):?>
<?php get_template_part('template-parts/campgallery'); ?>
<?php endif;?>
<?php if(get_field('display_activities_tab')):?>
<?php get_template_part('template-parts/activity'); ?>
<?php endif;?>
<?php if(get_field('display_rates_tab')):?>
<?php get_template_part('template-parts/rates'); ?>
<?php endif;?>








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