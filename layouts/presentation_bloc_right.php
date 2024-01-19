<?php
$anchor = $content['presentation_bloc1_anchor'];
?>
<article id="<?php echo ($anchor); ?>" class="content">
    <div class="content-wrap">
        <div class="content-inside">
            <h3><?php echo ($content['presentation_bloc1_title']); ?></h3>
            <p><?php echo ($content['presentation_bloc1_text']); ?></p>
        </div>
        <img class="content-img1" src="<?php echo ($content['presentation_bloc1_image']['url']); ?>" height="<?php echo ($content['presentation_bloc1_image']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc1_image']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc1_image']['alt']); ?>">
    </div>
</article>