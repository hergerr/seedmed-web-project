<?php /* Template Name: o-firmie */ ?>


<?php
 
get_header();

?>


    <section class="company">
        <div class="row">
            <div class="six columns"><img class="reveal" src="<?php the_field('sekcja_#1-_obrazek'); ?>" alt="dentist's tools" /></div>
            <div class="container">
                <div class="six columns">
                    <h3><?php the_field('sekcja_#1-_naglowek'); ?></h3>
                    <?php the_field('sekcja_#1-_tekst'); ?>

                </div>
            </div>
        </div>
    </section>
    <section class="strategy">
        <div class="row">
            <div class="six columns"><img class="reveal" src="<?php the_field('sekcja_#2-_obrazek'); ?>" alt="doctor's daily report" /></div>
            <div class="container">
                <div class="six columns">
                    <h3><?php the_field('sekcja_#2-_naglowek'); ?></h3>
                    <ul>
                        <li><?php the_field('sekcja_#2-_tekst_a'); ?></li>
                        <li><?php the_field('sekcja_#2-_tekst_b'); ?></li>
                        <li><?php the_field('sekcja_#2-_tekst_c'); ?></li>
                        <li><?php the_field('sekcja_#2-_tekst_d'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colors">
        <div class="row">
            <div class="six columns"><img class="reveal" src="<?php the_field('sekcja_#3-_obrazek'); ?>" alt="heart" /></div>
            <div class="container">
                <div class="six columns">
                    <h3><?php the_field('sekcja_#3-_naglowek'); ?></h3>
                    <?php the_field('sekcja_#3-_tekst'); ?>

                    <span style="color: grey;"><?php the_field('sekcja_#3-_kolor_a'); ?></span> <?php the_field('sekcja_#3-_kolor_a_opis'); ?>

                    <span style="color: #cc1735;"><?php the_field('sekcja_#3-_kolor_b'); ?></span> <?php the_field('sekcja_#3-_kolor_b_opis'); ?>

                </div>
            </div>
        </div>
    </section>
    <section class="services-summary">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <h3><?php the_field('sekcja_#4-_naglowek'); ?></h3>
                    <p><?php the_field('sekcja_#4-_tekst'); ?></p>
                </div>
            </div>
        </div>
    </section>



<?php

get_footer();
 
?>
