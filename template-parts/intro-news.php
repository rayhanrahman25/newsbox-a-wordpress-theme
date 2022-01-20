<section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6><?php echo __('All the news','newsbox') ?></h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Popular</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">International</a>
                                    <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Local</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                      <?php
                                          $local_query = new WP_Query(array(
                                            'posts_per_page' => 2,
                                            'order'=>'ASC',
                                            'category_name' => 'latest', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                      ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title() ?></a>
                                                <a href="#" class="post-author">By <?php the_author(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                      <?php
                                            }
                                            wp_reset_query();
                                      ?>

                                    <!-- Single News Area -->
                                    <?php
                                         $local_query = new WP_Query(array(
                                            'posts_per_page' => 6,
                                            'category_name' => 'latest', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                            wp_reset_query();
                                     ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                            <div class="row">
                                    <!-- Single News Area -->
                                      <?php
                                          $local_query = new WP_Query(array(
                                            'posts_per_page' => 2,
                                            'category_name' => 'popular', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                      ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title() ?></a>
                                                <a href="#" class="post-author">By <?php the_author(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                      <?php
                                            }
                                      ?>

                                    <!-- Single News Area -->
                                    <?php
                                         $local_query = new WP_Query(array(
                                            'posts_per_page' => 6,
                                            'category_name' => 'popular', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                            wp_reset_query();
                                     ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav3">
                            <div class="row">
                                    <!-- Single News Area -->
                                      <?php
                                          $local_query = new WP_Query(array(
                                            'posts_per_page' => 2,
                                            'order'=>'ASC',
                                            'category_name' => 'international', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                      ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title() ?></a>
                                                <a href="#" class="post-author">By <?php the_author(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                      <?php
                                            }
                                            wp_reset_query();
                                      ?>

                                    <!-- Single News Area -->
                                    <?php
                                         $local_query = new WP_Query(array(
                                            'posts_per_page' => 6,
                                            'category_name' => 'international', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                            wp_reset_query();
                                     ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav4">
                            <div class="row">
                                    <!-- Single News Area -->
                                      <?php
                                          $local_query = new WP_Query(array(
                                            'posts_per_page' => 2,
                                            'category_name' => 'local', // this is the category SLUG 
                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                      ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title() ?></a>
                                                <a href="#" class="post-author">By <?php the_author(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                      <?php
                                            }
                                            wp_reset_query();
                                      ?>

                                    <!-- Single News Area -->
                                    <?php
                                         $local_query = new WP_Query(array(
                                            'posts_per_page' => 6,
                                            'order'=>'DESC',
                                            'category_name' => 'local', //this is the category SLUG 

                                        ));
                                        
                                            while($local_query->have_posts()){
                                                $local_query->the_post();
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                            wp_reset_query();
                                     ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4><?php echo __('Subscribe to our newsletter','newsbox')?></h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100"><?php echo __('Subscribe','newsbox')?></button>
                            </form>
                            <p class="mt-30"><?php echo __('Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.','newsbox')?></p>
                        </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="<?php echo esc_url(get_theme_mod('newsbox_all_the_news_add_link','https://rayhanrahman25.github.io/rayhan/')); ?>">
                                <?php
                                $image = get_theme_mod( 'newsbox_all_the_news_add', 'newsbox' );
                                ?>
                                <img src="<?php echo esc_url($image); ?>" alt=""> <?php // echo get_template_directory_uri()/assets/img/bg-img/add3.png?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>