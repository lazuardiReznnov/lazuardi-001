@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-3">{{ $post->title }}</h1>
           <a href=" /dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span> Back To all Post</a>
           <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather='eye'></span> Edit</a>
           <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" ><span data-feather="x-circle"></span>Delete</button>
        </form>
                          @if($post->image)
                          <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top mt-3" alt="..." class="img-fluid">    
                          </div>
                          @else
                          <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top mt-3" alt="..." class="img-fluid">
                          @endif
               
            <article class="my-3">
                {!! $post->body !!}
            </article>
          
        </div>
    </div>
</div>
@endsection