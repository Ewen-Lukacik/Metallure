<?php
$puce = get_field("puce", "options");
$anchor = $content['presentation_bloc2_anchor'];

?>
<article id="<?php echo ($anchor); ?>" class="content" style="background-color: #1e1e1e;">
    <div class="wrap content-wrap">
        <img class="content-img2" src="<?php echo ($content['presentation_bloc2_image1']['url']); ?>" height="<?php echo ($content['presentation_bloc2_image1']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc2_image1']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc2_image1']['alt']); ?>">
        <div class="content-presentation">
            <div class="content-text">
                <h3><?php echo ($content['presentation_bloc2_title']); ?></h3>
                <p><?php echo ($content['presentation_bloc2_text']); ?></p>
            </div>
            <div class="content-minipic">
                <img src="<?php echo ($content['presentation_bloc2_image2']['url']); ?>" height="<?php echo ($content['presentation_bloc2_image2']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc2_image2']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc2_image2']['alt']); ?>">
                <img src="<?php echo ($content['presentation_bloc2_image3']['url']); ?>" height="<?php echo ($content['presentation_bloc2_image3']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc2_image3']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc2_image3']['alt']); ?>">
            </div>
        </div>
    </div>
</article>