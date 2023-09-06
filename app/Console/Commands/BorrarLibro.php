<?php

namespace App\Console\Commands;

use App\Models\Libro;
use Illuminate\Console\Command;


class BorrarLibro extends Command
{

    protected $signature = 'borrarlibro {id}';
    protected $description = 'Borrar un libro por su ID';


    public function handle()
    {
        // Obtener los libros desde la base de datos
        $libros = Libro::all();

        if ($libros->isEmpty()) {
            $this->error('No hay libros para mostrar.');
            return;
        }

        $id = $this->argument('id');
        $libro = Libro::find($id);

        if (!$libro) {
            $this->error('Libro no encontrado.');
            return;
        }

        $libro->delete();
        $this->info('Libro eliminado correctamente.');
 
        return Command::SUCCESS;
    }

}
