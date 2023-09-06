<?php

namespace App\Console\Commands;

use App\Models\Libro;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class VerLibros extends Command
{

    protected $signature = 'verlibros';
    protected $description = 'Lista todos los libros';


    public function handle()
    {
        // Obtener los libros desde la base de datos
        $libros = Libro::all();

        if ($libros->isEmpty()) {
            $this->error('No hay libros para mostrar.');
            return;
        }

        // Preparar los datos para la tabla
        $data = [];
        foreach ($libros as $libro) {
            $data[] = [
                'ID' => $libro->id,
                'ISBN' => $libro->isbn,
                'Titulo' => $libro->title,
                'Autor' => $libro->author,
                'Precio' => $libro->price,
                'Fecha de Publicación' => $libro->publicationDate,
                'Genero' => $libro->gender,
            ];
        }

        // Mostrar la tabla en la consola
        $this->table(['ID', 'ISBN', 'Título', 'Autor', 'Precio', 'Fecha de Publicación', 'Género'], $data);

    }

}
