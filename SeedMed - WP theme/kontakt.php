<?php /* Template Name: kontakt */ ?>

<?php

get_header();

?>


<section class="contact-with-us">
    <div class="row">
        <div class="twelve columns">
            <h4 class="reveal">Kontakt z nami</h4>
        </div>
    </div>
</section>

<section class="contact-data">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <h3>Telefon</h3>
                <p>+48&nbsp;668&nbsp;250&nbsp;118</p>
                <h3>Adres</h3>
                <p>ul. Lewandowskiego 1<br> 62-010 Pobiedziska<br> Polska</p>
            </div>

            <div class="four columns">
                <h3>Dane firmy</h3>
                <p>NIP: 764-11-98-531<br> REGON: 366707664</p>
            </div>

            <div class="four columns">
                <h3>Formularz kontaktowy</h3>
                <?php echo do_shortcode("[contact-form-7 id=\"110\" title=\"Formularz kontaktowy\"]"); ?>
                <a href="http://seedmed.pl/wp-content/uploads/2018/07/Regulamin_rodo-1.pdf" target="_blank">Więcej informacji o RODO</a>
            </div>
        </div>
    </div>
</section>




<?php

get_footer();

?>
