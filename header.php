<?php 

// $menu_entry1 = get_field('entry_1', 8);
// $menu_entry2 = get_field('entry_2', 8);
// $menu_entry3 = get_field('entry_3', 8);
// $menu_entry4 = get_field('entry_4', 8);

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
        <!-- <nav>
            <ul class="nav-entry">
                <a href=""><?php echo($menu_entry1); ?></a>
                <a href=""><?php echo($menu_entry2); ?></a>
            </ul>
            <ul class="nav-entry">
                <a href=""><?php echo($menu_entry3); ?></a>
                <a href=""><?php echo($menu_entry4); ?></a>
            </ul>
        </nav> -->
    </div>
</header>