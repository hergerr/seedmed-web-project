<?php /* Template Name: diagnostyka */ ?>


<?php

get_header();

?>



<section class="medicine-description">
    <div class="row">
        <div class="six columns">
            <img src="https://seedmed.pl/wp-content/uploads/2018/08/slider2.jpg" alt="surgeons" width="400" class="reveal" />
        </div>
        <div class="container">
            <div class="six columns">
                <h3>Diagnostyka</h3>
                <h6>Bezpieczeństwo, Jakość, Profesjonalizm</h6>
                <p>Współpracujemy z kontrahentami, dla których ważne są w biznesie zasady bezpieczeństwa, stawiają na jakość wytwarzanych produktów oraz świadczonych usług, a swoją działalność opierają na profesjonalnym personelu.<br>
                  Przedstawiamy produkty wspierające proces diagnostyczny w onkologii, diabetologii, hematologii czy też neonatologii. Wprowadzamy na rynek znaczniki onkologiczne (markery), które idealnie sprawdzają się w terapii neoadiuwantowej.</p>
            </div>
        </div>
    </div>
</section>

<section class="downloadable">
    <div class="container">
        <div class="row">
            <div class="three columns">

                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'diagnostyka-menu',
                            'container_class' => 'vertical-menu'
                        )
                    );
                ?>

            </div>
            <div class="nine columns">
                <div class="files">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

?>
