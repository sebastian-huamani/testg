<h1 align="center"> Despues de un clone </h1>
<p align="center"> Despues de clonar un repositorio de laravel necesitaremos hacer algunos pasos adicionales para que todo valla bien. </p>



### Comandos:

```sh
- npm install
- composer install
- cp .env.example .env
- php artisan key:generate
```

Para generar la relacion entre la carpeta public/storage/ y la carpeta storage/app/public debes ejecutar el siguiente comando:
```sh
php artisan storage:link
```
y para finalizar actualizamos la base de datos:

```sh
- php artisan migrate --seed
- php artisan serve
- npm run dev
```
<br>
