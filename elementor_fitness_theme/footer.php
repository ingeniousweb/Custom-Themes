<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">


                <div class="inner">
                <div class="col-md-4"><?php dynamic_sidebar('footer-1'); ?></div>
                <div class="col-md-4"><?php dynamic_sidebar('footer-2'); ?></div>
                <div class="col-md-4"><?php dynamic_sidebar('footer-3'); ?></div>
                </div>

                <div class="clearfix"></div>


                    <div class="site-info copyright">
Gym Layout Designed with &#9829; by <a href="https://www.facebook.com/munir.kamal" target="_blank">Munir Kamal</a> | All Rights Reserved
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
