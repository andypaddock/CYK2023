<section class="et-slide container camp-content--gallery" id="tab-gallery">
    <div class="row">


        <?php
// Assuming get_sub_field('images'), get_sub_field('videos'), and get_sub_field('web_cams') return arrays

$filters = array();

if (get_sub_field('images')) {
    $filters[] = '<button class="filters" type="button" data-filter=".gallery-image">Photos</button>';
}

if (get_sub_field('videos')) {
    $filters[] = '<button class="filters" type="button" data-filter=".gallery-video">Video</button>';
}

if (get_sub_field('web_cams')) {
    $filters[] = '<button class="filters" type="button" data-filter=".gallery-web">Webcam</button>';
}

// Check if there is more than one filter
if (count($filters) > 1) {
    echo '<div class="gallery-filters controls">';
    echo '<button class="filter-all" type="button" data-filter="all">Filter:</button>';
    
    // Output the filter buttons
    foreach ($filters as $filter) {
        echo $filter;
    }

    echo '</div>';
}
?>




        <div class="outer-container gallery-outer mb10">
            <div class="gallery-wrapper">
                <?php $images = get_sub_field('images');
$size = 'large'; // (thumbnail, medium, large, full or custom size)
$original = 'full';
if ($images) : ?>

                <?php foreach ($images as $image_id) :
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); ?>
                <div class="mix gallery-image">
                    <a data-fslightbox="gallery" href="<?php echo wp_get_attachment_image_url($image_id, $original); ?>"
                        class="lightbox-gallery" alt="<?php echo $image_alt; ?>">
                        <?php echo wp_get_attachment_image($image_id, $size); ?></a>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php if( have_rows('videos') ): ?>
                <?php while( have_rows('videos') ): the_row(); 
        $image = get_sub_field('poster_image');
        $file = get_sub_field('video_file');
        ?><a class="mix gallery-video" data-fslightbox="gallery" href="<?php echo $file['url']; ?>"
                    class="lightbox-gallery" alt="<?php echo $image_alt; ?>">
                    <div class="video-image">

                        <?php echo wp_get_attachment_image($image, 'large'); ?>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('web_cams') ): ?>
                <?php while( have_rows('web_cams') ): the_row(); 
        $image = get_sub_field('poster_image');
        $file = get_sub_field('image_url');
        ?><a class="mix gallery-web" data-fslightbox="gallery-web" data-type="image"
                    href="<?php the_sub_field('image_url'); ?>" class="lightbox-gallery" alt="<?php echo $image_alt; ?>"
                    data-caption="<h2 class='heading-2'><?php the_sub_field('title'); ?></h2><p><?php the_sub_field('description'); ?></p>">
                    <div class="webcam-image" style="background-image: url('<?php the_sub_field('image_url'); ?>')">

                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>