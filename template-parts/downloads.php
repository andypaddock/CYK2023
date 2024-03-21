<?php $pageElements = get_field('page_element_headings', 'options'); ?>
<section class="container section-downloads <?php the_sub_field('bg_main'); ?>"
    id="<?php the_sub_field('section_id'); ?>">
    <div class="row <?php the_sub_field('column_size'); ?>">
        <div class="file--heading">
            <div class="file--heading-title">
                <h3 class="heading-4 font-default"><?php echo $pageElements['downloads_title']; ?></h3>
            </div>
            <div class="file--heading-date">
                <h3 class="heading-4 font-default"><?php echo $pageElements['downloads_date']; ?></h3>
            </div>
            <div class="file--heading-button"></div>
        </div>
        <?php if( have_rows('files') ): ?>

        <?php while( have_rows('files') ): the_row(); ?>
        <div class="file--content">
            <div class="title">
                <p><?php echo esc_html( get_sub_field('title') ); ?></p>
            </div>
            <div class="date">
                <p><?php echo esc_html ( get_sub_field( 'date' ) ); ?></p>
            </div>
            <div class="download-button">
                <?php
    $file = get_sub_field('file');
    if( $file ): ?>
                <a class="button button--download" href="<?php echo $file['url']; ?>"
                    target="_blank"><?php echo $pageElements['downloads_button']; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>