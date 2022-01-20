 <!-- ##### Add Area Start ##### -->
 <div class="big-add-area mb-100">
        <div class="container-fluid">
            <?php
             $image = get_theme_mod( 'newsbox_footer_ad', 'newsbox' );
            ?>
            <a href="#"><img src="<?php echo esc_url($image); ?>" alt=""></a>
        </div>
    </div>
    <!-- ##### Add Area End ##### -->
 <!-- ##### Footer Area Start ##### -->
 <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <?php
              $image_logo = get_theme_mod( 'newsbox_footer_logo', 'newsbox' );
            ?>
            <a href=""<?php echo site_url(); ?>"><img src="<?php echo esc_url($image_logo); ?>" alt=""></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <?php
                                  $defaults = [
                                    [
                                        'navigation_title' => __( 'Home' ),
                                        'navigation_link' => __('https://rayhanr.com'),
                                    ]
                                
                                ];
                                $settings = get_theme_mod("footer_nav_repeater_settings",$defaults);
                                ?>
                                <?php foreach($settings as $setting): ?>
                                <li><a href="<?php echo $setting['navigation_link'] ?>"><?php echo $setting['navigation_title']; ?></a></li>
                                <?php endforeach; ?>
                                
                            </ul>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <?php
                                  $defaults2 = [
                                    [
                                        'sl_title' => __( 'Facebook' ),
                                        'sl_class_name' => __('facebook'),
                                        'sl_class_link'=>__('#')
                                    ]
                                ];
                                $settings2 = get_theme_mod("footer_sl_settings",$defaults2);
                            ?>
                            <?php
                              foreach($settings2 as $setting):
                            ?>
                            <a href="<?php echo esc_url($setting['sl_class_link']) ?>" data-toggle="tooltip" data-placement="top" title="<?php echo esc_attr($setting['sl_title']) ?>"><i class="fa fa-<?php echo esc_attr($setting['sl_class_name']) ?>" aria-hidden="true"></i></a>
                            <?php
                              endforeach;
                            ?>
                        </div>

                        <p class="mb-15"><?php echo esc_html(get_theme_mod("newsbox_footer_des",__("Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus.")) );?></p>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<?php echo __('Copyright','newsbox') ?> &copy;<script>document.write(new Date().getFullYear());</script><?php echo __('All rights reserved | This template is made with ','newsbox') ?><i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank"><?php echo __('newsBox','newsbox') ?></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   <?php wp_footer(); ?>
</body>

</html>