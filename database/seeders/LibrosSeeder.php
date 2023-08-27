<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $isbn = ['978','983','849','974','798', '8765', '9876', '1234', '5678', '9876'];
        $title = ['El señor de los anillos', 'El hobbit', 'El silmarillion', 'El arte de la guerra', 'El principito', 'El señor de los anillos', 'El hobbit', 'El silmarillion', 'El arte de la guerra', 'El principito'];
        $author = ['J.R.R. Tolkien', 'J.R.R. Tolkien', 'J.R.R. Tolkien', 'Sun Tzu', 'Antoine de Saint-Exupéry', 'J.R.R. Tolkien', 'J.R.R. Tolkien', 'J.R.R. Tolkien', 'Sun Tzu', 'Antoine de Saint-Exupéry'];
        $price = [10.99, 9.99, 8.99, 7.99, 6.99, 10.99, 9.99, 8.99, 7.99, 6.99];
        $publicationDate = ['1954-07-29', '1937-09-21', '1977-09-15', '1910-01-01', '1943-04-06', '1954-07-29', '1937-09-21', '1977-09-15', '1910-01-01', '1943-04-06'];
        $gender = ['Misterio', 'Ciencia ficción', 'Romance', 'Drama', 'Aventura', 'Acción', 'Terror', 'Histórico', 'Biografía', 'Filosofía'];

        for ($i = 0; $i < count($isbn); $i++) {
            DB::table('libros')->insert([
                'isbn' => $isbn[$i],
                'title' => $title[$i],
                'author' => $author[$i],
                'price' => $price[$i],
                'publicationDate' => $publicationDate[$i],
                'gender' => $gender[$i],
            ]);
        }
    }
}
