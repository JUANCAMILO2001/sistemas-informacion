@extends('layouts.guest')
@section('title', 'Iniciar Sesión')
@section('content')
    <header class="headers" style="">
        <div class="inner-top d-flex justify-content-between" >
                <a href="{{url('auth.login')}}" id="logo-sena" class="img-fluid" title="Logo Sena"></a>
            <div>
                <div>
                    <input class="img-fluid" type="image" style="height: 127px; margin-top: -12px; " name="imgbtn" src="{{url('../../recursos/img/login-via-microsoft.png')}}" id="">
                </div>
            </div>

        </div>
    </header>
    <div class="linea"></div>
    <main style="height: 75vh">
        <div id="content" style="background-color: #ffffff">
            <div class="inner-mid d-flex align-items-center justify-content-center">
                <div class="container">
                    <form action="">
                        <div>
                            <div class="title-content">
                                <p>Ingreso Usuarios registrados</p>
                            </div>
                            <div class="content-login input-group has-validation">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Correo Electronico</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" required>
                                    <label for="floatingPassword">Contraseña</label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-outline-success">Success</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <footer class="footer-login">
        aa

    </footer>

@endsection
