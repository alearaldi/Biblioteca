<?php

namespace App\Console\Commands;

use App\Models\Libro;
use Illuminate\Console\Command;


class ActualizarLibro extends Command
{

    protected $signature = 'actualizarlibro {id} {isbn?} {title?} {author?} {price?} {publicationDate?} {gender?}';
    protected $description = 'Actualizar un libro por su id / parametros opcionales: isbn, title, author, price, publication date, gender';


    public function handle()
    {
      $id = $this->argument('id');
      $libro = Libro::find($id);

      if (!$libro) {
          $this->error('Libro no encontrado.');
          return;
      }

      $isbn = $this->argument('isbn');
      $title = $this->argument('title');
      $author = $this->argument('author');
      $price = $this->argument('price');
      $publicationDate = $this->argument('publicationDate');
      $gender = $this->argument('gender');

      if ($isbn) {$libro->isbn = $isbn;}
      if ($title) {$libro->title = $title;}
      if ($author) {$libro->author = $author;}
      if ($price) {$libro->price = $price;}
      if ($publicationDate) {$libro->publicationDate = $publicationDate;}
      if ($gender) {$libro->gender = $gender;}

      $libro->save();
      $this->info('Libro actualizado correctamente.');
  }
}


