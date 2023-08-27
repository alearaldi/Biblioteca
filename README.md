Aplicación CRUD Biblioteca en Laravel
Este repositorio contiene una aplicación CRUD desarrollada en el lenguaje de programación PHP utilizando el framework Laravel. La aplicación se llama "Biblioteca" y permite gestionar libros y autores a través de operaciones básicas como crear, leer, actualizar y eliminar (CRUD). Además, se ha utilizado el framework Bootstrap para mejorar la apariencia y la usabilidad de la interfaz de usuario.

Requisitos previos
Antes de comenzar con la instalación local del proyecto, asegúrate de tener instalados los siguientes componentes en tu sistema:

Docker: La aplicación utiliza Docker para crear un entorno de desarrollo consistente y aislado.
Instrucciones de instalación
Sigue los pasos a continuación para configurar y ejecutar la aplicación de Biblioteca en tu entorno local:

Clona el repositorio: Abre una terminal y ejecuta el siguiente comando para clonar este repositorio en tu máquina:

bash
Copy code
git clone https://github.com/tuusuario/biblioteca-laravel.git
Accede al directorio del proyecto: Navega al directorio recién clonado:

bash
Copy code
cd biblioteca-laravel
Configuración del entorno: Duplica el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno necesarias, como la configuración de la base de datos:

bash
Copy code
cp .env.example .env
Levanta el contenedor Docker: Ejecuta el siguiente comando para construir y ejecutar el contenedor Docker:

bash
Copy code
docker-compose up -d
Instala las dependencias de PHP: Accede al contenedor Docker en el que se encuentra la aplicación:

bash
Copy code
docker-compose exec app bash
Luego, dentro del contenedor, instala las dependencias de PHP:

bash
Copy code
composer install
Genera la clave de la aplicación: Aún dentro del contenedor, genera una clave única para la aplicación Laravel:

bash
Copy code
php artisan key:generate
Ejecuta las migraciones: Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

bash
Copy code
php artisan migrate
Accede a la aplicación: Abre tu navegador web y visita http://localhost:8000 para acceder a la aplicación Biblioteca.

Uso de la aplicación
Una vez que hayas completado los pasos de instalación, podrás utilizar la aplicación para realizar operaciones CRUD en la gestión de libros y autores. Explora las diferentes funciones y disfruta de la experiencia de gestión de una biblioteca en línea.

Créditos
Esta aplicación ha sido desarrollada utilizando el framework Laravel y el framework Bootstrap para los estilos.

Licencia
Este proyecto se encuentra bajo la Licencia MIT. Puedes modificarlo y distribuirlo según tus necesidades.

¡Disfruta utilizando la aplicación Biblioteca en Laravel! Si tienes alguna pregunta o problema, no dudes en crear un issue en este repositorio.