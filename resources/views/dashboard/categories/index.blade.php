@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Categoriess </h1>
</div>
    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Category</a>
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
          @endif
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Slug</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @if($categories->count())
                @foreach($categories as $category)
                <tr>
                    <td>{{ ($categories->currentpage()-1) * $categories->perpage() + $loop->index + 1 }}
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="/dashboard/categories{{$category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('are You sure ??')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr><td colspan="4" class="text-center">Data Not Found</td></tr>
            @endif
           
           
          </tbody>
        </table>
    </div>
        <div class="row">
            <div class="col-md-8">
                {{ $categories->links() }}   
            </div>
        </div>
      
@endsection