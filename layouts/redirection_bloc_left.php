<?php
$redirection_bloc_left_title = $content['redirection_bloc_left_title'];
$redirection_bloc_left_text = $content['redirection_bloc_left_text'];
$redirection_bloc_left_picture = $content['redirection_bloc_left_picture'];
$redirection_bloc_left_button_text = $content['redirection_bloc_left_button_text'];
$redirection_bloc_left_target_page = $content['redirection_bloc_left_target_page'];
$redirection_bloc_left_target_anchor = $content['redirection_bloc_left_target_anchor'];

$puce = get_field("puce", "options");
?>

<article class="content" style="background-color: #1e1e1e;">
    <div class="wrap content-wrap">
        <img class="content-img2" src="<?php echo ($redirection_bloc_left_picture['sizes']['content_picture']); ?> " height="<?php echo ($redirection_bloc_left_picture['sizes']['content_picture-height']); ?> " width="<?php echo ($redirection_bloc_left_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($redirection_bloc_left_picture['alt']); ?>">
        <div class="content-inside">
            <div class="content-text">
                <h3><?php echo ($redirection_bloc_left_title); ?></h3>
                <p><?php echo ($redirection_bloc_left_text); ?></p>
                <button>
                    <a href="<?php echo ($redirection_bloc_left_target_page); ?>#<?php echo ($redirection_bloc_left_target_anchor); ?>">
                        <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
                        <span><?php echo ($redirection_bloc_left_button_text); ?></span>
                    </a>
                </button>
            </div>
        </div>
    </div>
</article>