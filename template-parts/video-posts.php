<?php
 $video =  get_field('video_link');

?>
<section class="video-area bg-img bg-overlay bg-fixed" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/bg-img/10.jpg');">  
        <div class="container">
            <div class="row">
                <!-- Featured Video Area -->
                <?php
                   $local_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'terms' => array( 'post-format-video' )
                            )
                        )
                ) );


                  while($local_query->have_posts()){
                   
                      $local_query->the_post();
                  
                ?>
                <div class="col-12">
                    <div class="featured-video-area d-flex align-items-center justify-content-center">
                        <div class="video-content text-center">
                            <a href="<?php  echo esc_url($video); ?>" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <span class="published-date"><?php echo get_the_date(); ?></span>
                           <a href="<?php the_permalink(); ?>"><h3 class="video-title"><?php the_title(); ?></h3></a> 
                        </div>
                    </div>
                </div>
                <?php
                   }
                   wp_reset_query();
                ?>
            </div>
        </div>

        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Video Slides -->
                        <div class="video-slides owl-carousel">
                            <?php
                            
                                $local_query = new WP_Query(array(
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'post_format',
                                            'terms' => array( 'post-format-video' )
                                            )
                                        )
                                ) );
                                  while($local_query->have_posts()){
                                  $local_query->the_post();
                            ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?>" alt=""></a>
                                    <a href="<?php  echo esc_url($video); ?>" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                  <a href="<?php the_permalink() ?>"><p class="post-title"><?php the_title(); ?></p></a>  
                                    <a href="#" class="post-author"><?php echo __('By','newsbox') ?> <?php the_author(); ?></a>
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