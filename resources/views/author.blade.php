@extends('layouts.main')

@section('container')
        <h1>AUTHOR LIST</h1>
        @foreach($authors as $author)
       <ul>
           <li>  <a class="text-decoration-none" href="/author/{{ $author->username }}"> <h2>{{ $author->name}}</h2></a></li>
       </ul> 
        @endforeach

@endSection