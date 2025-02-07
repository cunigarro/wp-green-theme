<!doctype html>
<html lang="es">
  <head>
    <title>Inicio - Ciudades y Pueblos Latinoamericanos por el Comercio Justo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.8.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/dist/img/favicon-comercio-justo-clac-web.png' ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <header class="sticky top-0 bg-white z-10 shadow">
      <div class="container mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
          <div class="flex justify-start lg:w-0 flex-1 flex-shrink">
            <a href="/">
              <span class="sr-only">CLAC</span>
              <img class="h-16 sm:h-20" src="<?php echo get_template_directory_uri() . '/dist/img/logo-comercio-justo-clac-web.png' ?>" alt="">
            </a>
          </div>
          <div class="-mr-2 -my-2 xl:hidden">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 js-btn-menu">
              <span class="sr-only">Open menu</span>
              <!-- Heroicon name: menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>

          <?php
            wp_nav_menu(array(
              'menu'              => 'main-menu',
              'container'         => false,
              'menu_class'        => 'hidden xl:flex space-x-7 items-center ml-10 text-center list-none',
              'walker'            => new Walker_Nav_Main_Menu()
            ));
          ?>
        </div>
      </div>
      <div class="fixed top-0 inset-x-0 p-2 transition transform origin-top-right hidden js-mb-menu z-30">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
          <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
              <a href="/" target="_parent">
                <img class="h-10 w-auto" src="<?php echo get_template_directory_uri() . '/dist/img/icono-comercio-justo-clac-web.png' ?>" alt="Workflow">
              </a>
              <div class="-mr-2">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 js-close-mb-menu">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <?php
                wp_nav_menu(array(
                  'menu'              => 'main-menu',
                  'container'         => false,
                  'menu_class'        => 'grid gap-y-8 text-left',
                  'walker'            => new Walker_Nav_Main_Menu()
                ));
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full header-line-height flex">
        <div class="w-2/4 bg-blue h-full"></div>
        <div class="w-1/4 bg-green h-full"></div>
        <div class="w-1/4 bg-yellow h-full"></div>
      </div>
    </header>
