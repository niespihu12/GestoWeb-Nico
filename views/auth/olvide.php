<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Acceso UpTask</p>
        <?php include_once __DIR__ . '/../templates/alertas.php' ?>
        <form method="POST" class="formulario" action="/olvide" novalidate>
            <div class="campo">
                <label class="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email" />
            </div>


            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes cuenta?Iniciar Sesion</a>
            <a href="/crear">¿Aun no tienes una cuenta? obtener una</a>



        </div>
    </div>
</div><!--contenedor-sm -->