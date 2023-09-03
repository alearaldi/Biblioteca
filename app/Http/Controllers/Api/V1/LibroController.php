<?php
  
namespace App\Http\Controllers\Api\V1;
  
use App\Models\Libro;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLibroRequest;
use App\Http\Resources\LibroResource;
use Illuminate\Http\Request;
use Illuminate\View\View;
  
class LibroController extends Controller
{
    /**
     * Da una lista de los libros cargados
     */
    public function index(Request $request)
    {
        return LibroResource::collection(Libro::all());
    }
  
    /**
     * Graba nuevos libros validando los datos
     */
    public function store(Request $request)
    {
        $libro = Libro::create($request->all());
        return LibroResource::make($libro);
    }
  
    /**
     * Muestra lista de Libros
     */
    public function show(Libro $libro)
    {
       return LibroResource::make($libro);
    }
  
    /**
     * Actualiza libros
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        $data = $request->validate([
            'isbn' => 'required|unique:libros,isbn,' . $libro->id,
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'publicationDate' => 'required',
            'gender' => 'required'
        ]);
    
        $libro->update($data);
        return LibroResource::make($libro);
    }
  
    /**
     * Borra Libro
     */
    public function destroy($id)
    {

    }
}