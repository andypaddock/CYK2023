<section class="et-slide container section-rates  <?php the_sub_field('bg_main'); ?>"
    id="tab-<?php echo str_replace(' ', '', get_field('tab_title_rates')); ?>">
    <div class="title-block row col-6">

        <div class="title-block--heading">
            <h2 class="heading-2">
                <?php the_field('heading'); ?></h2>
        </div>
        <?php the_field('rates_text'); ?>

        <?php
$file = get_field('document_link');
if( $file ): ?>
        <a class="button" href="<?php echo $file['url']; ?>"
            target="_blank"><?php the_field('document_link_text'); ?></a>
        <?php endif; ?>
    </div>
</section>
<section class="container section-spacer <?php the_sub_field('bg_main'); ?>"
    <?php if (get_sub_field('section_id')) : ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <div class="spacer medium"></div>
    </div>
</section>