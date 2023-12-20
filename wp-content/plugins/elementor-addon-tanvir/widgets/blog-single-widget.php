<?php
class Single_Blog_Content_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'single_blog_content';
    }

    public function get_title()
    {
        return esc_html__('Single Blog Content', 'elementor-addon');
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
        return ['Single Blog', 'Content'];
    }

    protected function register_controls()
    {
        // Define controls for the single blog post widget if needed
    }

    protected function render()
    {
        // Get the current post ID
        $post_id = get_the_ID();

        // Display the single blog post content
        if ($post_id) {
            ?>
            <!-- ***** Single Blog Area Start ***** -->
            <section id="single-blog" class="section single-blog-area ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            // Display single blog post content
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                            ?>
                                    <div class="single-blog">
                                        <div class="blog-thumb">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="meta-info d-flex justify-content-between">
                                                <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
                                                <li><?php the_time('M d, Y'); ?></li>
                                            </ul>
                                            <h1 class="blog-title my-3"><?php the_title(); ?></h1>
                                            <div class="blog-post-content">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            else :
                                echo 'No post found';
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Single Blog Area End ***** -->
            <?php
        }
    }
}
