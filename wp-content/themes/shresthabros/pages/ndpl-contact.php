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

<main id="primary" class="mx-auto text-lg tracking-tight text-slate-700" >
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
            <div class="w-full h-full absolute left-0 top-0 bg-primary__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $postthumbnails;?>');"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
            <div class="relative w-full py-40 bg-black/60">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                    <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
                </div>
            </div>
        </div>

       <div class="max-w-screen-xl mx-auto my-20" data-scroll-section>
            <?php $the_query = new WP_Query('post_type=branch'); ?> 
                <div class="text-4xl font-bold mb-10">
                    Branch Address
                </div>
                <div class="mt-10">
                    <ul class="grid grid-cols-3 gap-10">           
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <li class="bg-gray-100 p-10">
                            <h4 class="text-2xl font-bold font-lora mb-2 flex items-center"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 me-2" fill="currentColor"><path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"></path></svg> <?php the_title(); ?></h4>
                            <div><?php echo get_the_content();?> </div>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
       </div>
        <div class="max-w-screen-xlx mx-autox my-20" data-scroll-section>
            <div class="grid grid-cols-2">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3533.0677797531466!2d85.3036235261882!3d27.684299919719223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDQxJzAzLjIiTiA4NcKwMTgnMjQuMSJF!5e0!3m2!1sen!2snp!4v1707646329576!5m2!1sen!2snp" width="100%" height="100%" style="width: 100% height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="md:mx-10 my-20">
                    <div class="text-4xl font-bold mb-10">Contact Inquiry</div>
                    <?php echo apply_shortcodes( '[contact-form-7 id="3953802" title="Contact Form"]' ); ?>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto my-20" data-scroll-section> 
            <div class="text-4xl font-bold mb-10">FAQs</div>
            <?php the_content(); ?>
        </div>

        
        
        

	</main><!-- #main -->

    
    <?php
get_sidebar();
get_footer();