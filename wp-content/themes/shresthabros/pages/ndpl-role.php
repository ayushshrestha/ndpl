<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Role Page
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
    <div class="text-center relative" data-scroll-section>
        <div class="w-full h-full absolute left-0 top-0 bg-darkred__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $postthumbnails;?>');"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
        <div class="relative w-full py-48 bg-black/60X  ">
            <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
            </div>
        </div>
    </div>
    
    <div class="max-w-screen-xl mx-auto px-4 py-20 md:pb-40" data-scroll-section>

        <div class="grid grid-cols-3 gap-10 mt-10">
            <?php $the_query = new WP_Query('post_type=role'); ?>    
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <h2 class="mb-3 text-2xl font-bold"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_tags('<ul class="flex flex-wrap"><li class="border border-primary bg-primary/10 hover:bg-primary/5 hover:border-primary/50 duration-800 transition ease py-1 px-2 me-2 mb-2 rounded-lg text-xs text-primary-400">','</li><li class="border border-primary bg-primary/1 0 hover:bg-primary/5 hover:border-primary/50 duration-800 transition ease py-1 px-2 me-2 mb-2 rounded-lg text-xs text-primary-400">','</li></ul>'); ?>
                    <div class="mb-4"><?php echo wp_trim_words( get_the_content(), 15, '...' );?> </div>
                    <div class="flex flex-wrap items-center text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
    </svg>
    
            <?php  $terms = get_the_terms(get_the_ID(), 'location');
                if ($terms && !is_wp_error($terms)) {
                    echo '<ul class="flex flex-wrap ms-1 uppercase">';
                    foreach ($terms as $term) {
                        echo '<li class="border border-secondary bg-secondary/10 hover:bg-secondary/5 hover:border-secondary/50 duration-800 transition ease py-1 px-2 me-2 rounded-lg text-xs text-secondary-400">' . $term->name . '</li>';
                    }
                    echo '</ul>';
                }?>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>

    </div> 



</main>





<?php
get_sidebar();
get_footer();