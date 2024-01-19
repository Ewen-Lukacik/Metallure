<?php
/* Template Name: Home */

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

$preview2_title = get_field('preview2_title');
$preview2_text = get_field('preview2_text');
$preview2_picture = get_field('preview2_picture');

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
      <div class="content-inside">
        <h3><?php echo ($preview1_title); ?></h3>
        <p><?php echo ($preview1_text); ?></p>
        <button>
          <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
          <span>Voir plus</span>
        </button>
      </div>
      <img class="content-img1" src="<?php echo ($preview1_picture['sizes']['content_picture']); ?>" height="<?php echo ($preview1_picture['sizes']['content_picture-height']); ?>" width="<?php echo ($preview1_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($preview1_picture['alt']); ?>">
    </article>

    <article class="content">
      <img class="content-img2" src="<?php echo ($preview2_picture['sizes']['content_picture']); ?> " height="<?php echo ($preview2_picture['sizes']['content_picture-height']); ?> " width="<?php echo ($preview2_picture['sizes']['content_picture-width']); ?>" alt="<?php echo ($preview2_picture['alt']); ?>">
      <div class="content-inside">
        <h3>Du réemploi à l'économie circulaire</h3>
        <p>Il est toujours difficile d’expliquer une passion ou un métier qui nous tient à cœur… je vois cela comme une quintessence de l’artisanat. Le forgeron fabrique les outils, les répare, crée de l’utile par l’esthétisme. </p>
        <button>
          <div>
            <img loading="lazy" src="../wp-content/uploads/2024/01/pictures/Vector-button.svg" alt="vector">
            <span>Voir plus</span>
          </div>
        </button>
      </div>
    </article>
  </div>
</div>

<?php get_footer(); ?>