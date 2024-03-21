<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Career Page
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
    
    <div class="max-w-screen-xl mx-auto px-4 py-20" data-scroll-section>
        <div class="grid grid-cols-3 gap-10 mt-10">
            
        <?php 
        
        $the_query = new WP_Query(array(
	'post_type'      	=> 'role',
    'posts_per_page'	=> 2,
	'post_status'		=> 'any',
    'orderby'        	=> 'rand',
)); ?>    
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
                <div class="flex items-center">
        <a href="./job-opening" class="bg-primary py-5 px-8 text-white hover:text-primary hover:bg-white rounded-full transition duration-1200 ease-in mt-10 inline-flex justify-between items-center">See Open Role/s <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-5">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
    </svg></a>
    </div>
        </div>
            
    </div>
    <div class=" bg-white py-20" data-scroll-section>
    <div class="max-w-screen-xl mx-auto px-4 md:text-center">    
        <h2 class="text-4xl font-bold"><?php the_field('our_values_title'); ?></h2>
        <div><?php the_field('our_values_subtitle'); ?></div>

        <?php if( have_rows('our_values_content') ): ?> 
        <?php while( have_rows('our_values_content') ): the_row(); ?>
            <div class="grid grid-cols-3 gap-10 mt-10">
                <div class="bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <h2 class="mb-3 text-2xl font-bold"><?php the_sub_field('second_title_1'); ?></h2>
                    <div class="mb-0"><?php the_sub_field('second_paragraph_1'); ?></div>
                </div>
                <div class="bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <h2 class="mb-3 text-2xl font-bold"><?php the_sub_field('second_title_2'); ?></h2>
                    <div class="mb-0"><?php the_sub_field('second_paragraph_2'); ?></div>
                </div>
                <div class="bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <h2 class="mb-3 text-2xl font-bold"><?php the_sub_field('second_title_3'); ?></h2>
                    <div class="mb-0"><?php the_sub_field('second_paragraph_3'); ?></div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>   
    </div> <!-- Our Values ENDs here -->
    </div>
    <div class="bg-red-50 px-4 py-20 md:pb-40 md:text-center" data-scroll-section>
    
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-4xl font-bold"><?php the_field('benefits_title'); ?></h2>
            <div><?php the_field('benefits_subtitle'); ?></div>

            <?php if( have_rows('benefits_content') ): ?>
            <?php while( have_rows('benefits_content') ): the_row(); ?>
                <div class="grid grid-cols-2 gap-10 mt-10 text-left">
                    <div class="bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-14 h-14">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
    </svg>

                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_1'); ?></h2>
                        <div class="mb-0"><?php the_sub_field('second_paragraph_1'); ?></div>
                    </div>
                    <div class="bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-14 h-14">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
    </svg>

                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_2'); ?></h2>
                        <div class="mb-0"><?php the_sub_field('second_paragraph_2'); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>    
        </div> <!-- Benefits Container ENDs here -->
    </div> <!-- Benefits ENDs here -->





    <div class="bg-red-100/50 px-4 py-20 md:pb-40 md:text-center" data-scroll-section>
    
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-4xl font-bold"><?php the_field('interview_title'); ?></h2>
            <div><?php the_field('interview_subtitle'); ?></div>

            <?php if( have_rows('interview_content') ): ?>
            <?php while( have_rows('interview_content') ): the_row(); ?>
                <div class="grid grid-cols-2 gap-10 mt-10 text-left bg-gray-50 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.05)] p-10 rounded-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-14 h-14">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
</svg>


                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_1'); ?></h2>
                        <div class="mb-0"><?php the_sub_field('second_paragraph_1'); ?></div>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-14 h-14">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
</svg>


                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_2'); ?></h2>
                        <div class="mb-0"><?php the_sub_field('second_paragraph_2'); ?></div>
                    </div>
                    

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-14 h-14">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
</svg>


                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_3'); ?></h2>
                        <div class="mb-0"><?php the_sub_field('second_paragraph_3'); ?></div>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-14 h-14">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
</svg>


                        <h2 class="my-3 text-2xl font-bold"><?php the_sub_field('second_title_4'); ?></h2>
                        <div class="mb-0"><?php the_sub_field('second_paragraph_4'); ?></div>
                    </div>

                </div>
            <?php endwhile; ?>
            <?php endif; ?>    
            
        </div> <!-- Benefits Container ENDs here -->
    </div> <!-- Benefits ENDs here -->

</main>





<?php
get_sidebar();
get_footer();