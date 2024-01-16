<?php 
       /* Template Name: Err-404 */
       $header_banner = get_field('header_banner');
get_header();
?>

<div class="main">
    <div class="wrap">
      <section class="identity" style="background-image: url(<?php echo($header_banner['sizes']['header_banner']); ?>)" 
        height="<?php echo($header_banner['sizes']['header_banner-height']); ?>" 
        width="<?php echo($header_banner['sizes']['header_banner-width']); ?>" 
        alt="<?php echo($header_banner['alt']); ?>">
          
        <div class="identity-cover">
          <div class="identity-content">
            <img class="identity-logo" src="../wp-content/uploads/2024/01/pictures/logo-header.svg" alt="logo">
          </div>
        </div>
        
      </section>

      <div class="Err404">
        <h1>OUPS !</h1>
        <h2>La page que vous recherchez semble introuvable</h2>
        <h3>Code d'erreur : 404</h3>
      </div>



    </div>
</div>

<?php

get_footer();