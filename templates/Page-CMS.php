<?php
/* Template Name: CMS */

get_header();
?>

<div class="main">
  <?php $flexible_contents = get_field('flexible_blocks');
  foreach ($flexible_contents as $content) {
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

    if (file_exists($template_file)) {

      printf('<section class="layout_%s">', $template_name);
      include($template_file);
      printf('</section>');
    }
  }

  function p($args)
  {
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
  }


  function d($args)
  {
    p($args);
    die();
  }


  ?>
</div>


<?php get_footer(); ?>