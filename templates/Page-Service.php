<?php
/*Template Name: Services*/

get_header();

$service1_name = get_field('service1_name');
$service1_description = get_field('service1_description');
$service1_picture = get_field('service1_picture');

$service2_name = get_field('service2_name');
$service2_description = get_field('service2_description');
$service2_picture = get_field('service2_picture');

$service3_name = get_field('service3_name');
$service3_description = get_field('service3_description');
$service3_picture = get_field('service3_picture');

$anchor = get_field('anchor_bloc1');
?>

<div class="main">
    <div class="wrap">
        <article id="<?php echo ($anchor); ?>" class="content">
            <div class="content-inside">
                <h3><?php echo ($service1_name); ?></h3>
                <p><?php echo ($service1_description); ?></p>
            </div>
            <img class="content-img2" src="<?php echo ($service1_picture['url']); ?>" height="<?php echo ($service1_picture['sizes']['content_picture-height']); ?>" width="<?php echo ($service1_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($service1_picture['alt']); ?>">
        </article>

        <article id="service-2" class="content" style="background-color: #1e1e1e;">
            <img class="content-img2" src="<?php echo ($service2_picture['url']); ?>" height="<?php echo ($service2_picture['sizes']['content_picture-height']); ?>" width="<?php echo ($service2_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($service2_picture['alt']); ?>">
            <div class="content-inside">
                <h3><?php echo ($service2_name); ?></h3>
                <p><?php echo ($service2_description); ?></p>
            </div>

        </article>

        <article id="service-3" class="content">
            <div class="content-inside">
                <h3><?php echo ($service3_name); ?></h3>
                <p><?php echo ($service3_description); ?></p>
            </div>
            <img class="content-img2" src="<?php echo ($service3_picture['url']); ?>" height="<?php echo ($service3_picture['sizes']['content_picture-height']); ?>" width="<?php echo ($service3_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($service3_picture['alt']); ?>">
        </article>
    </div>

</div>

<?php

get_footer();
