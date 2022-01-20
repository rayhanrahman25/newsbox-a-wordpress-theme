
<?php get_header(); ?>
 
    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row" id="post-container">
            <?php
            while(have_posts()){
                the_post();
                get_template_part("template-parts/post-formats/post",get_post_format());
            }
            ?>    
                <div class="col-12">
                <p class="text-center pt-5 font-weight-bold text-danger"><?php	posts_nav_link() ?> </p>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->

    

   <?php get_footer(); ?>