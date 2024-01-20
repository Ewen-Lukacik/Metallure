<?php
/* Template Name: Contact */
get_header();

/******HEADER******/
$page_title = get_field('page_title');
$logo_header = get_field('header_logo', 'options');

$contact_background = get_field('contact_background');
$contact_text = get_field('contact_text');
$puce = get_field("puce", "options");

if (isset($_POST['submit']) && $_POST['firstname'] !== '' && $_POST['lastname'] !== '' && $_POST['to'] !== '' && $_POST['message'] !== '') {
    var_dump($_POST);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $send_message = $_POST['message'];
    wp_mail('metallurge.forge@gmail.com', 'Prise de contact de ' . $firstname . ' ' . $lastname, $send_message);
}
?>

<div class="main">
        <div class="contact-background" style="background-image: url(<?php echo ($contact_background['sizes']['contact_background']); ?>)" alt="<?php echo ($contact_background['alt']); ?>">
            <div class="contact-background-mask">
            </div>
            <div class="contact-content">
                <div class="wrap">
                    <div class="identity-content">
                        <div>
                            <img loading="lazy" src="<?php echo ($logo_header['url']); ?> " alt="<?php echo ($logo_header['alt']); ?>">
                        </div>
                        <!-- <div>
                <img src="../wp-content/uploads/2024/01/pictures/metallure.svg" alt="metallure">
              </div> -->
                        <h1><?php
                            if (is_post_type_archive('realisations') || is_tax('realisations_tax')) {
                                echo ('Réalisations');
                            } else {
                                the_title();
                            } ?>
                        </h1>
                    </div>
               
                        <section class="contact">
                            <div class="contact-box">
                                <article>
                                    <p><?php echo ($contact_text); ?></p>
                                </article>
                            </div>
                            <div class="contact-box">
                                <form action="" method="post">
                                    <div class="field-small">
                                        <fieldset>
                                            <input class="field" type="text" name="firstname" placeholder="Prénom" value="" required>
                                        </fieldset>
                                        <fieldset>
                                            <input class="field" type="text" name="lastname" placeholder="Nom" value="" required>
                                        </fieldset>
                                    </div>
                                    <div class="field-long">
                                        <fieldset>
                                            <input class="field field-long" type="text" name="to" placeholder="E-mail" value="" required>
                                        </fieldset>
                                    </div>
                                    <fieldset>
                                        <textarea class="field" name="message" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
                                    </fieldset>
                                    <div class="RGPD">
                                        <p>Les données collectées via ce formulaire ne seront pas revendues ou données à des entreprises tierces, elles seront utilisées
                                            a des fins commerciales avec le propriétaire du site Metallurge.
                                        </p>
    
                                    </div>
                                    <button name="submit">
                                        <div>
                                            <img loading="lazy" src="<?php echo ($puce['url']); ?> " alt="<?php echo ($puce['alt']); ?>">
                                            <span>Envoyer</span>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </section>
                 
                </div>
            </div>
        </div>

</div>

<?php get_footer(); ?>