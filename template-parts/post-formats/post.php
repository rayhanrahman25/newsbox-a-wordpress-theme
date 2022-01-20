<div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="<?php the_permalink(); ?>"><img src="<?php  the_post_thumbnail();?></a>
                        </div>

                        <!-- Blog Content -->
                        <?php get_template_part('template-parts/common/blog-content'); ?>
                    </div>
</div>