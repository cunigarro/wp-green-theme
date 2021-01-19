<form id="contactForm" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <input type="text" placeholder="Escribe tu nombre" id="name" name="name" required="required">
    <input type="email" placeholder="Escribe tu correo electrónico" id="email" name="email" required="required">
    <textarea name="message" id="message" cols="30" rows="10" required="required"></textarea>
    <button type="submit">
        Enviar mensaje
    </button>
</form>
