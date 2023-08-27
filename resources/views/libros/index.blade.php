@extends('libros.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Library</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('libros.create') }}"> Create New Book</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Isbn</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Publication Date</th>
            <th>Gender</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->isbn }}</td>
            <td>{{ $libro->title }}</td>
            <td>{{ $libro->author }}</td>
            <td>{{ $libro->price }}</td>
            <td>{{ $libro->publicationDate }}</td>
            <td>{{ $libro->gender }}</td>
            <td>
                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('libros.show',$libro->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('libros.edit',$libro->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $libros->links() !!}
      
@endsection