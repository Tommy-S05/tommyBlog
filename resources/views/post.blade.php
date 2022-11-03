@extends('layouts.layout')
@section('title', 'Post')

@section('content')
    <!-- Contenido -->
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>{{ $post->title }}</h1>
                <hr>
                <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}" class="img-fluid">

                <p class="text-left mt-3 post-txt">
                    <span>Autor: {{ $post->author }}</span>
                    <span class="float-right">Publicado: {{ $post->created_at->diffForHumans() }}</span>
                </p>
                <p class="text-left">
                    {{ $post->content }}
                </p>
                <p class="text-left post-txt"><i>Categoría: {{ $post->category->name }}</i></p>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3 offset-md-1">
                <p>Últimas entradas</p>
                @foreach($latestPosts as $post)
                    <div class="row mb-4">
                        <div class="col-4 p-0">
                            <a href="{{ route('post.post-id', $post->id) }}">
                                <img src="{{ asset($post->featured) }}" class="img-fluid rounded" width="100" alt="{{ $post->title }}">
                            </a>
                        </div>
                        <div class="col-7 pl-0">
                            <a href="{{ route('post.post-id', $post->id) }}" class="link-post">{{ $post->title }}</a>
                        </div>
                    </div>
                @endforeach
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
@endsection
