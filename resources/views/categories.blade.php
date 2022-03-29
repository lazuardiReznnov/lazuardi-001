@extends('layouts.main')

@section('container')
        <h1>POST CATEGORIES</h1>
        @foreach($categories as $category)
       <ul>
           <li>  <a class="text-decoration-none" href="/category/{{ $category->slug }}"> <h2>{{ $category->name}}</h2></a></li>
       </ul> 
        @endforeach

@endSection