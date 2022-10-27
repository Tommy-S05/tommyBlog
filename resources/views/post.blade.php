<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    @vite(['resources/sass/styles.sass'])
</head>
<body>
    {{--Nav--}}
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy">
            </a>
        </div>
    </nav>
    {{--Nav END--}}

    <!-- Contenido -->
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>POO con Javascript, feo pero posible</h1>
                <hr>
                <img src="images/8.png" alt="Post Javascript" class="img-fluid">

                <p class="text-left mt-3 post-txt">
                    <span>Autor: YouDevs</span>
                    <span class="float-right">Publicado: Hace 2 semanas</span>
                </p>
                <p class="text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                </p>
                <p class="text-left post-txt"><i>Categoría: Desarrollo web</i></p>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3 offset-md-1">
                <p>Últimas entradas</p>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/3.png" class="img-fluid rounded" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post">Aprende Python en un dos tres</a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/5.png" class="img-fluid rounded" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post">PHP sigue vivito y coleando</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Posts relacionados -->
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 text-center">
                <h2>Entradas relacionadas</h2>
                <hr class="post-hr">
            </div>
            <!-- Post 1 -->
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                    <div class="card-body">
                        <small class="card-txt-category">Categoría: Programación</small>
                        <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                        <div class="d-card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                            eius corrupti nulla veniam, molestias nemo repudiandae?
                        </div>
                        <a href="#" class="post-link"><b>Leer más</b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author">YouDevs</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date">Hace 2 semanas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post 2 -->
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                    <div class="card-body">
                        <small class="card-txt-category">Categoría: Programación</small>
                        <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                        <div class="d-card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                            eius corrupti nulla veniam, molestias nemo repudiandae?
                        </div>
                        <a href="#" class="post-link"><b>Leer más</b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author">YouDevs</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date">Hace 2 semanas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                    <div class="card-body">
                        <small class="card-txt-category">Categoría: Programación</small>
                        <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                        <div class="d-card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                            eius corrupti nulla veniam, molestias nemo repudiandae?
                        </div>
                        <a href="#" class="post-link"><b>Leer más</b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author">YouDevs</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date">Hace 2 semanas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/youdevs">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a href="https://www.instagram.com/youdevs">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
                <a href="https://www.youtube.com/c/YouDevsOficial">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2020 YouDevs, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    {{--Footer END--}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
