<?php /* ?>
    <!-- Footer -->
    <nav class="footer-menu <?php if($post->post_type == "gallery" and !is_single()) { echo""; } elseif(is_page_template('template-contact.php') or is_page_template('template-about.php') or is_404() or is_page_template('template-award.php') or is_page_template('page-home.php')  or is_page_template('template-press.php')){  echo ""; } else { echo "no-fixed";}    ?>">

        <!-- Social -->
        <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul>

        <?php if(is_page_template('page-home.php')){ ?>
        <!-- Footer Menu -->
        <div class="center">
            <ul class="nav">
                <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php } ?>

        <!-- Copy -->
        <?php if (ale_get_option('copyrights')) : ?>
            <p class="right"><?php echo ale_option('copyrights'); ?></p>
        <?php else: ?>
            <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
        <?php endif; ?>

    </nav>
    <?php */ ?>

    <!-- Custom Footer -->
    <footer class="footer">
        <div class="footer-content-block grid-x row">
            <div class="social-medias float-left medium-4 large-3 columns">
                <div class="moto">Social medias: </div>
                <?php
                    wp_nav_menu( array (
                        'theme_location' => 'social_medias_footer_pos',
                        'container_class' => 'socialMediasFooterContainer'
                    ) );
                ?>
            </div>
            <div class="navigation float-left medium-5 large-6 columns">
                <div class="grid-x row footer-menu">
                    <div class="columns medium-6 large-6">
                        <?php 
                            wp_nav_menu( array (
                                'theme_location' => 'links_list_1_footer_pos',
                                'container_class' => 'footerLinksList'
                            ) );
                        ?>
                    <!--<ul class="vertical menu">
                            <li class="primary-link">
                                <a href="#">Start shopping</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Mens</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Womens</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">France</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Italy</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Sales</a>
                            </li>
                        </ul>-->
                    </div>
                    <div class="columns medium-6 large-6">
                        <?php 
                            wp_nav_menu( array (
                                'theme_location' => 'links_list_2_footer_pos',
                                'container_class' => 'footerLinksList'
                            ) );
                        ?>
                    <!--<ul class="vertical menu">
                            <li class="primary-link">
                                <a href="#">Lia.go</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Varranty</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Delivery</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Returns</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Co-working</a>
                            </li>
                            <li class="secondary-link">
                                <a href="#">Support</a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="contacts float-left medium-3 large-3 columns">
                <div>
                    <div class="header-menu-option">Contacts</div>
                    <div>Tel.: <span class="tape-value">087-654-19-33, 077-391-70-13</span></div>

                    <div>Adress: <span class="tape-value">555F Chornovola st., Lviv, Ukraine</span></div>
                    <div>E-mail: <span class="tape-value">lia.go@gmail.com</span></div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-block">
            <center>
                <div class="secondary">&copy;2019 Lia.go  All rights reserved<br>Designed and created by <span class="mark-text special-links-font">Mint Five</span></div>
            </center>
        </div>
    </footer>

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>