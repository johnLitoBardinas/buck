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

    <!-- FIXED LOGO -->
    <a href="<?php echo site_url();?>">
    <div class="logo">
        BUCK STREET MARKET
    </div>
    </a>

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
                    <p><b>BUCK STREET MARKET</b> is a brand new Camden destination: updating an internationally and recognized retail space to reflect modern standards of security, variety, comfort and aesthetic that the younger millennial customers has come to expect.</p>

                    <ul class="cta__social-media" id="cta__social-media">
                        <li class="facebook">
                            <a href="https://facebook.com"></a>
                        </li>
                        <li class="linkedin">
                            <a href="https://linkedin.com"></a>
                        </li>
                        <li class="instagram">
                            <a href="https://instagram.com"></a>
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
