<?php
    /* Template Name: Contact */
    get_header();

     /******HEADER******/
     $page_title = get_field('page_title');

     $contact_background = get_field('contact_background');
    $contact_text = get_field('contact_text');

    if(isset($_POST['submit']) && $_POST['firstname'] !== '' && $_POST['lastname'] !== '' && $_POST['to'] !== '' && $_POST['message'] !== ''){
        var_dump($_POST);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $send_message = $_POST['message'];
        wp_mail('dev-email@wpengine.local', 'Prise de contact de '+$firstname+' '+$lastname , $send_message);
    }
?>

<div class="main">
    <div class="contact-background" style="background-image: url(<?php echo($contact_background['sizes']['contact_background']); ?>)" 
            height="<?php echo($contact_background['sizes']['contact_background-height']); ?>" 
            width="<?php echo($contact_background['sizes']['contact_background-width']); ?>" 
            alt="<?php echo($contact_background['alt']); ?>">
            <div class="contact-background-mask"></div>
        <div class="contact-content">
            <section class="identity">
                <div class="identity-content">
                    <div>
                    <img class="identity-logo" src="../wp-content/uploads/2024/01/pictures/logo-header.svg" alt="logo">
                    </div>
                    <h1><?php echo($page_title); ?></h1>
                </div>
            </section>
            <div class="wrap">
                <section class="contact">
                    <div class="contact-box">
                        <article>
                            <p><?php echo($contact_text); ?></p>
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
                                        <input class="field field-long" type="text" name="to" placeholder="Envoyeur" value="" required>
                                </fieldset>
                            </div>
                            <fieldset>
                                <textarea class="field" name="message" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
                            </fieldset>
                            <p class="RGPD" >Duis egestas, urna sit amet aliquet tempus, elit elit porttitor est, eu varius est enim id leo. Ut consectetur ornare molestie. Nam eget orci bibendum, tristique eros nec, dignissim urna. Nulla sed augue et lacus accumsan blandit nec nec ex.</p>
                            <button name="submit" class="button-variant-white">
                                <div>
                                    <img loading="lazy" src="../wp-content/uploads/2024/01/pictures/Vector-button-black.svg" alt="vector">
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