@extends('home')

@section('title','Teste')

@section('content')
    <section>
        <article class="mx-auto mt-3 p-4">
            <header>
                <div class="image-cap"
                     style="background: #C0C0C0 url({{$post->featured_image}}) no-repeat center center; height: 40vh; width: 100%;"></div>
            </header>
            <div>
                <h1>{{ $post->title }}</h1>
                <span class="data d-inline-block mb-3">postado em {{ $post->created_at->diffForHumans() }}</span>
                <p>{{ $post->content }}</p>
            </div>
            <footer class="border border-secondary rounded clearfix d-flex align-items-center mx-auto p-3 mt-5">
                <span class="avatar d-inline-block rounded-circle mr-1"
                      style="background: url({{$post->author->avatar}})"></span>
                <span class="float-left font-italic">Por {{ $post->author->name }}</span>
                <span class="ml-auto">{{ $post->created_at->diffForHumans() }}</span>
            </footer>
        </article>
    </section>
@stop
