<?php
    /* Template Name: Contact */
    get_header();

     /******HEADER******/
     $page_title = get_field('page_title');

     $contact_background = get_field('contact_background');
    if(isset($_POST['submit']) && $_POST['firstname'] !== '' && $_POST['lastname'] !== '' && $_POST['to'] && $_POST['object'] && $_POST['message'] !== ''){
        var_dump($_POST);
        $send_to = $_POST['to'];
        $send_object = $_POST['object'];
        $send_message = $_POST['message'];
        wp_mail($send_to, $send_object, $send_message);
    }
?>

<div class="main">
    <div class="contact-background" style="background-image: url(<?php echo($contact_background['sizes']['contact_background']); ?>)" 
            height="<?php echo($contact_background['sizes']['contact_background-height']); ?>" 
            width="<?php echo($contact_background['sizes']['contact_background-width']); ?>" 
            alt="<?php echo($contact_background['alt']); ?>">
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
                        <p>lorem ipsum</p>
                    </article>
                </div>
                <div class="contact-box">
                    <form action="" method="post">
                        <div class="field-small">
                            <fieldset>
                                <!-- <label>Prénom</label> -->
                                <input class="field" type="text" name="firstname" placeholder="Prénom" value="" required>
                            </fieldset>
                            <fieldset>
                                <!-- <label>Nom</label> -->
                                <input class="field" type="text" name="lastname" placeholder="Nom" value="" required>
                            </fieldset>
                        </div>
                        <div class="field-long">
                            <fieldset>
                                <!-- <label>Envoyeur</label> -->
                                    <input class="field field-long" type="text" name="to" placeholder="Envoyeur" value="" required>
                            </fieldset>
                        </div>
                        <fieldset>
                            <!-- <label>Message</label> -->
                            <!-- <input class="field" type="textarea" name="message" placeholder="Your message" value="" required> -->
                            <textarea class="field" name="message" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
                        </fieldset>
                        <p class="RGPD" >Duis egestas, urna sit amet aliquet tempus, elit elit porttitor est, eu varius est enim id leo. Ut consectetur ornare molestie. Nam eget orci bibendum, tristique eros nec, dignissim urna. Nulla sed augue et lacus accumsan blandit nec nec ex.</p>
                        <button class="button-variant-white">
                            <div>
                                <img loading="lazy" src="../wp-content/uploads/2024/01/pictures/Vector-button-black.svg" alt="vector">
                                <span>Voir plus</span>
                            </div>
                        </button>
                    </form>
                </div>
            </section>
        </div>
</div>

<?php get_footer(); ?>