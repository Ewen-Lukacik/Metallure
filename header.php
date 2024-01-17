<?php 

// $menu_entry1 = get_field('entry_1', 8);
// $menu_entry2 = get_field('entry_2', 8);
// $menu_entry3 = get_field('entry_3', 8);
// $menu_entry4 = get_field('entry_4', 8);
$header_banner = get_field('header_banner', 'options');
$logo_header = get_field('header_logo', 'options');
wp_nav_menu('Navigation');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>


<header>
    <div class="wrap">
      <section class="identity">
            <div  class="identity-background" style="background-image: url(<?php echo($header_banner['sizes']['header_banner']); ?>)" 
              height="<?php echo($header_banner['sizes']['header_banner-height']); ?>" 
              width="<?php echo($header_banner['sizes']['header_banner-width']); ?>" 
              alt="<?php echo($header_banner['alt']); ?>">
            </div>
            <div class="identity-content">
              <div>
              <img loading="lazy" src="<?php echo($logo_header['url']); ?> " alt="<?php echo($logo_header['alt']); ?>">
              </div>
              <div>
                <img src="../wp-content/uploads/2024/01/pictures/metallure.svg" alt="metallure">
              </div>
              <h1><?php the_title(); ?></h1>
            </div>
        </section>
    </div>
</header>