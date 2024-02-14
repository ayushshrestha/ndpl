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
            <div class="w-full h-full absolute left-0 top-0 bg-primary__gtbefore bg-no-repeat bg-center bg-cover bg-fixed"  style="background-image:url('<?php echo $postthumbnails;?>');"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
            <div class="relative w-full py-40 bg-black/60">
                <div class="max-w-screen-xl mx-auto px-4 text-white" data-swiper-parallax="30%" data-scroll>
                    <?php the_title( '<h3 class="font-bold text-3xl">', '</h3>' ); ?>
                </div>
            </div>
        </div>

       <div class="my-20" data-scroll-section>
            <?php $the_query = new WP_Query('post_type=our-brands'); ?> 
                <div class="mt-10">
                    <ul class="">           
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <li class="bg-gray-100 p-10 grid grid-cols-2 mb-10">
                            <div>
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('full', array('class' => 'w-full'));
                                } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>
                            </div>
                            <div class="flex items-center h-full px-20">
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
                                    <h6 class="font-lora mb-2"><?php the_field('shop_url'); ?></h6>
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