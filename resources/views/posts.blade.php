@extends('layouts.main')

@section('container')
       <h1 class="text-center mb-4">{{ $title }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <form action="/blog" method="get">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('user'))
                          <input type="hidden" name="user" value="{{ request('username') }}">
                     @endif
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
            @if($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden">
              <img src="{{ asset('storage/'. $posts[0]->image) }}" class="card-img-top mt-3" alt="..." class="img-fluid">    
            </div>
            @else
            <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top mt-3" alt="..." class="img-fluid">
            @endif
            
            <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p><small>
                By : <a href="/blog?username={{ $posts[0]->user->username }}">{{  $posts[0]->user->username  }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
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
                            @if($post->image)
                           
                              <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top mt-3" alt="..." class="img-fluid">    
                           
                            @else
                            <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top mt-3" alt="..." class="img-fluid">
                            @endif
                            <div class="card-body">
                              <h5 class="card-title">{{ $post->title}}</h5>
                              <p><small>
                                By : <a href="/blog?username={{ $post->user->username }}">{{  $post->user->username  }}</a> in <a href="/blog?category={{ $post->category->slug }}"> {{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small></p>
                              <p class="card-text">{{ $post->excerpt }}</p>
                              <a href="post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>       
    @else
            <p class="text-center">Data Not Found</p>
    @endif 

@endSection