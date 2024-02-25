<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: NDPL Front Page
 * 
 * @package shresthabros
 */

 get_header();
?>

<main id="primary" class="mx-auto text-lg tracking-tight text-slate-700" >
        <?php if( have_rows('hero_banner') ): ?>
        <?php while( have_rows('hero_banner') ): the_row(); $heroBannerImage = get_sub_field('hero_banner_image');?>
            <div class="hero_banner relative flex items-end pb-32" data-scroll-section>
                <div class="w-full h-full absolute left-0 top-0 bg-darkred__gtbefore"  style="background:url('<?php echo $heroBannerImage['url'];?>') no-repeat center center; background-size:cover; background-attachment: fixed;"  data-swiper-parallax="30%" data-scroll data-scroll-offset="100%, 0%"></div>
                <?php if( have_rows('hero_banner_caption') ): ?>
                    <div class="absolute w-full">
                        <div class="max-w-screen-xl mx-auto px-4" data-swiper-parallax="20%" data-scroll data-scroll-speed="3">
                        <?php while( have_rows('hero_banner_caption') ): the_row(); ?>
                            <div class="lg:w-2/3 md:space-y-5 relative flex flex-col text-white">
                                <h3 class="text-md md:text-2xl text-white font-lora font-bold mb-2 md:mb-3"><?php the_sub_field('hero_banner_title_small'); ?></h3>
                                <h2 class="mb-4 md:mb-3 text-2xl md:text-3xl lg:text-5xl text-white font-bold tracking-[-0.04em] leading-[1.8rem] lg:leading-[3.5rem]"><?php the_sub_field('hero_banner_title_large'); ?></h2>
                                <p class="text-white text-base"><?php the_sub_field('hero_banner_paragraph'); ?></p>
                                <div class="flex">
                                    <a href="/about-us/" class="hover:text-secondary transition duration-300 ease">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
    </svg></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <div class="scroll-down hidden">
                            <span class="scroll-down_btn">
                                <span class="scroll-down_down"></span>
                            </span>
                            <span>Scroll Down</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>



<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
    </div>
