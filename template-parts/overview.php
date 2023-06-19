<?php $pagebg = get_field('background_image'); ?>
<section class="et-slide container section-text-block camp-content--overview"
    style="background-image: url(<?php echo $pagebg['sizes']['hero-image']; ?>)" id="tab-overview">
    <div class="row col-6">
        <div class="text">
            <div class="text-block <?php the_field('text_align'); ?>">
                <div class="text-block__wrapper fmbottom <?php the_field('tb_bg'); ?>">

                    <h2 class="heading-2">
                        <?php the_field('title'); ?></h2>
                    <?php the_field('paragraphs'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if( have_rows('image_and_text_block') ): ?>
    <div class="row col-10">
        <?php while( have_rows('image_and_text_block') ): the_row(); 
        $image = get_sub_field('image');
        ?>
        <div class="image-text-block">
            <div class="image-block fmleft">
                <?php echo wp_get_attachment_image( $image, 'full' ); ?></div>
            <div class="text-block fmright">
                <h2 class="heading-2"><?php the_sub_field('title'); ?></h2>
                <?php the_sub_field('description'); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>