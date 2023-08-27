@extends('libros.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Book</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('libros.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isbn:</strong>
                <input type="text" name="isbn" class="form-control" placeholder="Isbn">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" class="form-control"  name="title" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                <input type="text" class="form-control"  name="author" placeholder="Author">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" class="form-control"  name="price" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publication Date:</strong>
                <input type="date" class="form-control"  name="publicationDate" placeholder="Publication Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <select name="gender">
                    <option value="Misterio" name="gender">Misterio</option>
                    <option value="Ciencia ficción" name="gender">Ciencia ficción</option>
                    <option value="Romance" name="gender">Romance</option>
                    <option value="Drama" name="gender">Drama</option>
                    <option value="Aventura" name="gender">Aventura</option>
                    <option value="Acción" name="gender">Acción</option>
                    <option value="Terror" name="gender">Terror</option>
                    <option value="Histórico" name="gender">Histórico</option>
                    <option value="Biografía" name="gender">Biografía</option>
                    <option value="Filosofía" name="gender">Filosofía</option>
                    <option value="Política" name="gender">Política</option>
                    <option value="Negocios" name="gender">Negocios</option>
                    <option value="Autoayuda" name="gender">Autoayuda</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection