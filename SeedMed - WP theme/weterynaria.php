<?php /* Template Name: weterynaria */ ?>


<?php

get_header();

?>



<section class="medicine-description">
    <div class="row">
        <div class="six columns">
            <img src="https://seedmed.pl/wp-content/uploads/2018/08/slider3.jpg" alt="surgeons" width="400" class="reveal" />
        </div>
        <div class="container">
            <div class="six columns">
                <h3>Weterynaria</h3>
                <h6>Bezpieczeństwo, Jakość, Profesjonalizm</h6>
                <p>Współpracujemy z kontrahentami, dla których ważne są w biznesie zasady bezpieczeństwa, stawiają na jakość wytwarzanych produktów oraz świadczonych usług, a swoją działalność opierają na profesjonalnym personelu.<br>
	                 Posiadamy w ofercie produkty do pomiaru podstawowych parametrów życiowych zwierząt, igły i pistolety biopsyjne oraz wiele innych.<br>
	                  W myśl zasadzie, której hołdujemy „powiedz nam czego potrzebujesz, a znajdziemy to dla Ciebie” jesteśmy w zaopatrzyć w sprzęt każdą klinikę weterynaryjną, indywidualną praktykę lekarza weterynarii czy też placówki naukowobadawcze.
</p>
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
                            'theme_location' => 'weterynaria-menu',
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
