<?php
class Blog_content_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'blog_content';
    }

    public function get_title()
    {
        return esc_html__('Blog Content', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['custom-theme-agency'];
    }

    public function get_keywords()
    {
        return ['Blog', 'Content'];
    }




    protected function register_controls()
    {
    }

    protected function render()
    {



?>







        <!-- ***** Blog Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="container">
                <div class="row">




                    <?php
                    // Query the latest blog posts
                    $args = array(
                        'post_type'      => 'post', // You can change this to a custom post type if needed
                        'posts_per_page' => 4,      // Number of posts to display
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="col-12 col-md-6">
                                <div class="single-blog res-margin">
                                    <div class="blog-thumb">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"></a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="meta-info d-flex justify-content-between">
                                            <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_time('M d, Y'); ?></a></li>
                                        </ul>
                                        <h3 class="blog-title my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="blog-btn mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'No posts found';
                    endif;
                    ?>


                </div>
                <div class="row fo">
                    <div class="col-12">

                        <ul class="pagination justify-content-center">
                            <li class="disabled px-1">
                                <a href="#" aria-label="Previous">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </li>
                            <li class="px-1"><a href="#">1</a></li>
                            <li class="active px-1"><a href="#">2</a></li>
                            <li class="px-1"><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Blog Area End ***** -->





<?php
    }
}
