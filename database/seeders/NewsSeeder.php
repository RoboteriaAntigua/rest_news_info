<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'title'=> 'Apagon en sierras chicas',
            'content'=> 'Se quedaron sin luz y ademas sin velas',
            'autor' => 'Joseph Barban'
        ]);
        DB::table('news')->insert([
            'title'=> 'Le robaron el cepillo',
            'content'=> 'El artilugio fue requerido para peinarce...',
            'autor' => 'Cindy Crafart'
        ]);
        DB::table('news')->insert([
            'title'=> 'Boca y River',
            'content'=> 'Aburrieron en un cero a cero con 22 amonestados y 7 expulsados',
            'autor' => 'Carlos Villagran'
        ]);
    }
}
