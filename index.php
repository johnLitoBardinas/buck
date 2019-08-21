<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

    <div class="logo_container" id="logo_container">
        <!-- FIXED LOGO -->
        <a href="<?php echo site_url();?>">
            <div class="logo">
                BUCK STREET <br/>MARKET
            </div>
        </a>
    </div>

    <!-- INSERT CLOUD WITH REPEEAT -->
    <div class="cloud__layer" id="cloud__layer">
    </div>

    <div class="coming-soon__container" id="coming-soon__container" style="display:none;">
    </div>

    <!-- MAIN CONTAINER -->
    <div class="content__layer hd" id="content__layer">

        <div class="body__info" id="body__info">
            
            <div class="left-container" id="left-container">

                <div class="info__text-icon" id="info__text-icon">
                    <h1>SHOP. DWELL. DINE.</h1>
                    <p>Buck Street Market is a brand new Camden destination. Bringing together flagship dining concepts, ethical and sustainable retail as well as boutique makers and market stalls. Buck Street Market will provide the perfect space for emerging designers, artists and chefs from London and beyond. <h1 class="info__text-emphasize">Opening January 2020.</h1></p>

                    <ul class="cta__social-media" id="cta__social-media">
                        <li class="facebook">
                            <a href="<?php echo esc_url('https://www.facebook.com/BuckStreetMarket/?modal=admin_todo_tour'); ?>"></a>
                        </li>
                        <li class="twitter">
                            <a href="<?php echo esc_url('https://twitter.com/buckstreetmkt?lang=en'); ?>"></a>
                        </li>
                        <li class="instagram">
                            <a href="<?php echo esc_url('https://www.instagram.com/buckstreetmarket/'); ?>"></a>
                        </li>
                    </ul>
                </div>
                <!-- #info__text-icon -->

            </div>



            <div class="right-container">

                <div class="info__button-container" id="info__button-container">
                    <button class="info__button" id="info__button">Be the first to know</button>
                </div>
                <!-- #info__button-container -->

                <div class="subscribe__container hd" id="subscribe__container">
                    <?php echo do_shortcode('[contact-form-7 id="6" title="Subscribe v2"]'); ?>
                </div>
                <!-- #subscribe__container -->

                <div class="thank-you__container hd" id="thank-you__container">
                    <img src="<?php echo esc_url( bloginfo('template_url'). '/assets/img/thanks.png' ); ?>" alt="Thank you message!">
                </div>
                <!-- #thank-you__container -->
    
            </div>

        </div>
    </div>

    <!-- HOUSES -->
    <div class="houses__layer" id="houses__layer"></div>

<?php
get_footer();
