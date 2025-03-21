<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamamos a las semilas externas que hayamos creado  
        //? php artisan db:seed  


       $this->call([
           UserSeeder::class,
           PostSeeder::class
       ]);

        //Se puede llamar a un factory desde aqui o desde su seeder, ya que de igual forma el seeder que lo ocntenja se ejecutara aqui
        // Post::factory(10)->create();

    }
}
