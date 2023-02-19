<?php

echo '<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-plus me-2"></i>'.APP_NAME.'</h3>
                            </a>
                            
                        </div>
                        <h3>Registrar Nueva Cuenta.</h3>
                        <div class="form-floating mb-3">
                            <input name="namechanel" id="namechanel" type="text" class="form-control" id="floatingText" placeholder="jhondoe" onchange="verification_namechanel(this.value)"  autofocus required>
                            <label for="floatingText">Nombre de La cuenta</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email" id="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" onchange="verification_fullnameuser(this.value)" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input name="pass" id="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Calve de Seguridad</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input  name="pass2" id="pass2" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Repetir Calve de Seguridad</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="fullnameuser" id="fullnameuser" type="text" class="form-control" id="floatingText" placeholder="jhondoe" required>
                            <label for="floatingText">Nombre Completo con Apellidos</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="token" id="token" type="text" class="form-control" id="floatingText" placeholder="jhondoe" required>
                            <label for="floatingText">CC:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="phone" id="phone" type="text" class="form-control" id="floatingText" placeholder="jhondoe" required>
                            <label for="floatingText">Numero Celular</label>   
                        </div>
                        <div id="result_r"" name="result_r" style="color:green;background:white">Completar todos los Campos de manera Corecta...</div>    
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Acepto Todos los <a href="">Terminos y ondiciones</a> de la plataforma</label>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" onclick="RegistrarUsuario();" >CONTINUAR</button>
                        <p class="text-center mb-0">Ya estas registrado y quiero entrar? <a href="">INICIAR SESSION</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>';
?>