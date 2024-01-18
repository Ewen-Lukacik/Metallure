<?php 

// $menu_entry1 = get_field('entry_1', 8);
// $menu_entry2 = get_field('entry_2', 8);
// $menu_entry3 = get_field('entry_3', 8);
// $menu_entry4 = get_field('entry_4', 8);
$header_banner = get_field('header_banner', 'options');
$logo_header = get_field('header_logo', 'options');
$logo_header_second = get_field('header_logo_secondary', 'options');
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
      <?php if(!is_page('contact')): ?>
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
              <?php if(is_page('accueil')): ?>
                <div>
                <img loading="lazy" src="<?php echo($logo_header_second['url']); ?> " alt="<?php echo($logo_header_second['alt']); ?>">
                </div>
              <?php endif; ?>
              <h1><?php 
              if(is_post_type_archive('realisations') || is_tax('realisations_tax')) {
                echo('Réalisations');
              } else if(is_page('Accueil')) { ?>
                <h1>Forge et Ferronerie d'art</h1>
              <?php }else {
                the_title();
              } ?>
              </h1>
            </div>
        </section>
      <?php endif; ?>
    </div>
</header>