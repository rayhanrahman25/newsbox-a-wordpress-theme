 <!-- ##### Breaking News Area Start ##### -->
 <section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6><?php echo get_theme_mod('newsbox_breaking_news',__('Trending')); ?></h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <?php
                                 $post_per_page = 4;
                                 $_p = new WP_Query(array(
                                    'posts_per_page' => 4,
                                    'category_name' => 'breaking-news', // this is the category SLUG 
                                ) );

                                 while($_p->have_posts()){
                                     $_p->the_post();
                                ?>
                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                <?php
                                }
                                wp_reset_query();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->