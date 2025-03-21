<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ingreso al modulo Post que se conecta a la tabla posts
        $post = new Post();
        // Ingreso de datos a la tabla posts
        $post->titulo = 'Titulo de prueba';
        $post->slug = 'Slug de prueba unico';
        $post->contenido = 'Contenido de prueba';
        $post->categoria = 'Categoria de prueba';

        $post->save();

        // Creacion de 10 registros mas con datos aleatorios
        Post::factory(50)->create();

    }
}
