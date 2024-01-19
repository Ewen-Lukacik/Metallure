<?php
$puce = get_field("puce", "options");
$anchor = $content['presentation_bloc2_anchor'];
var_dump($anchor);
//  echo '<pre>';
// var_dump($content['presentation_bloc2_image']);
// echo '</pre>';
// die(); 
?>
<article id="<?php echo ($anchor); ?>" class="content" style="background-color: #1e1e1e;">
    <img class="content-img1" src="<?php echo ($content['presentation_bloc2_image']['url']); ?>" height="<?php echo ($content['presentation_bloc2_image']['sizes']['content_picture-height']); ?>" width="<?php echo ($content['presentation_bloc2_image']['sizes']['content_picture-width']); ?>" alt="<?php echo ($content['presentation_bloc2_image']['alt']); ?>">
    <div class="content-inside">
        <h3><?php echo ($content['presentation_bloc2_title']); ?></h3>
        <p><?php echo ($content['presentation_bloc2_text']); ?></p>

    </div>
</article>