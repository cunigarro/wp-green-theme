<?php get_header(); ?>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="flex justify-center items-center mx-auto z-0 overflow-hidden">
          <div class="w-full bg-gray-100">
            <div class="swiper-container w-100">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide relative">
                  <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                  <img class="object-cover w-full" src="<?php echo $url ?>">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mx-auto text-sm py-10 text-gray-600 px-4 content flex justify-center">
          <div class="w-full md:w-10/12">
            <h1 class="font-semibold text-4xl leading-none mb-7">
              <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
          </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>
