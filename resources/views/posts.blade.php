@extends('layouts.main')

@section('container')
       <h1 class="text-center mb-4">{{ $title }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <form action="/blog" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                      </div>
                </form>
            </div>
        </div>

        @if($posts->count())
        <!-- Hero -->
        <div class="card mb-3">
            <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p><small>
                By : <a href="/author/{{ $posts[0]->user->username }}">{{  $posts[0]->user->username  }}</a> in <a href="/category/{{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="post/{{ $posts[0]->slug }}"class="btn btn-primary">Read more </a>
            </div>
        </div>
         <!--end Hero  -->
       

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{ $post->title}}</h5>
                              <p><small>
                                By : <a href="/author/{{ $post->user->username }}">{{  $post->user->username  }}</a> in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small></p>
                              <p class="card-text">{{ $posts[0]->excerpt }}</p>
                              <a href="post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
            </div>
        </div>       
    @else
            <p class="text-center">Data Not Found</p>
    @endif 

@endSection