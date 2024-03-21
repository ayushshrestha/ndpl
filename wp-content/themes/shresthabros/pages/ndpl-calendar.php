<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Calendar Page
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
            <div class="w-full h-full absolute left-0 top-0 bg-darkred__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $postthumbnails;?>');"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
            <div class="relative w-full py-40 bg-black/60X  ">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                    <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
                </div>
            </div>
        </div>

       <div class="my-20 max-w-screen-xl mx-auto" data-scroll-section>
            
        <div class="pb-20">
            <?php the_content();?>
        </div>

            <?php $the_query = new WP_Query('post_type=event-calendar'); ?> 
                <div class="mt-10">
                    <ul class="grid grid-cols-3 gap-5 mb-10">           
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <li>
                            <div class="bg-gray-100">
                                <div>
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('full', array('class' => 'w-full'));
                                    } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                </div>
                                <div class="p-5">
                                    <div>
                                        
                                        <h5 class="bg-white hover:bg-white/30 text-primary border-solid border border-primary transition ease duration-300 font-medium me-2 px-2.5 py-0.5 rounded inline-block mb-2">No. of Holidays: <?php the_field( 'day' ); ?> Day</h5>
                                        <h4 class="text-2xl font-bold font-lora mb-2"><?php the_title(); ?></h4>
                                        <div class="mb-0 flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 11H8V13H6V11ZM6 15H8V17H6V15ZM10 11H18V13H10V11ZM10 15H15V17H10V15Z"></path></svg>
                                        <div> <?php echo get_the_content();?></div>
                                         </div>
                                        <div class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M9.55 11.5C8.30736 11.5 7.3 10.4926 7.3 9.25C7.3 8.00736 8.30736 7 9.55 7C10.7926 7 11.8 8.00736 11.8 9.25C11.8 10.4926 10.7926 11.5 9.55 11.5ZM10 19.748V16.4C10 15.9116 10.1442 15.4627 10.4041 15.0624C10.1087 15.0213 9.80681 15 9.5 15C7.93201 15 6.49369 15.5552 5.37091 16.4797C6.44909 18.0721 8.08593 19.2553 10 19.748ZM4.45286 14.66C5.86432 13.6168 7.61013 13 9.5 13C10.5435 13 11.5431 13.188 12.4667 13.5321C13.3447 13.1888 14.3924 13 15.5 13C17.1597 13 18.6849 13.4239 19.706 14.1563C19.8976 13.4703 20 12.7471 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 12.9325 4.15956 13.8278 4.45286 14.66ZM18.8794 16.0859C18.4862 15.5526 17.1708 15 15.5 15C13.4939 15 12 15.7967 12 16.4V20C14.9255 20 17.4843 18.4296 18.8794 16.0859ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM15.5 12.5C14.3954 12.5 13.5 11.6046 13.5 10.5C13.5 9.39543 14.3954 8.5 15.5 8.5C16.6046 8.5 17.5 9.39543 17.5 10.5C17.5 11.6046 16.6046 12.5 15.5 12.5Z"></path></svg> <div>Applicable for: 
                                            <?php the_field( 'applicable_for' ); ?>
                                        </div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
       </div>

        
        
        

	</main><!-- #main -->

    
    <?php
get_sidebar();
get_footer();