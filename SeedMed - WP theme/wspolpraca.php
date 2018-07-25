<?php /* Template Name: wspolpraca */ ?>

<?php

get_header();

?>

<section>
    <div class="collaborating-companies">
        <div class="row">
            <div class="twelve columns">
                <h4 class="reveal">Współpracujemy z firmami</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            <div class="container">
                <section class="customer-logos slider">
                    <?php echo do_shortcode("[logoshowcase center_mode=\"true\" slides_column=\"3\"]"); ?>
                </section>
            </div>
        </div>
    </div>

    <a href="#" class="scroll"><i class="fas fa-arrow-up  fa-3x"></i></a>

    <div class="container">
        <?php echo do_shortcode("[ic_add_posts category='wspolpraca' template='wspolpraca_post.php']"); ?>
    </div>
</section>

<?php

get_footer();

?>
