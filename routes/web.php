<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//! Rutas con controladores
Route::get('/',HomeController::class);

/* Route::get('/posts',[PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create',[PostController::class, 'create'])
    ->name('posts.create');

Route::get('/posts/{id}',[PostController::class, 'show'])
    ->name('posts.show');

Route::post('/posts',[PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{id}/editar', [PostController::class, 'edit'])
    ->name('posts.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])
    ->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])
    ->name('posts.destroy'); */

 //~ Escribir esto es igual a escribir las 7 rutas de un CRUD (las de arriba)
Route::resource('articulos', PostController::class)->parameters(['articulos'=>'posts'])->names('posts');
    //? Crear todas menos   ->except(['destroy','update']); 
    //? Crear solo          ->only(['index','create','store']); 
    //? Crear solo          ->only(['index','create','store']); 
    //?Para crear solo las rutas para una api    Route::apiResource('posts', PostController::class);




// ? Ruta con parametro
// Route::get('/posts/{post}',[PostController::class, 'show']); 
// ? Ruta con parametro opcion
// Route::get('/posts/{post}/{categoria?}',[PostController::class, 'show']);
// Route::get('/prueba',function(){
//     //^ Crear registros
//     // $post = new Post;

//     // $post->titulo = 'MI pRImEr PoSt 2';
//     // $post->contenido = 'Contenido de mi primer post 2';
//     // $post->categoria = 'Categoria 2';

//     // $post->save(); 

//     // return $post;

//     //^ Leer registros
//     // No hace falta instancias la clase || como parametro del metodo find se le pasa el id que quieres buscar
//     /* $post = Post::find(4); */

//     // Encuentra primer registro que encuentre dentro de la columna categoria que coincida con 'Categoria 2' y lo guarda en la variable $post (Se guarda como objeto)
//     /* $post = Post::where('categoria','Categoria 2')->first(); */
//     //^ Actualizar registros
//     // Como objeto puedo acceder a sus propiedades (en este caso los campos del registro) y puedo modificarlos
//     /* $post->titulo = 'Titulo actualizado'; */
//     // Guardo los cambios
//     /* $post->save(); */

//     /* $post = Post::where('id','>=','5') //Buscar donde el id sea mayor o igual a 5
//                     ->select('id','titulo','categoria') // De lo encontrado, solo seleccionar los campos 'id','titulo','categoria'
//                     ->orderBy('categoria','desc') // Ordenar por categoria de forma descendente
//                     ->take(2) // De todos los enocntrados y ordenados, tomar solo 2 registros
//                     ->get(); // Mostrar los registros sleeccionados
//     return $post; */

//     //^ Eliminar registros
//     // $post = Post::find(15);
//     // $post->delete();
//     // return $post;

//     $user = User::find(10);
//     return $user; 
// });
//! Rutas con funciones anonimas
/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/cursos', function () {
    return "Aqui se mostraran los cursos";
}); */
//? Ruta con un parametro
/* Route::get('/cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: $curso";
}); */
//? Ruta con un parametro opcional y uno obligatorio
/* Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    
    if($categoria){
        return "Bienvenido al curso: $curso <br> En la categoria: $categoria"; 
    }else{
        return "Bienvenido al curso: $curso";
    }
}); */
//? Ruta con varios parametros
/* Route::get('/cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenido al curso: $curso <br> En la categoria: $categoria";
}); */

