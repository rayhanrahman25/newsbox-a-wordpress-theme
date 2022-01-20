<?php
$philosophy_fp = new WP_Query(
    array(
        'meta_key'       => 'featured',
        'meta_value'     => '1',
        'posts_per_page' => 3
    )
);

$post_data = array();
while ( $philosophy_fp->have_posts() ) {
    $philosophy_fp->the_post();
    $categories = get_the_category();
    $category = $categories[mt_rand(0,count($categories)-1)];
    $post_data[] = array(
        "title" => get_the_title(),
        "permalink"=>get_permalink(),
        "date"=>get_the_date(),
        "thumbnail"=>get_the_post_thumbnail_url(),
        "author"=>get_the_author_meta("display_name"),
        "author_url"=>get_author_posts_url(get_the_author_meta("ID")),
        'author_avatar'=>get_avatar_url(get_the_author_meta("ID")),
        'cat'=>$category->name,
        'catlink'=>get_category_link($category)
    );
}
if ( $philosophy_fp->post_count > 1 ):
    ?>
     <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="<?php echo esc_url($post_data[0]['permalink']) ?>"><img src="<?php echo esc_url($post_data[0]['thumbnail']) ?>" alt=""></a><?php // echo get_template_directory_uri()/assets/img//bg-img/1.jpg?>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo esc_html($post_data[0]['date']); ?></span>
                                    <a href="<?php echo esc_url($post_data[0]['permalink']) ?>" class="post-title"><?php echo esc_html($post_data[0]['title']); ?></a>
                                </div>
                            </div>
                 </div>
                 <div class="col-12 col-md-6" >
                           <?php
                            for($i=1; $i<3; $i++):
                            ?>
                              <div class="single-blog-post style-1 mb-30" style="height: 15rem;" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="<?php echo esc_url($post_data[$i]['permalink']) ?>"><img  src="<?php echo esc_url($post_data[$i]['thumbnail']) ?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo esc_html($post_data[$i]['date']); ?></span>
                                    <a href="<?php echo esc_url($post_data[$i]['permalink']) ?>" class="post-title"><?php echo esc_html($post_data[$i]['title']); ?></a>
                                </div>
                            </div>
                            <?php
                             endfor;
                            ?>
                 </div>
            </div> 
        </div> 
    </div> 
</div>
</div>
<?php
endif;