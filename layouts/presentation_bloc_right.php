<?php
$anchor = $content['presentation_bloc1_anchor'];
?>
<article id="<?php echo ($anchor); ?>" class="content">
    <div class="wrap content-wrap">
        <div class="content-presentation">
            <div class=content-text>
                <h3><?php echo ($content['presentation_bloc1_title']); ?></h3>
                <p><?php echo ($content['presentation_bloc1_text']); ?></p>
            </div>

            <div class="content-minipic">
                <img src="<?php echo ($content['presentation_bloc1_image2']['url']); ?>" height="<?php echo ($content['presentation_bloc1_image2']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc1_image2']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc1_image2']['alt']); ?>">
                <img src="<?php echo ($content['presentation_bloc1_image3']['url']); ?>" height="<?php echo ($content['presentation_bloc1_image3']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc1_image3']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc1_image3']['alt']); ?>">
            </div>
        </div>
        <img class="content-img2" src="<?php echo ($content['presentation_bloc1_image1']['url']); ?>" height="<?php echo ($content['presentation_bloc1_image1']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc1_image1']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc1_image1']['alt']); ?>">
    </div>
</article>