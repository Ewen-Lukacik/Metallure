<?php
/* Template Name: Accueil */

get_header();

/******HEADER******/
$page_title = get_field('page_title');
$header_banner = get_field('header_banner');

/*****SERVICES ***********/
$service1_title = get_field('service1_title');
$service1_picture = get_field('service1_picture');
$service1_anchor = get_field('service1_anchor');

$service2_title = get_field('service2_title');
$service2_picture = get_field('service2_picture');
$service2_anchor = get_field('service2_anchor');

$service3_title = get_field('service3_title');
$service3_picture = get_field('service3_picture');
$service3_anchor = get_field('service3_anchor');

//var_dump($service1_picture); 
/****CONTENT ********/
$preview1_title = get_field('preview1_title');
$preview1_text = get_field('preview1_text');
$preview1_picture = get_field('preview1_picture');
$preview1_button = get_field('preview1_button_text');
$preview1_target_page = get_field('preview1_target_page');
$preview1_target_anchor = get_field('preview1_target_anchor');

$preview2_title = get_field('preview2_title');
$preview2_text = get_field('preview2_text');
$preview2_picture = get_field('preview2_picture');
$preview2_button = get_field('preview2_button_text');
$preview2_target_page = get_field('preview2_target_page');
$preview2_target_anchor = get_field('preview2_target_anchor');

$redirect_link = get_field('redirect_link');
$anchor = get_field('anchor_bloc1');


$puce = get_field("puce", "options");
// var_dump($post);
?>

<div class="main">
  <div class="wrap">
    <h2 style="margin-top: 5%;">L'artisanat au carrefour des éléments</h2>
    <section class="services">
      <a href="<?php echo ($redirect_link); ?>#<?php echo ($service1_anchor); ?>" class="services-block" style="background-image: url(<?php echo ($service1_picture['sizes']['services_background']); ?> " height="<?php echo ($service1_picture['sizes']['services_background-height']); ?> " width="<?php echo ($service1_picture['sizes']['services_background-width']); ?>" alt="<?php echo ($service1_picture['alt']); ?> );">
        <div class="services-block-cover">
          <h3><?php echo ($service1_title); ?></h3>
        </div>
      </a>
      <a href="<?php echo ($redirect_link); ?>#<?php echo ($service2_anchor); ?>" class="services-block" style="background-image: url(<?php echo ($service2_picture['sizes']['services_background']); ?> " height="<?php echo ($service2_picture['sizes']['services_background-height']); ?> " width="<?php echo ($service2_picture['sizes']['services_background-width']); ?>" alt="<?php echo ($service2_picture['alt']); ?> );">
        <div class="services-block-cover">
          <h3><?php echo ($service2_title); ?></h3>
        </div>
      </a>
      <a href="<?php echo ($redirect_link); ?>#<?php echo ($service3_anchor); ?>" class="services-block" style="background-image: url(<?php echo ($service3_picture['sizes']['services_background']); ?> " height="<?php echo ($service2_picture['sizes']['services_background-height']); ?> " width="<?php echo ($service2_picture['sizes']['services_background-width']); ?>" alt="<?php echo ($service2_picture['alt']); ?> );">
        <div class="services-block-cover">
          <h3><?php echo ($service3_title); ?></h3>
        </div>
      </a>
    </section>

    <article class="content" style="background-color: #1e1e1e;">
      <div class="content-wrap">
        <div class="content-inside">
          <h3><?php echo ($preview1_title); ?></h3>
          <p><?php echo ($preview1_text); ?></p>
          <button>
            <a href="<?php echo ($preview1_target_page); ?>#<?php echo ($preview1_target_anchor); ?>">
              <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
              <span><?php echo ($preview1_button); ?></span>
            </a>
          </button>
        </div>
        <img class="content-img1" src="<?php echo ($preview1_picture['sizes']['content_picture']); ?>" height="<?php echo ($preview1_picture['sizes']['content_picture-height']); ?>" width="<?php echo ($preview1_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($preview1_picture['alt']); ?>">
      </div>
    </article>

    <article class="content">
      <div class="content-wrap">
        <img class="content-img2" src="<?php echo ($preview2_picture['sizes']['content_picture']); ?> " height="<?php echo ($preview2_picture['sizes']['content_picture-height']); ?> " width="<?php echo ($preview2_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($preview2_picture['alt']); ?>">
        <div class="content-inside">
          <h3><?php echo ($preview2_title); ?></h3>
          <p><?php echo ($preview2_text); ?></p>
          <button>
            <a href="<?php echo ($preview2_target_page); ?>#<?php echo ($preview2_target_anchor); ?>">
              <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
              <span><?php echo ($preview2_button); ?></span>
            </a>
          </button>
        </div>
      </div>
    </article>
  </div>
</div>

<?php get_footer(); ?>