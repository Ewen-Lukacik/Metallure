<?php
/* Template Name: Err-404 */
$puce = get_field("puce", "options");
$redirection = get_field('redirection');

$page_redirected = 'accueil'; 
$page_link = get_permalink(get_page_by_path($page_redirected));
get_header();
var_dump(home_url());
?>

<div class="main">
  <div class="wrap">
    <div class="Err404">
      <h1>OUPS !</h1>
      <h2>La page que vous recherchez semble introuvable</h2>
      <h3>Code d'erreur : 404</h3>
      <button>
        <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
        <span><a href="<?php echo($page_link) ?>">Retourner à l'Accueil</a></span>
      </button>
    </div>
  </div>
</div>

<?php

get_footer();
