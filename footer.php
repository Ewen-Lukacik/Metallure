<?php
$logo_footer = get_field("logo_footer", "options");
$puce = get_field("puce", "options");

$page_ML = 'mentions-legales';
$page_link = get_permalink(get_page_by_path($page_ML));

// Utilisez $page_url dans votre lien
?>

<footer>
  <section style="background-color: #1E1E1E; width: 100%">
  <div class="footer-display">
    <div class="footer-img">
      <img loading="lazy" src="<?php echo ($logo_footer['url']); ?> " alt="<?php echo ($logo_footer['alt']); ?>">
    </div>
    <div class="footer-infos">
      <p class="footer-infos-adresses">231 Allée haute du hâteau <br>
        73230 Saint Jean d'Arvey <br> <b>06 33 16 47 57 <br></b>
      </p>
      <div class="footer-infos-legal">
        <a href="<?php echo($page_link); ?>">Mentions légales</a>
        <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
        <a>Copyright © 2024 - Métallure</a>
      </div>
    </div>
    <div class="footer-socials">
      <div class="footer-social">
        <?php if (have_rows('socials', 'options')) : ?>
          <?php while (have_rows('socials', 'options')) :
            the_row();
            $social_icon = get_sub_field('social_icon', 'options');
            $social_link = get_sub_field('social_link', 'options');
          ?>
            <a href="<?php echo ($social_link); ?>" target="_blank">
              <img src="<?php echo ($social_icon['url']); ?> " alt="<?php echo ($social_icon['alt']); ?>">
            </a>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  </section>

</footer>
<?php wp_footer(); ?>
</body>

</html>