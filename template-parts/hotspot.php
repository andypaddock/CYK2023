<section class="container section-image-hotspot <?php the_sub_field('bg_main'); ?>"
    <?php if (get_sub_field('section_id')) : ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <div class="hotspot-map">
            <div class="hotspot-map--image">
                <div class="image--wrapper"><?php 
$image = get_sub_field('hotspot_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}?>

                    <?php if( have_rows('hotspots') ): ?>
                    <?php while( have_rows('hotspots') ): the_row(); ?>
                    <div class="hotspot-image trigger-<?php echo get_row_index(); ?>"
                        style="--bottom: <?php the_sub_field('from_bottom');?>% ; --left: <?php the_sub_field('from_left');?>%">
                        <span class="hotspot-number"><?php echo get_row_index(); ?></span>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>



                <?php if( have_rows('hotspots') ): ?>
                <?php while( have_rows('hotspots') ): the_row(); 
        $image = get_sub_field('hotspot_image');
        ?>
                <div class="info-panel hotspot-info target-<?php echo get_row_index(); ?>">
                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                    <div class="details">
                        <h3><?php the_sub_field('title');?></h3>
                        <p><?php the_sub_field('description');?></p>
                        <?php 
$link = get_sub_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                        <a class="map-link" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>