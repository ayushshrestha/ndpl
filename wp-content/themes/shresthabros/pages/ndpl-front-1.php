<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Front Page Template 2
 * 
 * @package shresthabros
 */

 get_header();
?>

<main id="primary" class="mx-auto text-lg tracking-tight text-slate-700" >
        <?php if( have_rows('hero_banner') ): ?>
        <?php while( have_rows('hero_banner') ): the_row(); $heroBannerImage = get_sub_field('hero_banner_image');?>
            <div class="hero_banner hero_banner--red-transparent relative flex items-center" style="background:url('<?php echo $heroBannerImage['url'];?>') no-repeat center center; background-size:cover; background-attachment: fixed;">
                <?php if( have_rows('hero_banner_caption') ): ?>
                    <div class="absolute w-full">
                        <div class="max-w-screen-xl mx-auto px-4" data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">
                        <?php while( have_rows('hero_banner_caption') ): the_row(); ?>
                            <div class="lg:w-2/3 space-y-5 relative flex flex-col">
                                <h3 class="text-md md:text-2xl text-white font-lora font-bold mb-3"><?php the_sub_field('hero_banner_title_small'); ?></h3>
                                <h2 class="mb-4 md:mb-3 text-2xl md:text-3xl lg:text-5xl text-white font-bold tracking-[-0.04em] leading-[1.8rem] lg:leading-[3.5rem]"><?php the_sub_field('hero_banner_title_large'); ?></h2>
                                <p class="text-white text-xl"><?php the_sub_field('hero_banner_paragraph'); ?></p>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('aboutus_banner') ): ?>
        <?php while( have_rows('aboutus_banner') ): the_row(); $aboutusBannerImage = get_sub_field('aboutus_banner_image');?>
            <div class="py-10 aboutus_banner aboutus_banner--red-transparent relative flex items-center" style="background:url('<?php echo $aboutusBannerImage['url'];?>') no-repeat center center; background-size:cover;">
                <?php if( have_rows('aboutus_banner_caption') ): ?>
                <?php while( have_rows('aboutus_banner_caption') ): the_row(); ?>
                <div class="max-w-screen-xl mx-auto px-4" data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">
                    <div class="lg:w-2/3 space-y-5 md:pe-32 relative flex flex-col">
                        <h2 class="mb-3 md:mb-8 text-3xl font-bold tracking-[-0.04em] text-white sm:text-5xl"><?php the_sub_field('aboutus_banner_title_large'); ?></h2>
                        <h3 class="text-xl md:text-3xl text-white font-bold sm:leading-[2.5rem]"><?php the_sub_field('aboutus_banner_title_small'); ?></h3>
                        <div class="text-gray-300"><?php the_sub_field('aboutus_banner_paragraph'); ?></div>
                        <a href="" class="text-white hover:text-primary text-sm tracking-[0.1em] inline-block">KNOW MORE NDPL </a>
                        <button
                            type="button"
                            class="inline-block transition duration-150 ease-in-out icon-video-play "
                            data-te-toggle="modal"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            onclick="openModal('modal-aboutus')"
                            >
                        </button>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="px-4 sm:px-6 md:max-w-8xl md:px-4 lg:px-12 relative overflow-hidden bg-primary bg-primary--before">
            <div class="md:py-10 max-w-screen-xl mx-auto px-4">
                <h2 class="text-4xl font-bold tracking-tight pb-8 pt-12 text-white sm:text-5xl z-10 relative">Our Products</h2>
                <ul class="slick-three slick-two--arrow -mx-4 pb-10 mb-10" data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">                
                    <?php $the_query = new WP_Query('post_type=our-brands'); ?>                        
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <li class="px-5 mb-4">
                        <div class="relative overflow-hidden bg-white">
                            <div class="image image-1by1 grayscaleX hover:grayscale-0X ease-in duration-300">
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
                            <div class="p-6 absolute z-10 bottom-0">
                                <h5 class="text-white text-md"><?php the_field('year'); ?></h5>
                                <h4 class="text-white text-2xl font-bold font-lora"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>

        <?php if( have_rows('apply_dealerships') ): ?>
        <?php while( have_rows('apply_dealerships') ): the_row(); $applyDealershipsBannerImage = get_sub_field('apply_dealership_background_image');?>
        <div class="text-center relative" style="background:url('<?php echo $applyDealershipsBannerImage['url'];?>') no-repeat center center; background-size:cover;">
            <div class="w-full py-20 md:py-40 bg-black/60">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">
                    <h2 class="mb-3 text-4xl font-bold tracking-[-0.04em] sm:leading-[3.5rem]"><?php the_sub_field('apply_dealership_title'); ?></h2>
                    <h3 class="mb-8 text-xl"><?php the_sub_field('apply_dealership_paragraph'); ?></h3>
                    <a href="" title="Domestic" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-4 px-8 border border-primary hover:border-transparent rounded transition">Domestic</a>
                    <a href="" title="International" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-4 px-8 border border-primary hover:border-transparent rounded transition">International</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        

        <?php if( have_rows('message_from_chairman') ): ?>
        <?php while( have_rows('message_from_chairman') ): the_row(); $chairman_photoImage = get_sub_field('chairman_photo');?>
        <div class=" bg-white">
            <div class="relative max-w-screen-md mx-auto px-4 py-20 md:pb-40 md:space-y-10">
                <h2 class="mb-3 text-3xl font-bold tracking-[-0.04em] sm:text-5xl sm:leading-[3.5rem] text-center">
                    <?php the_sub_field('message_from_chairman_title'); ?>
                </h2>
                <figure class="md:flex space-y-5 md:space-y-0 md:space-x-8">
                    <img class="w-60 h-60 rounded-full mx-auto" src="<?php echo $chairman_photoImage['url'];?>" alt="" width="384" height="512"  data-aos="fade-right" data-aos-anchor-placement="top" data-aos-duration="1000">
                    <div class="md:px-8 space-y-5 text-center md:text-left" data-aos="fade-left" data-aos-anchor-placement="top" data-aos-duration="1000">
                        <blockquote>
                            <div class="text-lg">
                                <?php the_sub_field('message_from_chariman_words'); ?>
                            </div>
                        </blockquote>
                        <figcaption>
                            <div class="tracking-[0.2em]">
                                <?php the_sub_field('chairman_name'); ?>
                            </div>
                            <div class="tracking-[0.1em] text-sm text-gray-400">
                                <?php the_sub_field('chairman_full_role'); ?>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('our_team') ): ?>
        <?php while( have_rows('our_team') ): the_row(); 
            $our_team_images = get_sub_field('our_team_images');
            $our_team_images_two = get_sub_field('our_team_images_two');
            $our_team_images_three = get_sub_field('our_team_images_three');
            ?>
        <div class="relative ">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <ul class="slick-one" data-aos="fade-right" data-aos-anchor-placement="top" data-aos-duration="1000">
                    <li>
                        <figure>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo $our_team_images['url'];?>" alt="">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo $our_team_images_two['url'];?>" alt="">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo $our_team_images_three['url'];?>" alt="">
                            </a>
                        </figure>
                    </li>
                </ul>
                
                <div class="p-5 md:px-10 lg:px-20" data-aos="fade-left" data-aos-anchor-placement="top" data-aos-duration="1000">                        
                    <h2 class="mb-1 md:mb-3 text-2xl font-bold tracking-[-0.04em] sm:text-5xl sm:leading-[3.5rem]">
                        <?php the_sub_field('our_team_title'); ?>
                    </h2>
                    <div class="text-lg mb-10 lg:my-10">
                        <?php the_sub_field('our_team_paragraph'); ?>
                    </div>
                    <a href="" title="Meet our Team" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-4 px-8 border border-primary hover:border-transparent rounded transition">Meet our Team</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


        <div class="px-4 sm:px-6 md:max-w-8xl md:px-4 lg:px-12 ">
            <div class="md:py-10">
                <h2 class="text-4xl font-bold tracking-tight pb-8 pt-12 dark:text-zinc-100 sm:text-5xl">News & Events</h2>
                <ul class="slick-three -mx-4">
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
                            <div class="p-5 md:p-8">
                                <h5 class="mb-3 text-xl font-bold"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                                <div class="card-text text-md text-gray-500"><?php echo wp_trim_words( get_the_content(), 20, '...' );?></div>
                                <div class="text-gray-300 mt-4 flex justify-end item-center">
                                    <small class="text-muted"><?php echo time_ago(); ?></small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>

        
        <?php if( have_rows('careers') ): ?>
        <?php while( have_rows('careers') ): the_row(); $applyCareersBannerImage = get_sub_field('apply_careers_background_image');?>
        <div class="text-center relative md:mt-10" style="background:url('<?php echo $applyCareersBannerImage['url'];?>') no-repeat center center; background-size:cover;">
            <div class="w-full py-20 bg-black/60">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">
                    <h2 class="mb-3 text-4xl font-bold tracking-[-0.04em] sm:leading-[3.5rem]"><?php the_sub_field('apply_careers_title'); ?></h2>
                    <h3 class="mb-8 text-xl"><?php the_sub_field('apply_careers_paragraph'); ?></h3>
                    <a href="" title="Email us" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-4 px-8 border border-primary hover:border-transparent rounded transition">Email us</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

	</main><!-- #main -->

    <?php if( have_rows('aboutus_banner') ): ?>
    <?php while( have_rows('aboutus_banner') ): the_row();?>
    <!-- Modal -->
    <div class="relative hidden z-10 transition-all duration-300 ease-in-out " aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal-aboutus" >
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity transition-all duration-300 ease-in-out "></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full justify-center p-4 text-center items-center">
                <div class="relative transform shadow-xl transition-all sm:my-8 w-full sm:max-w-screen-2xl">
                    <button 
                        onclick="closeModal('modal-aboutus')"
                        class="absolute -top-5 -right-5 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 z-10 rounded-full focus:outline-none text-white"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="nx rz"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <div class="bg-white">
                        <div class="embed-container">
                            <?php

                                // Load value.
                                $iframe = the_sub_field('aboutus_video_url');

                                // Use preg_match to find iframe src.
                                preg_match('/src="(.+?)"/', $iframe, $matches);
                                $src = $matches[1];

                                // Add extra parameters to src and replace HTML.
                                $params = array(
                                    'controls'  => 0,
                                    'hd'        => 1,
                                    'autohide'  => 1
                                );
                                $new_src = add_query_arg($params, $src);
                                $iframe = str_replace($src, $new_src, $iframe);

                                // Add extra attributes to iframe HTML.
                                $attributes = 'frameborder="0"';
                                $iframe = str_replace('></iframe>', '' . $attributes . '></iframe>', $iframe);

                                // Display customized HTML.
                                echo $iframe;
                            ?>
                        </div>
                    </div>

                    <style>
                        .embed-container { 
                            position: relative; 
                            padding-bottom: 56.25%;
                            overflow: hidden;
                            max-width: 100%;
                            height: auto;
                        } 

                        .embed-container iframe,
                        .embed-container object,
                        .embed-container embed { 
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    
    
    <?php
get_sidebar();
get_footer();