<?php
/*
* Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php get_template_part("template-parts/breaking-news"); ?>
<?php get_template_part("template-parts/feature-img"); ?>
<!-- ##### Intro News Area Start ##### -->
<?php get_template_part("template-parts/intro-news"); ?>  
<!-- ##### Video Area Start ##### -->
<?php get_template_part("template-parts/video-posts"); ?>
<div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
<?php
                             $the_query = new WP_Query(array(
                                'posts_per_page' => '6',
                                'orderby'          => 'date',
                                'order'            => 'DESC',
                               ));
                               while($the_query->have_posts()){
                                   $the_query->the_post()
                            ?>
                         <div class="col-12 col-sm-6 col-md-4">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail(); ?></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                                <a href="#" class="post-author"><?php echo __('By','newsbox');?>   <?php echo  ucfirst(get_the_author()); ?></a>
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
 <?php get_footer(); ?>