<?php
  
namespace App\Http\Controllers;
  
use App\Models\Libro;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class LibroController extends Controller
{
    /**
     * Da una lista de los libros cargados
     */
    public function index(Request $request)
    {
        // Si se espera una solicitud API, devuelvo JSON con los datos que quiero mostrar
        if ($request->expectsJson()) {
            $libros = Libro::select('isbn', 'title', 'author', 'price', 'publicationDate', 'gender')->get();  // aca puedo paginar de a 5 registros con paginate(5)
            return response()->json($libros);

        } else {
            // Si no se espera JSON, mostrar la vista con su paginación
            $libros = Libro::latest()->paginate(5);
            return view('libros.index', compact('libros'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }
  
    /**
     * Crea un nuevo libro
     */
    public function create(): View
    {
        return view('libros.create');
    }
  
    /**
     * Graba nuevos libros validando los datos
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'isbn' => 'required|unique:libros,isbn',
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'publicationDate' => 'required',
            'gender' => 'required'
        ]);
        // llama al modelo Libro y crea un nuevo registro
        Libro::create($request->all());
         
        return redirect()->route('libros.index')->with('success','Book created successfully.');
    }
  
    /**
     * Muestra lista de Libros
     */
    public function show($id): View
    {
        $libros = Libro::find($id);
        return view('libros.show', compact('libros'));
    }
  
    /**
     * Edita libros
     */
    public function edit($id): View
    {
        $libros = Libro::find($id);
        // dd($libros);
        return view('libros.edit', compact('libros'));
    }
  
    /**
     * Actualiza libros
     */
    public function update(Request $request, $isbn): RedirectResponse
    {
        $request->validate([
            'isbn' => 'required|unique:libros,isbn,'.$isbn,
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'publicationDate' => 'required|date',
            'gender' => 'required'
        ]);

        $libros = Libro::find($isbn);
        $libros->isbn = $request->input('isbn');
        $libros->title = $request->input('title');
        $libros->author = $request->input('author');
        $libros->price = $request->input('price');
        $libros->publicationDate = $request->input('publicationDate');
        $libros->gender = $request->input('gender');
        $libros->update();
        
        // dd($libros);
        return redirect()->route('libros.index')->with('success','Book updated successfully');
    }
  
    /**
     * Borra Libro
     */
    public function destroy($id): RedirectResponse
    {
        $libros = Libro::find($id);
        $libros->delete();
         
        return redirect()->route('libros.index')->with('success','Book deleted successfully');
    }
}