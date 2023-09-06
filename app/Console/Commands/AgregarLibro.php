<?php

namespace App\Console\Commands;

use App\Models\Libro;
use Illuminate\Console\Command;


class AgregarLibro extends Command
{

    protected $signature = 'agregarlibro {isbn} {title} {author} {price} {publicationDate} {gender}';
    protected $description = 'Agrega un libro / parametros obligatorios: isbn, title, author, price, publication date, gender';


    public function handle()
    {

      $isbn = $this->argument('isbn');
      $title = $this->argument('title');
      $author = $this->argument('author');
      $price = $this->argument('price');
      $publicationDate = $this->argument('publicationDate');
      $gender = $this->argument('gender');
      $libro = new Libro();
      $libro->isbn = $isbn;
      $libro->title = $title;
      $libro->author = $author;
      $libro->price = $price;
      $libro->publicationDate = $publicationDate;
      $libro->gender = $gender;

      $libro->save();
      $this->info('Libro agregado correctamente.');
  }
}


