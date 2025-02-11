<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Alunoineitor')->insert([
            'nome' => 'Carlos Silva',
            'curso' => 'Engenharia de Software',
            'periodo' => 1, 
            'ano_matricula' => 2023,
            'mes_matricula' => 3, 
            'dia_matricula' => 15,
            'status_matricula' => 'Ativo'
        ]);
        
        DB::table('Alunoineitor')->insert([
            'nome' => 'Ana Oliveira',
            'curso' => 'Medicina',
            'periodo' => 2, 
            'ano_matricula' => 2022,
            'mes_matricula' => 2,
            'dia_matricula' => 10,
            'status_matricula' => 'Ativo'
        ]);

        DB::table('Alunoineitor')->insert([
            'nome' => 'João Pereira',
            'curso' => 'Arquitetura',
            'periodo' => 3, 
            'ano_matricula' => 2021,
            'mes_matricula' => 8, 
            'dia_matricula' => 5,
            'status_matricula' => 'Ativo'
        ]);
        
        DB::table('Alunoineitor')->insert([
            'nome' => 'Mariana Santos',
            'curso' => 'Psicologia',
            'periodo' => 1,
            'ano_matricula' => 2024,
            'mes_matricula' => 1, 
            'dia_matricula' => 20,
            'status_matricula' => 'Ativo'
        ]);

        DB::table('Alunoineitor')->insert([
            'nome' => 'Felipe Souza',
            'curso' => 'Direito',
            'periodo' => 2, 
            'ano_matricula' => 2023,
            'mes_matricula' => 5, 
            'dia_matricula' => 30,
            'status_matricula' => 'Ativo'
        ]);

       
        DB::table('Alunoineitor')->insert([
            'nome' => 'Paula Lima',
            'curso' => 'Engenharia de Software',
            'periodo' => 1,  
            'ano_matricula' => 2023,
            'mes_matricula' => 6, 
            'dia_matricula' => 22,
            'status_matricula' => 'Ativo'
        ]);

        DB::table('Alunoineitor')->insert([
            'nome' => 'Luiz Costa',
            'curso' => 'Medicina',
            'periodo' => 7,  
            'ano_matricula' => 2022,
            'mes_matricula' => 4,
            'dia_matricula' => 12,
            'status_matricula' => 'Ativo'
        ]);

  
        
        DB::table('Alunoineitor')->insert([
            'nome' => 'Rafael Costa',
            'curso' => 'Psicologia',
            'periodo' => 1, 
            'ano_matricula' => 2024,
            'mes_matricula' => 2, 
            'dia_matricula' => 10,
            'status_matricula' => 'Ativo'
        ]);

        
    }
}
