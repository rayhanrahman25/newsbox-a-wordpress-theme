<?php get_header();  the_post(); ?>
<?php
     $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(<?php echo $backgroundImg[0]; ?>)">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                    <p class="tag"><span><?php if(!the_tags("", "")){ echo "NO TAG FOUND";}else{the_tags("", "");} ?></span></p>
                        <p class="post-title"><?php the_title(); ?></p>
                        <div class="d-flex align-items-center">
                            <span class="post-date mr-30"><?php echo get_the_date('F j, Y'); ?></span>
                            <span class="post-date"><?php echo __('By','newsbox');?>   <?php echo  ucfirst(get_the_author()); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <?php the_content(); ?>
                    </div>

                    <!-- Comment Area Start -->
                   

                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Leave a reply</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                          
                        <?php 
                      if(comments_open( )){
                          comments_template();
                      }
                    ?>
                   
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4><?php echo __('Subscribe to our newsletter','newsbox') ?></h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100"><?php echo __('Subscribe','newsbox') ?></button>
                            </form>
                            <p class="mt-30"><?php echo __('Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.','newsbox') ?></p>
                        </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30 ">
                        <?php
                          if(is_active_sidebar("single-page")){
                              dynamic_sidebar("single-page");
                          }
                         ?>
                        </div>

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Latest News</h4>

                            <!-- Single News Area -->
                            <?php
                             $the_query = new WP_Query(array(
                                'posts_per_page' => '5',
                                'orderby'          => 'date',
                                'order'            => 'ASC',
                               ));
                               while($the_query->have_posts()){
                                   $the_query->the_post()
                            ?>
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <?php
                              }
                              wp_reset_query();
                            ?>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                        <?php
                             $the_query = new WP_Query(array(
                                'posts_per_page' => '2',
                                'orderby'          => 'rand',
                                'order'            => 'ASC',
                               ));
                               while($the_query->have_posts()){
                                   $the_query->the_post()
                            ?>
                            <div class="single-blog-post style-2 mb-5">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                    <a href="#" class="post-author"><?php echo __('By','newsbox');?>   <?php echo  ucfirst(get_the_author()); ?></a>
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
    </section>
    <!-- ##### Post Details Area End ##### -->
<?php get_footer(); ?>