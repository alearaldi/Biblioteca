Aplicación CRUD Biblioteca en Laravel

Este repositorio contiene una aplicación CRUD desarrollada en el lenguaje de programación PHP utilizando el framework Laravel. La aplicación se llama "Biblioteca" y permite gestionar libros y autores a través de operaciones básicas como crear, leer, actualizar y eliminar (CRUD). Además, se ha utilizado el framework Bootstrap para mejorar la apariencia y la usabilidad de la interfaz de usuario.

Requisitos previos
Antes de comenzar con la instalación local del proyecto, asegúrate de tener instalados los siguientes componentes en tu sistema:

Docker: La aplicación utiliza Docker para crear un entorno de desarrollo consistente y aislado.
Instrucciones de instalación
Sigue los pasos a continuación para configurar y ejecutar la aplicación de Biblioteca en tu entorno local:

Clona el repositorio: Abre una terminal y ejecuta el siguiente comando para clonar este repositorio en tu máquina:


git clone https://github.com/alearaldi/Biblioteca.git
Accede al directorio del proyecto: Navega al directorio recién clonado:

Configuración del entorno: Abre el archivo .env Luego, configura las variables de entorno necesarias, como la configuración de la base de datos:

Levanta el contenedor Docker: Ejecuta el siguiente comando para construir y ejecutar el contenedor Docker:

docker-compose up -d

Instala las dependencias de PHP: Accede al contenedor Docker en el que se encuentra la aplicación:

docker-compose exec app bash

Luego, dentro del contenedor, instala las dependencias de PHP:

composer install

Genera la clave de la aplicación: Aún dentro del contenedor, genera una clave única para la aplicación Laravel:

php artisan key:generate

Ejecuta las migraciones: Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

php artisan migrate

Accede a la aplicación: Abre tu navegador web y visita http://localhost:{El puerto depende de tu configuracion} para acceder a la aplicación Biblioteca.

Uso de la aplicación
Una vez que hayas completado los pasos de instalación, podrás utilizar la aplicación para realizar operaciones CRUD en la gestión de libros. 
Explora las diferentes funciones y disfruta de la experiencia de gestión de una biblioteca en línea.

Para obtener todos los libros cargados en la base mediante la APi:
Debe ingresar http://localhost/api/libros lo que devolverá un JSON con todos los libros.

Para buscar un libro por su ID:
Puede configurar postman para manejar la Api, configurando un nuevo request con el metodo GET, su url sera:
http://localhost/api/V1/libros/9 donde el ultimo numero es el id del libro a buscar.

Para guardar un libro:
http://localhost:80/api/V1/libros
Puede configurar postman con el metodo POST, luego en los headers agregar "accept" value "aaplication/json" y en el body elegir metodo "raw" y luego mostrar como JSON, el formato para agregar libro es de la siguiente manera:

{
        "isbn": 8639,
        "title": "El arte",
        "author": "Sun Tzu",
        "price": "7.99",
        "publicationDate": "1910-01-01",
        "gender": "Drama"
}

Para actualizar un libro por su id (Recuerde que debe cambiar el isbn si desea cambiar algun otro dato como el titulo o el autor):
http://localhost/api/V1/libros/7
Utilizar PUT como método, configurar los headers en accept aaplication/json y el body en raw y mostrar como JSON el formato para actualizar libros:
{
        "isbn": 8639,
        "title": "El arte",
        "author": "Sun Tzu",
        "price": "7.99",
        "publicationDate": "1910-01-01",
        "gender": "Drama"
}

Para borrar un libro por su id:
http://localhost/api/V1/libros/7
Puede configurar postman con le metodo DELETE y pasarle la URL con el id que desea borrar.


Como usar la Linea de Comandos:
Recuerde siempre estar situado sobre la carpeta principal del proyecto, en este caso Biblioteca.

------- COMANDOS CLI: ------------


MOSTRAR TODOS LOS LIBROS:
php artisan verlibros

BORRAR LIBRO:
php artisan borrarlibro 9 ( el numero es el id del libro a borrar, lo puede buscar primero con el comando de verlibros )

AGREGAR LIBRO:
Debe ingresar todos los parametros en el siguiente orden, isbn, titulo, autor, precio, fecha de publicacion y género. ej:
php artisan agregarlibro "976" "El señor de los anillos" "Ale Araldi" "987.78" "2023-01-15" "Biografia"

ACTUALIZAR LIBRO:
Ej de como actualizar solo el titulo, el primer parametro es el id del libro que desea actualizar:
php artisan actualizarlibro 10 "" "Ale Araldi" ( Dejamos libre el primer parametro ya que es el isbn y no lo queremos cambiar )



Créditos
Esta aplicación ha sido desarrollada utilizando el framework Laravel y el framework Bootstrap para los estilos.

Licencia
Este proyecto se encuentra bajo la Licencia MIT. Puedes modificarlo y distribuirlo según tus necesidades.
