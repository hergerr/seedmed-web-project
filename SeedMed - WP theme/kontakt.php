<?php /* Template Name: kontakt */ ?>

<?php
 
get_header();

?>


    <section class="contact-with-us">
        <div class="row">
            <div class="twelve columns">
                <h4 class="reveal"><?php the_field('naglowek'); ?></h4>
            </div>
        </div>
    </section>

    <section class="contact-data">
        <div class="container">
            <div class="row">
                <div class="offset-by-two two columns">
                    <h3>Adres</h3>
                    <p><?php the_field('adres'); ?></p>
                </div>
                <div class="two columns">
                    <h3>Telefon</h3>
                    <p><?php the_field('telefon'); ?></p>
                </div>

                <div class="six columns">
                    <h3>Formularz kontaktowy</h3>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>




    <?php

get_footer();
 
?>
