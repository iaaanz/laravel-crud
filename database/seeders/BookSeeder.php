<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBooks;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBooks $book)
    {
        $book->create([
            'title'=>'O senhor dos anéis',
            'pages'=>'100',
            'price'=>'9.50',
            'id_user'=>'1'
        ]);

        $book->create([
            'title'=>'Céu azul',
            'pages'=>'250',
            'price'=>'50',
            'id_user'=>'2'
        ]);
        $book->create([
            'title'=>'As cronicas de narnia',
            'pages'=>'1000',
            'price'=>'250',
            'id_user'=>'2'
        ]);
    }
}
