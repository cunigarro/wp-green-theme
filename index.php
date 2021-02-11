<?php get_header(); ?>

  <div class="flex justify-center items-center mx-auto z-0 overflow-hidden">
    <div class="w-full bg-gray-100">
      <div class="swiper-container swiper-container-1 w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide relative">
            <div class="text-container absolute left-0 top-0 h-full w-full px-4">
              <div class="container px-4 flex items-center h-full w-full mx-auto text-white flex justify-center">
                <div class="w-full md:w-10/12">
                  <div class="text-left">
                    <h1 class="font-bold text-4xl lg:text-7xl leading-none mb-0 sm:mb-3">
                      Somos
                      <br>
                      Comercio
                      <br>
                      Justo
                    </h1>
                    <p class="font-light text-sm md:text-lg hidden sm:block">
                      Unidos por la equidad, la
                      <br>
                      sostenibilidad y el desarrollo de
                      <br>
                      nuestras ciudades y pueblos
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <img src="<?php echo get_option('home_slider_image_1') ?>">
          </div>
          <div class="swiper-slide relative">
            <div class="text-container absolute left-0 top-0 h-full w-full px-4">
              <div class="container px-4 flex items-center h-full w-full mx-auto text-white flex justify-center">
                <div class="w-full md:w-10/12">
                  <div class="text-left">
                    <h1 class="font-bold text-4xl lg:text-7xl leading-none mb-0 sm:mb-3">
                      Somos
                      <br>
                      Comercio
                      <br>
                      Justo
                    </h1>
                    <p class="font-light text-sm md:text-lg hidden sm:block">
                      Unidos por la equidad, la
                      <br>
                      sostenibilidad y el desarrollo de
                      <br>
                      nuestras ciudades y pueblos
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <img src="<?php echo get_option('home_slider_image_2') ?>">
          </div>
          <div class="swiper-slide relative">
            <div class="text-container absolute left-0 top-0 h-full w-full px-4">
              <div class="container px-4 flex items-center h-full w-full mx-auto text-white flex justify-center">
                <div class="w-full md:w-10/12">
                  <div class="text-left">
                    <h1 class="font-bold text-4xl lg:text-7xl leading-none mb-0 sm:mb-3">
                      Somos
                      <br>
                      Comercio
                      <br>
                      Justo
                    </h1>
                    <p class="font-light text-sm md:text-lg hidden sm:block">
                      Unidos por la equidad, la
                      <br>
                      sostenibilidad y el desarrollo de
                      <br>
                      nuestras ciudades y pueblos
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <img src="<?php echo get_option('home_slider_image_3') ?>">
          </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <div class="container mx-auto text-sm py-10 text-gray-600 px-4 flex justify-center">
    <div class="w-full md:w-10/12">
      <?php
        $post_7 = get_post(7);
        echo apply_filters( 'the_content', $post_7->post_content );
      ?>

      <div class="pt-3">
        <a href="/quienes-somos" class="inline-flex items-center justify-center px-5 py-2 border border-transparent text-sm font-medium rounded-sm text-white uppercase bg-green">
          Conoce más
        </a>
      </div>
    </div>
  </div>

  <div class="bg-gray-400 py-20 relative overflow-hidden z-0">
    <img class="w-full h-full absolute left-0 top-0 z-0 object-top object-cover" src="https://clac-statics.s3.amazonaws.com/fondo-de-iconos.jpg" alt="">
    <div class="container mx-auto px-4 z-10 relative">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white text-center border-t-8 border-green p-8 text-gray-600">
          <img class="mb-6 inline-block w-36 h-auto" src="https://clac-statics.s3.amazonaws.com/icono-comercio-justo-01.png" alt="">
          <p class="font-semibold mb-4">
            Nuestra campaña
          </p>
          <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facilis tenetur sed ad rerum, accusantium excepturi vitae aspernatur!
          </p>
        </div>

        <div class="bg-white text-center border-t-8 border-blue p-8 text-gray-600">
          <img class="mb-6 inline-block w-36 h-auto" src="https://clac-statics.s3.amazonaws.com/icono-comercio-justo-02.png" alt="">
          <p class="font-semibold mb-4">
            Criterios
          </p>
          <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facilis tenetur sed ad rerum, accusantium excepturi vitae aspernatur!
          </p>
        </div>

        <div class="bg-white text-center border-t-8 border-yellow p-8 text-gray-600">
          <img class="mb-6 inline-block w-36 h-auto" src="https://clac-statics.s3.amazonaws.com/icono-comercio-justo-03.png" alt="">
          <p class="font-semibold mb-4">
            Guías de participación
          </p>
          <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facilis tenetur sed ad rerum, accusantium excepturi vitae aspernatur!
          </p>
        </div>
      </div>
    </div>
  </div>

  <?php
    $currentInterestingPage = get_query_var('paged');
    $pagitationInterestingPosts = new WP_Query(array(
      'posts_per_page' => 3,
      'paged' => $currentInterestingPage,
      'category_name' => 'te-puede-interesar'
    ));

    if ($pagitationInterestingPosts->have_posts()):
  ?>
    <div class="container mx-auto pt-8 px-4">
      <h2 class="font-bold text-4xl mb-4">
        Te puede interesar
      </h2>
    </div>

    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
        <?php
          while($pagitationInterestingPosts->have_posts()) {
              $pagitationInterestingPosts->the_post(); ?>
              <div class="text-left flex flex-col">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                <?php if (!empty($url)): ?>
                  <img class="mb-3 object-cover h-64 sm:h-32 lg:h-64 w-100" src="<?php echo $url ?>">
                <?php else: ?>
                  <div class="mb-3 h-64 sm:h-32 lg:h-64 bg-gray-100 flex items-center">
                    <img class="object-cover" src="<?php echo get_template_directory_uri() . '/dist/img/imagen-predeterminada-para-posts.png' ?>" alt="">
                  </div>
                <?php endif; ?>
                <div class="flex flex-col flex-1">
                  <h3 class="font-bold flex-none sm:flex-1 lg:flex-none">
                    <?php the_title(); ?>
                  </h3>
                  <div class="block sm:hidden lg:block flex-1 mt-3">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="text-right mt-4">
                    <a class="text-sm text-blue hover:underline font-semibold" href="<?php the_permalink(); ?>">
                      Ir al artículo
                    </a>
                  </div>
                </div>
              </div>
          <?php }
        ?>
      </div>

      <div class="flex py-5 justify-center">
        <?php
          echo paginate_links(array(
            'total' => $pagitationInterestingPosts->max_num_pages,
            'prev_text' => __('<i class="mdi mdi-chevron-left mdi-36px text-green"></i>'),
            'next_text' => __('<i class="mdi mdi-chevron-right mdi-36px text-green"></i>')
          ));
        ?>
      </div>
    </div>
  <?php endif; ?>

  <?php
    $currentNewsPage = get_query_var('paged');
    $pagitationNewsPosts = new WP_Query(array(
      'posts_per_page' => 3,
      'paged' => $currentNewsPage,
      'category_name' => 'noticias'
    ));

    if ($pagitationNewsPosts->have_posts()):
  ?>
    <div class="container mx-auto pt-8 px-4">
      <h2 class="font-bold text-4xl mb-4">
        Noticias
      </h2>
    </div>

    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
        <?php
          while($pagitationNewsPosts->have_posts()) {
              $pagitationNewsPosts->the_post(); ?>
              <div class="text-left flex flex-col">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                <?php if (!empty($url)): ?>
                  <img class="mb-3 object-cover h-64 sm:h-32 lg:h-64 w-100" src="<?php echo $url ?>">
                <?php else: ?>
                  <div class="mb-3 h-64 sm:h-32 lg:h-64 bg-gray-100 flex items-center">
                    <img class="object-cover" src="<?php echo get_template_directory_uri() . '/dist/img/imagen-predeterminada-para-posts.png' ?>" alt="">
                  </div>
                <?php endif; ?>
                <div class="flex flex-col flex-1">
                  <h3 class="font-bold flex-none sm:flex-1 lg:flex-none">
                    <?php the_title(); ?>
                  </h3>
                  <div class="block sm:hidden lg:block flex-1 mt-3">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="text-right mt-4">
                    <a class="text-sm text-blue hover:underline font-semibold" href="<?php the_permalink(); ?>">
                      Ir al artículo
                    </a>
                  </div>
                </div>
              </div>
          <?php }
        ?>
      </div>

      <div class="flex py-5 justify-center">
        <?php
          echo paginate_links(array(
            'total' => $pagitationNewsPosts->max_num_pages,
            'prev_text' => __('<i class="mdi mdi-chevron-left mdi-36px text-green"></i>'),
            'next_text' => __('<i class="mdi mdi-chevron-right mdi-36px text-green"></i>')
          ));
        ?>
      </div>
    </div>
  <?php endif; ?>

<?php get_footer(); ?>
