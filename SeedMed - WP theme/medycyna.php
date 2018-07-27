<?php /* Template Name: medycyna */ ?>


<?php

get_header();

?>



<section class="medicine-description">
        <div class="row">
            <div class="six columns">
                <img src="http://seedmed.pl/wp-content/uploads/2018/07/slider1_cropped.jpg" alt="surgeons" width="400" class="reveal" />
            </div>
            <div class="container">
            <div class="six columns">
                <h3>The best care</h3>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. ​ <br><br> This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="downloadable">
    <div class="container">
        <div class="row">
            <div class="three columns">
                <nav class="vertical-menu">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    <a href="#">Link 4</a>
                </nav>
            </div>
            <div class="nine columns">
                <div class="files">
                    <?php echo do_shortcode("[ic_add_posts category='medycyna' template='medycyna_post.php']"); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

?>