</div>


        <?php if( have_rows('aboutus_banner') ): ?>
        <?php while( have_rows('aboutus_banner') ): the_row(); $aboutusBannerImage = get_sub_field('aboutus_banner_image');?>
            <div class="py-10 aboutus_banner aboutus_banner--red-transparent relative flex items-center hidden" style="background:url('<?php echo $aboutusBannerImage['url'];?>') no-repeat center center; background-size:cover;" data-scroll-section>
                <?php if( have_rows('aboutus_banner_caption') ): ?>
                <?php while( have_rows('aboutus_banner_caption') ): the_row(); ?>
                <div class="max-w-screen-xl mx-auto px-4" data-scroll data-scroll-speed="2">
                    <div class="lg:w-2/3 space-y-5 md:pe-32 relative flex flex-col">
                        <h2 class="mb-3 md:mb-8 text-3xl font-bold tracking-[-0.04em] text-white sm:text-5xl"><?php the_sub_field('aboutus_banner_title_large'); ?></h2>
                        <h3 class="text-xl md:text-3xl text-white font-bold sm:leading-[2.5rem]"><?php the_sub_field('aboutus_banner_title_small'); ?></h3>
                        <div class="text-gray-300"><?php the_sub_field('aboutus_banner_paragraph'); ?></div>
                        <a href="" class="text-white hover:text-primary text-sm tracking-[0.1em] inline-block">KNOW MORE NDPL </a>
                        <button
                            type="button"
                            class="inline-block transition duration-150 ease-in-out icon-video-play hidden"
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

        <?php if( have_rows('ourvalues_banner') ): ?>
        <?php while( have_rows('ourvalues_banner') ): the_row(); $ourvaluesBannerImage = get_sub_field('ourvalues_banner_image');?>
            <div class="ourvalues_banner relative overflow-hidden" data-scroll-section>
                <div class="w-full h-full absolute left-0 top-0"  style="background:url('<?php echo $ourvaluesBannerImage['url'];?>') no-repeat center center; background-size:cover;"  data-swiper-parallax="20%" data-scroll data-scroll-speed="-3"></div>
                <div class="pt-20 relative z-10 bg-white/95 w-full h-full">
                    <div class="max-w-screen-xl mx-auto px-4 pb-20 text-center">
                    <?php if( have_rows('ourvalues_banner_caption') ): ?>
                    <?php while( have_rows('ourvalues_banner_caption') ): the_row(); ?>
                        <h2 class="text-3xl font-bold tracking-[-0.04em] text-primary"><?php the_sub_field('ourvision_banner_title_large'); ?></h2>
                        <h4 class="text-xl text-gray-600 font-bold sm:leading-[2.5rem]X mb-10"><?php the_sub_field('our_vision_content'); ?></h4>

                        <h2 class="mb-3 text-2xl font-bold tracking-[-0.04em] text-primary sm:text-3xlX"><?php the_sub_field('ourvalues_banner_title_large'); ?></h2>
                        <?php if( have_rows('ourvalues_content') ): ?>
                        <?php while( have_rows('ourvalues_content') ): the_row(); ?>
                        <div class="grid md:grid-cols-4 md:gap-5 pb-10" data-swiper-parallax="30%" data-scroll data-scroll-speed="1">
                            
                            <div class="text-gray-700 pt-5">
                               
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
</svg>
                                
                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_1'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_1'); ?></div>
                            </div>
                            
                            <div class="text-gray-700 pt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
    </svg>

                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_2'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_2'); ?></div>
                            </div>

                            <div class="text-gray-700 pt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
    </svg>

                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_3'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_3'); ?></div>
                            </div>

                            <div class="text-gray-700 pt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
    </svg>

                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_4'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_4'); ?></div>
                            </div>

                            <div class="text-gray-700 pt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>

                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_5'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_5'); ?></div>
                            </div>

                            <div class="text-gray-700 pt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
    </svg>

                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_6'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_6'); ?></div>
                            </div>

                            <div class="text-gray-700 pt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
    </svg>

                                <h4 class="text-xl text-gray-700 font-bold sm:leading-[2.5rem]"><?php the_sub_field('our_values_sub_title_7'); ?></h4>
                                <div class="text-gray-500"><?php the_sub_field('our_values_sub_content_7'); ?></div>
                            </div>
                        </div>
                        
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>
                    <?php endif; ?>

                    
                    

                    <?php if( have_rows('priorities') ): ?>
                    <?php while( have_rows('priorities') ): the_row(); ?>
                        <h2 class="mb-5 text-2xl font-bold tracking-[-0.04em] hidden notneededbybidushi"><?php the_sub_field('priorities_title'); ?></h2>
                        <div class="grid md:grid-cols-5 md:gap-5 pb-20 hidden notneededbybidushi">
                            
                            <div class="text-gray-700 space-y-3">
                                <?php echo $our_values_sub_icon_1; ?>
                                <?php if ( $our_values_sub_icon_1 ) {
                                    echo $our_values_sub_icon_1;
                                } else { ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
</svg>

                                <?php } ?>
                                <h4 class="text-base text-gray-700 font-bold"><?php the_sub_field('priorities_title_1'); ?></h4>
                            </div>
                            
                            <div class="text-gray-700 space-y-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
    </svg>
                                <h4 class="text-base text-gray-700 font-bold"><?php the_sub_field('priorities_title_2'); ?></h4>
                            </div>

                            <div class="text-gray-700 space-y-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
    </svg>


                                <h4 class="text-base text-gray-700 font-bold"><?php the_sub_field('priorities_title_3'); ?></h4>
                            </div>

                            <div class="text-gray-700 space-y-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
    </svg>



                                <h4 class="text-base text-gray-700 font-bold"><?php the_sub_field('priorities_title_4'); ?></h4>
                            </div>

                            <div class="text-gray-700 space-y-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
