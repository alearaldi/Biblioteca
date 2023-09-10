<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="slot">
        <div class="container w-80 py-3 text-center">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right text-center">
                        <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        
            @if ($errors->any())
                <div class="alert alert-danger">
                    There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            <form action="{{ route('libros.update', $libros->id) }}" name="libros" method="POST">
                @csrf
                @method('PUT')
        
                <div class="row py-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" name="isbn" value="{{ $libros->isbn }}" class="form-control" placeholder="Isbn">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $libros->title }}"  placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" value="{{ $libros->author }}" placeholder="Author">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="prie" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $libros->price }}" placeholder="Price">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="publicationDate" class="form-label">Publication Date</label>
                            <input type="date" class="form-control" name="publicationDate" value="{{ $libros->publicationDate }}" placeholder="Publication Date">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="Misterio" @if($libros->gender == 'Misterio') selected @endif>Misterio</option>
                                <option value="Ciencia ficción" @if($libros->gender == 'Ciencia ficción') selected @endif>Ciencia ficción</option>
                                <option value="Romance" @if($libros->gender == 'Romance') selected @endif>Romance</option>
                                <option value="Drama" @if($libros->gender == 'Drama') selected @endif>Drama</option>
                                <option value="Aventura" @if($libros->gender == 'Aventura') selected @endif>Aventura</option>
                                <option value="Acción" @if($libros->gender == 'Acción') selected @endif>Acción</option>
                                <option value="Terror" @if($libros->gender == 'Terror') selected @endif>Terror</option>
                                <option value="Histórico" @if($libros->gender == 'Histórico') selected @endif>Histórico</option>
                                <option value="Biografía" @if($libros->gender == 'Biografía') selected @endif>Biografía</option>
                                <option value="Filosofía" @if($libros->gender == 'Filosofía') selected @endif>Filosofía</option>
                                <option value="Política" @if($libros->gender == 'Política') selected @endif>Política</option>
                                <option value="Negocios" @if($libros->gender == 'Negocios') selected @endif>Negocios</option>
                                <option value="Autoayuda" @if($libros->gender == 'Autoayuda') selected @endif>Autoayuda</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center py-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        
            </form>
        </div>
    </x-slot>
</x-app-layout>

    
