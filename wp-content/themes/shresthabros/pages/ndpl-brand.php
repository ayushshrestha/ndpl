<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Brand Page
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
            <div class="relative w-full py-40 bg-black/60">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                    <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
                </div>
            </div>
        </div>

       <div class="md:my-20" data-scroll-section>
            <?php $the_query = new WP_Query('post_type=our-brands'); ?> 
                <div class="md:mt-10">
                    <ul class="">           
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <li class="bg-gray-100 p-4 md:p-10 grid md:grid-cols-2 mb-5 md:mb-10">
                            <div>
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('full', array('class' => 'w-full'));
                                } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>
                            </div>
                            <div class="flex items-center h-full md:px-20">
                                <div>
                                    <h5 class="text-md text-gray-400 mb-2">Year: <?php the_field('year'); ?></h5>
                                    <h4 class="text-2xl font-bold font-lora mb-2"><?php the_title(); ?></h4>
                                    <div><?php echo get_the_content();?> </div>
                                    <?php $volume = get_field( 'volume' );
                                    if( $volume ): ?>
                                    <div class="flex items-center pt-3 pb-10">
                                        <?php foreach($volume as $vol){ ?>
                                        <div class="bg-white/20x hover:bg-white/30 border-solid border border-white transition ease duration-300 font-medium me-2 px-2.5 py-0.5 rounded"><?php echo $vol;?></div>
                                        <?php }?>
                                    </div>
                                    <?php endif; ?>
                                    <h6 class="font-lora mb-2 flex gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M13.0607 8.11097L14.4749 9.52518C17.2086 12.2589 17.2086 16.691 14.4749 19.4247L14.1214 19.7782C11.3877 22.5119 6.95555 22.5119 4.22188 19.7782C1.48821 17.0446 1.48821 12.6124 4.22188 9.87874L5.6361 11.293C3.68348 13.2456 3.68348 16.4114 5.6361 18.364C7.58872 20.3166 10.7545 20.3166 12.7072 18.364L13.0607 18.0105C15.0133 16.0578 15.0133 12.892 13.0607 10.9394L11.6465 9.52518L13.0607 8.11097ZM19.7782 14.1214L18.364 12.7072C20.3166 10.7545 20.3166 7.58872 18.364 5.6361C16.4114 3.68348 13.2456 3.68348 11.293 5.6361L10.9394 5.98965C8.98678 7.94227 8.98678 11.1081 10.9394 13.0607L12.3536 14.4749L10.9394 15.8891L9.52518 14.4749C6.79151 11.7413 6.79151 7.30911 9.52518 4.57544L9.87874 4.22188C12.6124 1.48821 17.0446 1.48821 19.7782 4.22188C22.5119 6.95555 22.5119 11.3877 19.7782 14.1214Z"></path></svg>
                                    <a class="text-primary hover:text-secondary underline transition duration-700 ease-in-out hover:no-underline" href="<?php the_field('shop_url'); ?>" title="<?php the_title(); ?>"><?php the_field('shop_url'); ?></a></h6>
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