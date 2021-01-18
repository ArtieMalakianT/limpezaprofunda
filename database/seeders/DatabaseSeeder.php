<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('about')->insert([
            'copy' => '/storage/text/copy.txt',
            'link' =>  'link do vídeo',            
        ]);
        DB::table('banners')->insert([
            'path' => 'caminho do banner',            
        ]);
        DB::table('courses')->insert([
            'copy' => '/storage/text/course.txt',
            'path' => 'public/photos/foto.png',
            'link' => 'link do treinamento',
        ]);
        DB::table('parceiros')->insert([
            'copy' => '/storage/text/parceiros.txt',
            'img' => 'public/photos/foto.png',
            'cidades' => '/storage/text/cidades.txt',
        ]);
        DB::table('stores')->insert([
            'copy' => 'storage\text\store.txt',
            'img' => 'public/photos/foto.png',
            'link' => 'link da loja',
        ]);        
    }
}
