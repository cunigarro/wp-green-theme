<?php get_header(); ?>



<!-- <div class="container mx-auto text-sm py-10 text-gray-600 px-4">
  <p>
    La campaña Ciudades y Pueblos por el Comercio Justo – Latinoamérica y el Caribe está conformada por personas voluntarias que conforman comités locales en cada ciudad. Participan además organizaciones de la sociedad civil y actores de los gobiernos locales. Los comités locales buscan impulsar los principios, valores, prácticas y enfoques del Comercio Justo, apoyando las iniciativas y emprendimientos de pequeños(as) productores(as) en cada ciudad o pueblo.
  </p>

  <img class="block my-10" src="https://clac-statics.s3.amazonaws.com/foto-02-pagina-quienes-somos.jpg" alt="">

  <p class="mb-3">
    Los comités locales son muy activos y realizan todo tipo de actividades para promover el Comercio Justo y la campaña y para apoyar a los pequeños productores y productoras incentivando el mercado local. Cada comité local lleva a cabo su reunión anual para la evaluación de los trabajos realizados y los resultados obtenidos. Además, elaboran un plan estratégico-operativo a nivel local para incluir las mejoras necesarias y para el cumplimiento de objetivos vinculados con los criterios de la campaña Ciudades y Pueblos por el Comercio Justo - Latinoamérica y el Caribe.
  </p>

  <p class="mb-3">
    La campaña también cuenta con un Comité Regional, conformado por CLAC, WFTO y un representante de los comités locales. Este comité se mantiene en constante comunicación, apoyando y promocionando las ￼actividades￼ que se organizan. El primer taller regional de ciudades por el Comercio Justo de América Latina y el Caribe se celebró en el marco de la Conferencia Internacional de Ciudades por el Comercio Justo, realizada en Cardiff, Reino Unido en el 2019. En ese taller se elaboró un plan estratégico regional partiendo de las sugerencias y aportes locales.
  </p>

  <p class="mb-6">
    Desde el 2018, la región de América Latina y el Caribe tiene representantes en el Comité Internacional de Ciudades por el Comercio Justo y desde octubre de 2019, Miriam Pérez Zelaya (del comité de Marcala, Honduras) es la representante por la región en el citado Comité Internacional.
  </p>
</div> -->

<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="flex justify-center items-center mx-auto z-0">
          <div class="w-full bg-gray-100">
            <div class="swiper-container w-100">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide relative">
                  <div class="text-container absolute left-0 top-0 h-full w-full px-12">
                    <div class="container flex items-center h-full w-full mx-auto text-white">
                      <div class="text-left w-full sm:w-2/4">
                        <h1 class="font-bold text-4xl lg:text-7xl leading-none mb-0 sm:mb-3">
                          <?php the_title(); ?>
                        </h1>
                        <p class="font-light text-sm md:text-lg hidden sm:block">
                          Latinoamérica y El Caribe
                        </p>
                      </div>
                    </div>
                  </div>
                  <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                  <img src="<?php echo $url ?>">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mx-auto text-sm py-10 text-gray-600 px-4 content">
          <?php the_content(); ?>
        </div>
    <?php }
?>

<?php get_footer(); ?>
