@extends('home')

@section('title','Teste')

@section('content')
    <section>
        @foreach($posts as $post)
            <article class="my-4 bg-white mx-auto">
                <a href="{{ route('posts.show', $post->slug) }}" class="post text-dark">
                    <div class="p-4">
                        <header>
                            <h2>{{ $post->title }}</h2>
                            <span class="data">Postado: {{ $post->publish_date->diffForHumans() }}</span>
                            <hr>
                        </header>
                        <div>
                            <div class="image-cap"
                                 style="background: url({{$post->featured_image}}) no-repeat center center; height: 30vh; width: 100%;">
                            </div>
                            <span class="text">{{ ($post->content) }}</span>
                        </div>
                        <footer class="clearfix d-flex align-items-center">
                            <span class="avatar d-inline-block rounded-circle mr-1" style="background: url({{$post->author->avatar}})"></span>
                            <span class="float-left font-italic">Por {{ $post->author->name }}</span>
                            <span class="ml-auto">{{ $post->publish_date->diffForHumans() }}</span>
                        </footer>
                    </div>
                </a>
            </article>
        @endforeach
    </section>
@stop
