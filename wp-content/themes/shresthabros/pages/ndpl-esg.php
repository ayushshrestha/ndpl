<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL ESG Commitments Page
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

        <div class="bg-red-100/50 px-4 py-20 text-center" data-scroll-section>
    
            <div class="max-w-screen-xl mx-auto">
                <h2 class="text-4xl font-bold">Our Values</h2>

                <?php if( have_rows('our_values_content') ): ?>
                <?php while( have_rows('our_values_content') ): the_row(); ?>
                    <div class="grid md:grid-cols-3 gap-10 mt-10 mb-20 block text-left bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
    </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_1'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_1'); ?></div>
                        </div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_2'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_2'); ?></div>
                        </div>
                        

                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_3'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_3'); ?></div>
                        </div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_4'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_4'); ?></div>
                        </div>


                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_5'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_5'); ?></div>
                        </div>


                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_6'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_6'); ?></div>
                        </div>


                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_7'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_7'); ?></div>
                        </div>

                    </div>
                <?php endwhile; ?>
                <?php endif; ?>  
                
                <h2 class="text-4xl font-bold">Our Benefits</h2>
                
                <?php if( have_rows('our_benefits_content') ): ?>
                <?php while( have_rows('our_benefits_content') ): the_row(); ?>
                    <div class="grid md:grid-cols-2 gap-10 mt-10 mb-20 block text-left bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
    </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_1'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_1'); ?></div>
                        </div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_2'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_2'); ?></div>
                        </div>
                        

                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_3'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_3'); ?></div>
                        </div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_4'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_4'); ?></div>
                        </div>


                    </div>
                <?php endwhile; ?>
                <?php endif; ?>  

                 
                <h2 class="text-4xl font-bold">Interview Process</h2>
                
                <?php if( have_rows('interview_process_content') ): ?>
                <?php while( have_rows('interview_process_content') ): the_row(); ?>
                    <div class="grid md:grid-cols-2 gap-10 mt-10 mb-20 block text-left bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
    </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_1'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_1'); ?></div>
                        </div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_2'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_2'); ?></div>
                        </div>
                        

                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_3'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_3'); ?></div>
                        </div>
                        <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
        </svg>


                            <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_4'); ?></h2>
                            <div class="mb-0"><?php the_sub_field('second_paragraph_4'); ?></div>
                        </div>


                    </div>
                <?php endwhile; ?>
                <?php endif; ?>  
            </div> <!-- Benefits Container ENDs here -->
        </div> <!-- Benefits ENDs here -->


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