<?php 
       /* Template Name: Err-404 */
       $header_banner = get_field('header_banner');
get_header();
?>

<div class="main">
    <div class="wrap">
      <div class="Err404">
        <h1>OUPS !</h1>
        <h2>La page que vous recherchez semble introuvable</h2>
        <h3>Code d'erreur : 404</h3>
        <button>
          <span>Retourner à l'accueil</span>
        </button>
      </div>
    </div>
</div>

<?php

get_footer();