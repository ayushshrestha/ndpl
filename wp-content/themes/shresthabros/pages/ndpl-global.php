<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Global Presence Page
 * 
 * @package shresthabros
 */

 get_header();
?>

<main id="primary">

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
    <div class="text-center relative hidden" data-scroll-section>
        <div class="w-full h-full absolute left-0 top-0 bg-darkred__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $postthumbnails;?>');"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
        <div class="relative w-full py-48 bg-black/60X  ">
            <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
            </div>
        </div>
    </div>

    
            <div class="hero_banner relative flex items-end pb-32" data-scroll-section>
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
                <div class="w-full h-full absolute left-0 top-0 bg-darkred__gtbefore"  style="background:url('<?php echo $postthumbnails;?>') no-repeat center center; background-size:cover; background-attachment: fixed;"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>

                    <div class="absolute w-full">
                        <div class="max-w-screen-xl mx-auto px-4" data-swiper-parallax="20%" data-scroll data-scroll-speed="3">
                        
                            <div class="lg:w-2/3 md:space-y-5x relative flex flex-col text-white">
                                <h3 class="text-md md:text-2xl text-white font-lora font-bold mb-2 md:mb-3"><?php the_title(); ?></h3>
                                <div class="flex">
                                    <a href="/career/job-opening" class="hover:text-secondary transition duration-300 ease flex gap-3">Apply Now
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
    </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    
    <div class="max-w-screen-xl mx-auto px-4 py-20" data-scroll-section>
        <div><?php the_content(); ?></div>
    </div> <!-- Benefits ENDs here -->

</main>





<?php
get_sidebar();
get_footer();