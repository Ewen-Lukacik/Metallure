<?php 
    $puce = get_field("puce","options");
    //  echo '<pre>';
    // var_dump($content['presentation_bloc2_image']);
    // echo '</pre>';
    // die(); 
?>
<article class="content">
    <div class="content-inside">
        <h3><?php echo($content['presentation_bloc1_title']); ?></h3>
        <p><?php echo($content['presentation_bloc1_text']); ?></p>
       
        </div>
        <img class="content-img1" src="<?php echo($content['presentation_bloc1_image']['url']); ?>" 
            height="<?php echo($content['presentation_bloc1_image']['sizes']['content_picture-height']); ?>" 
            width="<?php echo($content['presentation_bloc1_image']['sizes']['content_picture-width']); ?>" 
            alt="<?php echo($content['presentation_bloc1_image']['alt']); ?>">
</article>