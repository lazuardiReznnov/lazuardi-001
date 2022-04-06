@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-3">{{ $post->title }}</h1>
           <a href=" /dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span> Back To all Post</a>
           <a href="" class="btn btn-warning"><span data-feather='eye'></span> Edit</a>
           <a href="" class="btn btn-danger"><span data-feather='x-circle'></span> Delete</a>
                           
                <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top mt-3" alt="..." class="img-fluid">
            <article class="my-3">
                {!! $post->body !!}
            </article>
          
        </div>
    </div>
</div>
@endsection