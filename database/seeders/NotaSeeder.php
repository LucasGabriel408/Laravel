<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table("notas")->insert([
            'titulo' => 'Exemplificação',
            'texto' => 'Exemplo nota 1',
        ]);
        
        DB::table("notas")->insert([
            'titulo' => 'Exemplificação',
            'texto' => 'Exemplo nota 2',
        ]);
    }
}