<?php
$redirection_bloc_right_title = $content['redirection_bloc_right_title'];
$redirection_bloc_right_text = $content['redirection_bloc_right_text'];
$redirection_bloc_right_picture = $content['redirection_bloc_right_picture'];
$redirection_bloc_right_button_text = $content['redirection_bloc_right_button_text'];
$redirection_bloc_right_target_page = $content['redirection_bloc_right_target_page'];
$redirection_bloc_right_target_anchor = $content['redirection_bloc_right_target_anchor'];

$puce = get_field("puce", "options");
?>

<article class="content">
    <div class="wrap content-wrap">
        <div class="content-inside">
            <div class="content-text">
                <h3><?php echo ($redirection_bloc_right_title); ?></h3>
                <p><?php echo ($redirection_bloc_right_text); ?></p>
                <button>
                    <a href="<?php echo ($redirection_bloc_right_target_page); ?>#<?php echo ($redirection_bloc_right_target_anchor); ?>">
                        <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
                        <span><?php echo ($redirection_bloc_right_button_text); ?></span>
                    </a>
                </button>
            </div>

        </div>
        <img class="content-img2" src="<?php echo ($redirection_bloc_right_picture['sizes']['content_picture']); ?> " height="<?php echo ($redirection_bloc_right_picture['sizes']['content_picture-height']); ?> " width="<?php echo ($redirection_bloc_right_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($redirection_bloc_right_picture['alt']); ?>">
    </div>
</article>