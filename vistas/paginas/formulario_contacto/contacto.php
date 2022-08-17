<link rel="stylesheet" href="vistas/recursos/css/contacto.css">
<body>
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACIÓN<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> restatechefficient.jyd@gmail.com</p>
                <p><span class="fa fa-mobile"></span> (+57) 3145667365</p>
            </section>
        </section>
        <form action="" method="post" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names">

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email">

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje"></textarea>
                <a href="index.php?controlador=paginas&accion=enviarMensaje"><input type="button" value="Enviar Mensaje" id="btnSend"></input></a>
            </div>
        </form>
    </section>
</body>