</svg>


                                <h4 class="text-base text-gray-700 font-bold"><?php the_sub_field('priorities_title_5'); ?></h4>
                            </div>
                            
                        <?php endwhile; ?>
                        <?php endif; ?>               
                    </div>
                      
                    <div class="embed-container hidden notneededbybidushi">
                        <iframe  class="w-full aspect-video" src="https://www.youtube.com/embed/nNpqNDPVzxg?rel=0&modestbranding=0&autohide=1&mute=1&showinfo=0&controls=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="embed-container hidden">
                        <?php

                            // Load value.
                            $iframe = the_sub_field('ourvalues_video_url');

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', 'src="$1?api=1"', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'rel'  => 0,
                                'modestbranding'  => 0,
                                'autohide'  => 1,
                                'mute' => 0,
                                'showinfo' => 0,
                                'controls' => 1,
                                'autoplay' => 1
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


                    <div class="px-4 sm:px-6 md:max-w-8xl md:px-4 lg:px-12 relative overflow-hidden bg-gradient-to-b from-secondary/100 to-secondary/80">
                        <div class="py-20 max-w-screen-xl mx-auto px-4">
                            <div class="md:grid md:grid-cols-2 gap-20">
                            <?php $the_query = new WP_Query('post_type=our-brands'); ?> 
                                <div>
                                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight pb-8 md:pt-12 text-white sm:text-5xl z-10 relative">Our Brand</h2>
                                    <ul class="slick-one__sync-c pe-10">                
                                                            
                                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                        <li class="text-white">
                                            <h5 class="text-md"><?php the_field('year'); ?></h5>
                                            <h4 class="text-2xl font-bold font-lora mb-3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                            <div class="text-white text-xl mb-5"><?php echo wp_trim_words( get_the_content(), 15, '...' );?> </div>
                                            <?php $volume = get_field( 'volume' );
                                            if( $volume ): ?>
                                            <div class="flex flex-wrap items-center pt-3 pb-10">
                                                <?php foreach($volume as $vol){ ?>
                                                <div class="bg-white/20x hover:bg-white/30 border-solid border border-white transition ease duration-300 font-medium me-2 mb-2 px-2.5 py-0.5 rounded"><?php echo $vol;?></div>
                                                <?php }?>
                                            </div>
                                            <?php endif; ?>
                                            <a class="bg-white/10 hover:bg-white/30 transition ease duration-300 py-2 px-4 rounded inline-block" href="<?php the_permalink() ?>">View more</a>
                                        </li>
                                        <?php endwhile; wp_reset_postdata(); ?>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="slick-one__sync-main slick-arrow__bottom-center">                              
                                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                        <li class="px-4 mb-4">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail('full', array('class' => 'w-full'));
                                                } else { ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
                                                <?php } ?>
                                            </a>
                                        </li>
                                        <?php endwhile; wp_reset_postdata(); ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div> <!-- our brands Ends here -->

                </div>
                
            </div>
        <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('about_dhaap_foundation') ): ?>
        <?php while( have_rows('about_dhaap_foundation') ): the_row(); $aboutusBannerImage = get_sub_field('about_dhaap_foundation_image');?>
            <div class="py-10 aboutus_banner aboutus_banner--red-transparent relative flex items-center" style="background:url('<?php echo $aboutusBannerImage['url'];?>') no-repeat center center; background-size:cover;" data-scroll-section>
                <?php if( have_rows('about_dhaap_foundation_caption') ): ?>
                <?php while( have_rows('about_dhaap_foundation_caption') ): the_row(); ?>
                <div class="max-w-screen-xlX mx-autoX text-center px-4 w-full" data-scroll data-scroll-speed="2">
                    <div class="space-y-5 md:pe-32X relative">
                        <h2 class="mb-3 text-3xl font-bold tracking-[-0.04em] text-white sm:text-5xl"><?php the_sub_field('about_dhaap_foundation_title_large'); ?></h2>
                        <h3 class="text-xl md:text-2xl text-white font-bold sm:leading-[2.5rem]"><?php the_sub_field('about_dhaap_foundation_title_small'); ?></h3>
                        <div class="text-gray-300"><?php the_sub_field('about_dhaap_foundation_paragraph'); ?></div>
                        <a href="" class="text-white hover:text-primary text-sm tracking-[0.1em] inline-block">Know More Dhaap Foundation </a>
                        <button
                            type="button"
                            class="inline-block transition duration-150 ease-in-out icon-video-play hidden"
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

        <?php if( have_rows('apply_dealerships') ): ?>
        <?php while( have_rows('apply_dealerships') ): the_row(); $applyDealershipsBannerImage = get_sub_field('apply_dealership_background_image');?>
        <div class="text-center relative overflow-hidden max-w-screen-xl mx-auto md:my-20" data-scroll-section>
            <div class="grid md:grid-cols-2">
                <div class="w-full h-screen absolute left-0 top-0"  style="background:url('<?php echo $applyDealershipsBannerImage['url'];?>') no-repeat center center; background-size:cover;"  data-swiper-parallax="30%" data-scroll data-scroll-speed="-2"></div>
                
                <div class="w-full py-20 md:py-40 bg-black/60 z-10 relative">
                    <div class="max-w-screen-xl mx-auto px-8 text-white" data-scroll data-scroll-speed="2">
                        <h2 class="mb-3 text-xl md:text-4xl font-bold tracking-[-0.04em] sm:leading-[3.5rem]"><?php the_sub_field('apply_dealership_title'); ?></h2>
                        <h3 class="mb-8 md:text-xl"><?php the_sub_field('apply_dealership_paragraph'); ?></h3>
                        <a href="" title="Domestic" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-2 md:py-4 px-4 md:px-8 border border-primary hover:border-transparent rounded transition">Domestic</a>
                        <a href="" title="International" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-2 md:py-4 px-4 md:px-8 border border-primary hover:border-transparent rounded transition">International</a>
                    </div>
                </div>    
            </div>
            
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        

        <?php if( have_rows('careers') ): ?>
        <?php while( have_rows('careers') ): the_row(); 
        $applyCareersBannerImage = get_sub_field('apply_careers_background_image');
        $messageFromPeopleImage = get_sub_field('message_from_people_image');
        ?>
        <div class="text-center relative md:mt-10x" style="background:url('<?php echo $applyCareersBannerImage['url'];?>') no-repeat center center; background-size:cover;" data-scroll-section>
            <div class="w-full py-20 bg-black/60">
                <div class="max-w-screen-xl mx-auto px-4 text-white pb-10 ">
                    <h2 class="mb-3 text-2xl md:text-4xl font-bold tracking-[-0.04em] sm:leading-[3.5rem]"><?php the_sub_field('apply_careers_title'); ?></h2>
                    <h3 class="md:text-xl"><?php the_sub_field('apply_careers_paragraph'); ?></h3>
                </div>
                <div class="max-w-screen-md mx-auto px-4 text-white">
                    <figure class="md:flex space-y-5 md:space-y-0 md:space-x-8 mb-10">
                        <img class="w-60 h-60 rounded-full mx-auto" src="<?php echo $messageFromPeopleImage['url'];?>" alt="" width="384" height="512">
                        <div class="md:px-8 space-y-5 text-center md:text-left">
                            <blockquote>
                                <div class="text-lg">
                                    <?php the_sub_field('message_from_people_content'); ?>
                                </div>
                            </blockquote>
                            <figcaption>
                                <div class="tracking-[0.2em]">
                                    <?php the_sub_field('message_from_people_title'); ?>
                                </div>
                                <div class="tracking-[0.1em] text-sm text-gray-400">
                                    <?php the_sub_field('chairman_full_role'); ?>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <a href="./job-opening" title="Job Opening" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-2 md:py-4 px-4 md:px-8 border border-primary hover:border-transparent rounded transition">Job Opening</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if( have_rows('message_from_chairman') ): ?>
        <?php while( have_rows('message_from_chairman') ): the_row(); $chairman_photoImage = get_sub_field('chairman_photo');?>
        <div class=" bg-white" data-scroll-section>
            <div class="relative max-w-screen-md mx-auto px-4 py-20 md:pb-40 md:space-y-10">
                <h2 class="mb-3 text-3xl font-bold tracking-[-0.04em] sm:text-5xl sm:leading-[3.5rem] text-center" data-scroll data-scroll-direction="vertical" data-scroll-speed="1" data-scroll-class="appear" data-scroll-repeat="true">
                    <?php the_sub_field('message_from_chairman_title'); ?>
                </h2>
                <figure class="md:flex space-y-5 md:space-y-0 md:space-x-8" data-scroll data-scroll-direction="vertical" data-scroll-speed="1.5" data-scroll-class="appear" data-scroll-repeat="true">
                    <img class="w-60 h-60 rounded-full mx-auto" src="<?php echo $chairman_photoImage['url'];?>" alt="" width="384" height="512">
                    <div class="md:px-8 space-y-5 text-center md:text-left">
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
        <div class="relative hidden" data-scroll-section>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center overflow-hidden" id="elements-fixed">
                <ul class="slick-one">
                    <li>
                        <figure>
                            <div class="c-fixed_target hidden" id="fixed-target"></div>
                            <div class="c-fixed hidden"  data-swiper-parallax="30%" data-scroll data-scroll-speed="2" style="background-image:url('<?php echo $our_team_images['url']; ?>');" ></div>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo $our_team_images['url']; ?>" alt="" srcset="">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <div class="c-fixed_target hidden" id="fixed-target"></div>
                            <div class="c-fixed hidden"   data-swiper-parallax="30%" data-scroll data-scroll-speed="2" style="background-image:url('<?php echo $our_team_images_two['url'];?>');" ></div>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <img src="<?php echo $our_team_images_two['url']; ?>" alt="" srcset="">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <div class="c-fixed_target hidden" id="fixed-target"></div>
                            <div class="c-fixed hidden"  data-swiper-parallax="30%" data-scroll data-scroll-speed="2" style="background-image:url('<?php echo $our_team_images_three['url'];?>');" ></div>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <img src="<?php echo $our_team_images_three['url']; ?>" alt="" srcset="">
                            </a>
                        </figure>
                    </li>
                </ul>
                
                <div class="p-5 md:px-10 lg:px-20 overflow-hidden">                        
                    <h2 class="mb-1 md:mb-3 text-2xl font-bold tracking-[-0.04em] sm:text-5xl sm:leading-[3.5rem]">
                        <?php the_sub_field('our_team_title'); ?>
                    </h2>
                    <div class="text-lg mb-10 lg:my-10">
                        <?php the_sub_field('our_team_paragraph'); ?>
                    </div>
                    <a href="" title="Meet our Team" class="bg-transparent hover:bg-primary text-primary font-semibold sm:leading-[3.5rem] hover:text-white py-2 md:py-4 px-4 md:px-8 border border-primary hover:border-transparent rounded transition">Meet our Team</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


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