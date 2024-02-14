<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Dhaap Foundation Page
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

        <?php $aboutDhaapImage = get_field('about_dhaap_image');?>
        <div class="max-w-screen-xl mx-auto mb-20" data-scroll-section>
            <div class="text-centerX relative grid grid-cols-2 text-gray-700 my-20 block">
                <div class="w-full h-full bg-primary__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $aboutDhaapImage['url'];?>');"></div>
                <div class="relative w-full py-40 bg-primary/20X">
                    <div class="px-20">
                        <h3 class="font-bold text-2xl mb-3">About <?php the_title() ;?></h3>
                        <div class="text-gray-600">
                            <?php the_field('short_description');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-gray-600">
                <?php the_field('long_description');?>
            </div>
        </div>

        <div class="max-w-screen-xl mx-auto" data-scroll-section>
        <h2 class="text-2xl font-bold tracking-tight pt-12 dark:text-zinc-100">CSR Activities</h2>
        <?php if( have_rows('csr_activities') ): ?>
            <?php while( have_rows('csr_activities') ): the_row();  ?>
                <div class="grid grid-cols-4 gap-10 mt-10 text-center bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <a href="<?php echo get_site_url();?>/categorie/health" class="hover:opacity-50 transition ease duration-700">
                        <div class="mb-3"><?php $image = get_sub_field('image'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img class="object-cover w-36 h-36" src="<?php echo $image['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-xl font-bold"><?php the_sub_field('title'); ?></h2>
                    </a>
                    <a href="<?php echo get_site_url();?>/categorie/environment" class="hover:opacity-50 transition ease duration-700">
                        <div class="mb-3"><?php $image_1 = get_sub_field('image_1'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img class="object-cover w-36 h-36" src="<?php echo $image_1['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-xl font-bold"><?php the_sub_field('title_1'); ?></h2>
                    </a>
                    <a href="<?php echo get_site_url();?>/categorie/education" class="hover:opacity-50 transition ease duration-700">
                        <div class="mb-3"><?php $image_2 = get_sub_field('image_2'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img class="object-cover w-36 h-36" src="<?php echo $image_2['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-xl font-bold"><?php the_sub_field('title_2'); ?></h2>
                    </a>
                    <a href="<?php echo get_site_url();?>/categorie/poverty-alleviation" class="hover:opacity-50 transition ease duration-700">
                        <div class="mb-3"><?php $image_3 = get_sub_field('image_3'); ?> 
                            <div class="w-36 h-36 mx-auto rounded-full overflow-hidden bg-gray-100"><img class="object-cover w-36 h-36" src="<?php echo $image_3['url'];?>" /></div>
                        </div>
                        <h2 class="my-3 text-xl font-bold"><?php the_sub_field('title_3'); ?></h2>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php endif; ?> 
        </div>

        <div class="max-w-screen-xl mx-auto px-4 md:py-10" data-scroll-section>
            <h2 class="text-4xl font-bold tracking-tight pb-8 pt-12 dark:text-zinc-100 sm:text-5xl">News & Events</h2>
            <ul class="slick-three -mx-4" data-swiper-parallax="30%" data-scroll data-scroll-speed="1">
                <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <li class="px-5 mb-4 ">
                    <div class="relative overflow-hidden bg-white h-full">
                        <div class="image">
                            <figure>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('full', array('class' => 'w-full'));
                                    } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                </a>
                            </figure>
                        </div>
                        <div class="p-5 md:p-6">
                            <h5 class="mb-3 text-xl font-bold"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                            <div class="card-text text-md text-gray-500"><?php echo wp_trim_words( get_the_content(), 15, '...' );?></div>
                            <div class="text-gray-300 mt-4 flex justify-end item-center">
                                <small class="text-muted"><?php echo time_ago(); ?></small>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
        
        

	</main><!-- #main -->

    
    <?php
get_sidebar();
get_footer();