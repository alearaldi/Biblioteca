<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="slot">
        <div class="container w-80">
            <div class="row py-3 text-center">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="row">
                <div class="alert alert-danger col-lg-12 col-xs-12 col-xl-12">
                    There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="container"> 
                <form action="{{ route('libros.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="isbn" class="form-label">ISBN</label>
                      <input type="text" class="form-control" name="isbn" aria-describedby="isbn">
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" aria-describedby="title">
                    </div>
                    <div class="mb-3">
                      <label for="author" class="form-label">Author</label>
                      <input type="text" class="form-control" name="author" aria-describedby="author">
                    </div>
                    <div class="mb-3">
                      <label for="prie" class="form-label">Price</label>
                      <input type="text" class="form-control" name="price" aria-describedby="prie">
                    </div>
                    <div class="mb-3">
                      <label for="publicationDate" class="form-label">Publication Date</label>
                      <input type="date" class="form-control" name="publicationDate" aria-describedby="publicationDate">
                    </div>
                    <div class="mb-3">
                      <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-select">
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
                    <div class="row py-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>
