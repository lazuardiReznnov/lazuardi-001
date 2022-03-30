@extends('layouts.main')

@section('container')
        <h1>HALAMAN POST</h1>

        @if($posts->count())
        <!-- Hero -->
        <div class="card mb-3">
            <img src="/img/1.jpg" width="1200px" height="400px" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p><small>
                By : <a href="/author/{{ $posts[0]->user->username }}">{{  $posts[0]->user->username  }}</a> in <a href="/category/{{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="posts[0]/{{ $posts[0]->slug }}"class="btn btn-primary">Read more </a>
            </div>
        </div>
         <!--end Hero  -->
        @else

        @endif
        
        @foreach($posts as $post)
        <article class="mb-4">
        <a href="post/{{ $post->slug }}"> <h2>{{ $post->title}}</h2></a>
            <p>By : <a href="/author/{{ $post->user->username }}">{{  $post->user->username  }}</a> in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="post/{{ $post->slug }}" >Read more </a>
        </article>
       
      
        @endforeach

@endSection