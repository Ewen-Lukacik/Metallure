<?php
/* Template Name: Réalisations */


//var_dump($post);
$title = get_field('title');
$description = get_field('description');
$background_image = get_field('background_image');
//var_dump($background_image);
$houses = get_pages([
    'child_of' => $post->ID
]);

$slider_picture1 = get_field('slider_picture1');
$slider_picture2 = get_field('slider_picture2');
$slider_picture3 = get_field('slider_picture3');

get_header();
?>

<div class="main">
    <section class="wrap">
        <div class="carousel">
            <div class="slides">
                <div class="slide" style="background-image: <?php echo('$background_image'); ?>;">
                    <img class="resp_pic" loading="lazy" src="<?php echo ($slider_picture1['sizes']['houses_banner']); ?>" height="<?php echo ($background_image['sizes']['houses_banner-height']); ?>" width="<?php echo ($background_image['sizes']['houses_banner-width']); ?>" alt="<?php echo ($background_image['alt']); ?>">
                </div>
                <div class="slide" style="background-color: #b5e7a0;">
                    <img class="resp_pic" loading="lazy" src="<?php echo ($slider_picture2['sizes']['houses_banner']); ?>" height="<?php echo ($background_image['sizes']['houses_banner-height']); ?>" width="<?php echo ($background_image['sizes']['houses_banner-width']); ?>" alt="<?php echo ($background_image['alt']); ?>">
                </div>
                <div class="slide" style="background-color: #a0d5e7;">
                    <img class="resp_pic" loading="lazy" src="<?php echo ($slider_picture3['sizes']['houses_banner']); ?>" height="<?php echo ($background_image['sizes']['houses_banner-height']); ?>" width="<?php echo ($background_image['sizes']['houses_banner-width']); ?>" alt="<?php echo ($background_image['alt']); ?>">
                </div>
            </div>
            <div id="prev">&#10094;</div>
            <div id="next">&#10095;</div>
        </div>

        <section>
            <h1><?php echo ($title); ?></h1>
            <p><?php echo ($description); ?></p>
            <img class="resp_pic" loading="lazy" src="<?php echo ($background_image['sizes']['houses_banner']); ?>" height="<?php echo ($background_image['sizes']['houses_banner-height']); ?>" width="<?php echo ($background_image['sizes']['houses_banner-width']); ?>" alt="<?php echo ($background_image['alt']); ?>">
        </section>

        <section class="parent">
            <?php foreach ($houses as $house) : ?>
                <?php $price = get_field('price', $house->ID);
                $preview_image = get_field('house_preview', $house->ID);
                $property_description = get_field('property_description', $house->ID); ?>
                <div class="houses house-gradient">
                    <h2><?php echo ($property_description/*$house->post_title*/); ?></h2>
                    <div class="houses-price">
                        <p class="houses-prices">Prix : <?php echo ($price); ?>€</p>
                    </div>
                    <a href="<?php echo (get_permalink($house)); ?>">Voir</a>
                    <img class="resp_pic" src="<?php echo ($preview_image['sizes']['house_preview']); ?>" height="<?php echo ($preview_image['sizes']['house_preview-height']); ?>" width="<?php echo ($preview_image['sizes']['house_preview-width']); ?>" alt="<?php echo ($preview_image['alt']); ?>">
                </div>
            <?php endforeach ?>
        </section>

        <div class="page-choice">
            <a href="">&#10094;</a>
            <a href="">&#10095;</a>
        </div>
    </section>
</div>

<?php get_footer(); ?>