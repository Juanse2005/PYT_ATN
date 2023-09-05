    <!--Imagen del navbar-->
    <nav class="navbar navbar-expand-lg bg-light justify-content-between fixed-top">
        <a class="navbar-brand" href="#">
            <img src="img-logo-atn-02.png" width="90" height="70" class="d-inline-block" alt="">
            ATN
        </a>
        <!--Menu para dispositivos moviles-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Form del buscador-->
        <div class="collapse navbar-collapse">
            <form class="d-flex">
                <input class="form-control-nav" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <!--Carrito de compras-->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto my-2 my-lg-0 " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-shopping-cart" aria-controls="offcanvasRight"><img src="img-shopping.png" height="50"></a>
                </li>
                <!--Categorias-->
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-categories" aria-controls="offcanvasRight">
                        Categorias
                    </a>
                </li>
                <!--Formulario de registro-->
                <li class="nav-item">
                    <a class="nav-link active" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-register" aria-controls="offcanvasRight">
                        Crear cuenta</a>
                </li>
                <!--Formulario de inicio de sesion-->
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-login" aria-controls="offcanvasRight">Iniciar sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Offcanvas shopping cart -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-shopping-cart" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compras</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <!-- Offcanvas categories -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-categories" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Categorias</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <!-- Offcanvas register -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-register" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                            <form name="register" action="register_validate.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Primer nombre</label>
                                    <input type="text" class="form-control" name="p_nombre" required>
                                    <label class="form-label">Segundo nombre</label>
                                    <input type="text" class="form-control" name="s_nombre">
                                    <label class="form-label">Primer apellido</label>
                                    <input type="text" class="form-control" name="p_apellido" required>
                                    <label class="form-label">Segundo apellido</label>
                                    <input type="text" class="form-control" name="s_apellido" required>
                                    <label class="form-label">Correo electronico</label>
                                    <input type="text" class="form-control" name="email" required>
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" required>

                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <a href="terms_&_conditions" class="form-check-label" for="exampleCheck1" required>Acepto los Términos y condiciones, y
                                        autorizo al uso de mis datos de acuerdo a la Declaración de Privacidad.</a>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary" name="register" value="register">Registrarse</button>
                                    <!-- IMPORTANTE DATA BS DIRECCIONA AL OTRO FORM  -->
                                    <a class="text-center" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-login" aria-controls="offcanvasRight">¿Ya
                                        tienes cuenta? click aqui</a>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas login -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-login" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Inicio de sesion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form name="login" action="login_validate.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control" name="email" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <a href="">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary ">Iniciar sesion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>