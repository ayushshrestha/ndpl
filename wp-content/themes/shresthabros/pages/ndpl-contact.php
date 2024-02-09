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

       

        <div class="max-w-screen-xl mx-auto" data-scroll-section>
        <?php if( have_rows('csr_activities') ): ?>
            <?php while( have_rows('csr_activities') ): the_row();  ?>
                <div class="grid grid-cols-4 gap-10 mt-10 text-center bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <div>
                        <div class="mb-3"><?php $image = get_sub_field('image'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img src="<?php echo $image['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('title'); ?></h2>
                    </div>
                    <div>
                        <div class="mb-3"><?php $image_1 = get_sub_field('image_1'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img src="<?php echo $image_1['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('title_1'); ?></h2>
                    </div>
                    <div>
                        <div class="mb-3"><?php $image_2 = get_sub_field('image_2'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img src="<?php echo $image_2['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('title_2'); ?></h2>
                    </div>
                    <div>
                        <div class="mb-3"><?php $image_3 = get_sub_field('image_3'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img src="<?php echo $image_3['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('title_3'); ?></h2>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?> 
        </div>

        
        
        

	</main><!-- #main -->

    
    <?php
get_sidebar();
get_footer();