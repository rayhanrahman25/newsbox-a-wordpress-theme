<div class="blog-content" ">
                            <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                            <a href="#" class="post-author"><?php echo __('By','newsbox') ?>  <?php echo  ucfirst(get_the_author()); ?></a>
 </div>