<div class="grid grid-cols-12 gap-4">
    <div class="md:col-span-7 col-span-12">
        <form class="flex flex-col" id="contactForm" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
            <div class="mb-4">
                <label class="block mb-2" for="">
                    Escribe tu nombre
                </label>
                <input class="border-2 p-3 w-full" type="text" placeholder="" id="name" name="name" required="required">
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="">
                    Escribe tu correo electrónico
                </label>
                <input class="border-2 p-3 w-full" type="email" placeholder="" id="email" name="email" required="required">
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="">
                    Escribe tu mensaje
                </label>
                <textarea class="border-2 p-3 w-full" name="message" id="message" cols="30" rows="10" required="required"></textarea>
            </div>

            <div class="text-left">
                <button
                    class="inline-flex items-center justify-center px-5 py-2 border border-transparent text-sm font-medium rounded-sm text-white uppercase bg-green"
                    type="submit"
                >
                    Enviar mensaje
                </button>
            </div>
        </form>
    </div>
    <div class="md:col-span-5 col-span-12 text-center">
        <div class="mb-6 mt-11 md:mt-0">
            <img class="w-5/12 inline-block" src="<?php echo get_template_directory_uri() . '/img/logo-vertical-comercio-justo-clac-web.png' ?>" alt="">
        </div>
        <p class="mb-4">
            Para informaciones e inquietudes sobre la campaña por favor escribir a ambos correos, o bien se puede poner en contacto a través del formulario.
        </p>
        <p class="mb-4">
            <span class="text-green mb-0">
                <strong>
                    Linda Vera
                </strong>
            </span>
            <br>
            <span>
                Coordinadora de Incidencia
            </span>
            <br>
            <a class="text-green text-blue:hover" href="mailto:linda.v@clac-comerciojusto.org">
                linda.v@clac-comerciojusto.org
            </a>
        </p>
        <p class="mb-4">
            <span>
                Contacto en WFTO-LA:
            </span>
            <br>
            <span class="text-green mb-0">
                <strong>
                    Zulma Brítez
                </strong>
            </span>
            <br>
            <span>
                Secretaria Regional
            </span>
            <br>
            <a class="text-green" href="mailto:secretaria@wfto-la.org">
                secretaria@wfto-la.org
            </a>
        </p>

        <p>
            También nos encuentras en <a class="text-green" href="https://www.facebook.com/ciudadescomerciojusto/" target="_blank">Facebook</a>
        </p>
    </div>
</div>