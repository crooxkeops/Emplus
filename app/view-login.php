<?php


echo '<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-plus me-2"></i>'.APP_NAME.'</h3>
                            </a>
                            
                        </div>
                        <p class="text-center mb-0" style="color:black">Empieza a trabajar atravez de nuestra plataforma de una manera segura y sin tantas vueltas.Si no tienes una Cuenta? <a href="?exe=singup"> Crear una Ahora.</a></p>
                        <h3>Iniciar Session</h3>
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Correo Electronico</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Calve de Seguridad</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recordar Datos de Session</label>
                            </div>
                        </div>
                            
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        
                        <p class="text-center mb-0"><a href="">Recuperar Clave de Seguridad.</a><br></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>';
?>