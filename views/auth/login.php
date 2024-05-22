<div class="contenedor login">
    <?php include_once __DIR__.'/../templates/nombre-sitio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>
        <?php include_once __DIR__.'/../templates/alertas.php' ?>
        <form method="POST" class="formulario" action="/" novalidate>
            <div class="campo">
                <label class="email">Email</label>
                <input 
                    type="email"
                    id="email"
                    placeholder="Tu Email"
                    name="email"
                
                />
            </div>
            <div class="campo">
                <label class="password">Password</label>
                <input 
                    type="password"
                    id="password"
                    placeholder="Tu password"
                    name="password"
                
                />
            </div>

            <input type="submit" class="boton" value="Iniciar Sesion">
        </form>
        <div class="acciones">
            <a href="/crear">¿Aun no tienes una cuenta? obtener una</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div>
</div><!--contenedor-sm -->