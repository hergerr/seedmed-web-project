<?php /* Template Name: home */ ?>

<?php

get_header();

?>

<?php

the_content();

?>

<section class="hero-slider">
    <div id="slider">
        <div class="slides">
            <!-- First slide -->
            <div class="slider">
                <div class="images">
                    <img class="slider-photo" src="http://seedmed.pl/wp-content/uploads/2018/07/slider1_cropped.jpg" alt="surgeons on work">
                </div>
            </div>

            <!-- Second slide -->
            <div class="slider">
                <div class="images">
                    <img class="slider-photo" src="http://seedmed.pl/wp-content/uploads/2018/07/slider2_cropped.jpg" alt="examining roentgen's scan">
                </div>
            </div>

            <!-- Third slide -->
            <div class="slider">
                <div class="images">
                    <img class="slider-photo" src="http://seedmed.pl/wp-content/uploads/2018/07/slider3_cropped.jpg" alt="puppy at vet">
                </div>
            </div>

            <!-- Fourth slide -->
            <div class="slider">
                <div class="images">
                    <img class="slider-photo" src="http://seedmed.pl/wp-content/uploads/2018/07/slider4_cropped.jpg" alt="doctor">
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <div class="flex">
                <div class="hero-box first-box">
                    <h3 class="reveal">Medycyna</h3>
                    <p class="reveal-second">Znajdziesz tu produkty dla chirurgii, urologii, endoskopii, anestezjologi. jeżeli czegoś nie widzisz, zapytaj.</p>
                    <a href="http://seedmed.pl/medycyna/" class="reveal-second"><button class="button-readmore">Czytaj</button></a>
                </div>

                <div class="hero-box second-box">
                    <h3 class="reveal">Diagnostyka</h3>
                    <p class="reveal-second">W tej zakładce prezentujemy asortyment do diagnostyki m.in. biopsja, terapia neoadjuwantowa czy też analizatory.</p>
                    <a href="http://seedmed.pl/diagnostyka/" class="reveal-second"><button class="button-readmore">Czytaj</button></a>
                </div>

                <div class="hero-box third-box">
                    <h3 class="reveal">Weterynaria</h3>
                    <p class="reveal-second">Miejsce, w którym każdy weterynarz znajdzie dla siebie coś ciekawego, m. in. sprzęt do diagnostyki czy też monitorowania.</p>
                    <a href="http://seedmed.pl/weterynaria/" class="reveal-second"><button class="button-readmore">Czytaj</button></a>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- End Slider
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Offer
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section class="offer">
    <div class="container">
        <div class="row">

            <div class="twelve columns">
                <h2>Czym się zajmujemy?</h2>
            </div>

        </div>
        <div class="offer-boxes row">

            <div class="one-third column">
                <div class="offer-box">
                    <div class="icon-circle reveal" style="-webkit-animation-duration: 1s;">
                        <i class="icon-1 fas fa-comments fa-3x"></i>
                    </div>
                    <h3 class="reveal">Dobry plan na rozwój</h3>
                    <p class="reveal-second">Pomożemy w rozwoju, wdrażaniu nowych technik oraz pokażemy nowoczesny sprzęt dający nowe możliwości.</p>
                    <div style="text-align:center;"><button class="button-readmore reveal-third" style="-webkit-animation-duration: 1s;">Czytaj</button></div>
                </div>
            </div>

            <div class="one-third column">
                <div class="offer-box">
                    <div class="icon-circle reveal" style="-webkit-animation-delay: 0.2s; -webkit-animation-duration: 1s;">
                        <i class="icon-2 fas fa-check-circle fa-3x"></i>
                    </div>
                    <h3 class="reveal" style="-webkit-animation-delay: 0.2s;">Dobra firma w dobrym miejscu</h3>
                    <p class="reveal-second" style="-webkit-animation-delay: 0.2s;">Lokacja naszej firmy gwarantuje możliwość szybkiego kontaktu. Powiedz nam jaki masz problem, a przyjedziemy by go rozwiązać.</p>
                    <div style="text-align:center;"><button class="button-readmore reveal-third">Czytaj</button></div>
                </div>
            </div>

            <div class="one-third column">
                <div class="offer-box">
                    <div class="icon-circle reveal" style="-webkit-animation-delay: 0.4s; -webkit-animation-duration: 1s;">
                        <i class="icon-3 fas fa-users fa-3x"></i>
                    </div>
                    <h3 class="reveal" style="-webkit-animation-delay: 0.4s;">Specjaliści Zespół</h3>
                    <p class="reveal-second" style="-webkit-animation-delay: 0.4s;">Pracujemy w grupie specjalistów, posiadających duże doświadczenie. Wspieramy, podpowiadamy, dzielimy się wiedzą.</p>
                    <div style="text-align:center;"><button class="button-readmore reveal-third">Czytaj</button></div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Offer
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Newsletter
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section class="newsletter">
        <div class="container">
            <form method="post" action="http://seedmed.pl/?na=s" onsubmit="return newsletter_check(this)">
                <h4>Zapisz się na newsletter</h4>
                <p>Jeśli potrzebujesz więcej informacji zapytaj. Chętnie Tobie pomożemy.<br></p>
                <p>Subkrybując newsletter akceptuję <a href="http://seedmed.pl/wp-content/uploads/2018/07/Regulamin_newslettera.pdf" target="_blank">regulamin</a>
                    , wyrażam zgodę na otrzymywanie informacji handlowej drogą elektorniczą i na przetwarzanie moich danych osobowych w celach dotyczących realizacji
                    działań marketingowych.<br><a href="http://seedmed.pl/wp-content/uploads/2018/07/Regulamin_rodo-1.pdf" target="_blank">Obowiązek informacyjny RODO</a></p>

                <input type="hidden" name="nlang" value="">

                <div style="text-align: center;">
                    <input class="input-email reveal" type="email" name="ne" placeholder="e-mail" required>
                </div>
                <input class="button-signup" type="submit" value="Subskrybuj">
            </form>
          </div>
        </div>
</section>

<?php

get_footer();

?>
