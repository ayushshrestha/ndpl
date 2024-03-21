<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Contact Page
 * 
 * @package shresthabros
 */

 get_header();
?>

<main id="primary" class="mx-auto text-lg tracking-tight" >
        <?php 

        // If we have a featured image, it will be used as background image using the same logic you already used, but we put the src value in a specific variable: $imageUrl
        if ( has_post_thumbnail( $post->ID ) ) :
            $postthumbnails = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            $postthumbnails = $postthumbnails[0];
        // if not, we define $imageUrl with our default image src value
        else:
            $postthumbnails = get_template_directory_uri() . '/images/default-image-large.jpg';
        endif;

        ?>
        <div class="text-center relative" data-scroll-section>
            <div class="w-full h-full absolute left-0 top-0 bg-darkred__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $postthumbnails;?>');"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
            <div class="relative w-full py-48 bg-black/60X  ">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                    <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
                </div>
            </div>
        </div>

       <div class="max-w-screen-xl mx-auto my-20 text-slate-700" data-scroll-section>
            <div class="mx-5 xl:mx-0">
                <div class="text-4xl font-lora font-bold mb-5">
                    <?php bloginfo( 'name' ); ?>
                </div>
                <div class="">
                    
                    <?php if( have_rows('contact_information') ): ?>
                    <?php while( have_rows('contact_information') ): the_row(); ?>
                        
                    Address: <?php the_sub_field('addresss'); ?><br />
                    Email: <?php the_sub_field('email'); ?><br />
                    Phone: <?php the_sub_field('phone'); ?>   <br />
                    Fax: <?php the_sub_field('fax'); ?> 
                    
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
       </div>
        <div class="max-w-screen-xl mx-auto my-20" data-scroll-section>
            <div class="grid md:grid-cols-4 gap-5 md:gap-10 mx-5 xl:mx-0 my-20">
                <div class="col-span-2">
                    <div class="text-3xl font-bold mb-10">Contact Inquiry</div>
                    <?php echo apply_shortcodes( '[contact-form-7 id="3953802" title="Contact Form"]' ); ?>
                </div>
                <div>
                    <div class="text-xl font-bold">Department Queries</div>
                    <div class="border border-gray-200 border-solid p-5 mt-3 rounded-md">
                    If you are interested in Wholesale please email us info@ndpl.com.np
                    </div>
                </div>
                <div>
                    <div class="text-xl font-bold">Have a Questions?</div>
                    <div class="border border-gray-200 border-solid p-5 mt-3 rounded-md">
                        Link to some useful pages that your customers might want to know about.
                        <?php
                            $wpHaveQuestionsNavMenu = array(
                                'container'     => '',
                                'theme_location'=> 'have-questions',
                                'items_wrap'        => '<ul class="pt-5">%3$s</ul>',
                                'depth'         => 1,
                                'fallback_cb'   => false,
                                'add_li_class'  => 'transition text-primary hover:text-gray-300 text-sm'
                                );
                            wp_nav_menu($wpHaveQuestionsNavMenu); ?>
                    </div>
                </div>
            </div>
        </div>

        <div data-scroll-section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3533.0677797531466!2d85.3036235261882!3d27.684299919719223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDQxJzAzLjIiTiA4NcKwMTgnMjQuMSJF!5e0!3m2!1sen!2snp!4v1707646329576!5m2!1sen!2snp" width="100%" style="width: 100%; height: 450px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="max-w-screen-xl mx-auto my-20" data-scroll-section> 
            <div class="mx-5 xl:mx-0">
                <div class="text-4xl font-bold mb-10">FAQs</div>
                <?php the_content(); ?>
            </div>
        </div>

        
        
        

	</main><!-- #main -->

    
    <?php
get_sidebar();
get_footer();