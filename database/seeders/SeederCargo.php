<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederCargo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Cargos::create([ 
            'codigo' => '001', 
            'nombre' => 'Desarrollador', 
            'activo' => true, 
            'idUsuarioCreacion' => '1', 
        ]);
        
        \App\Models\Cargos::create([ 
            'codigo' => '002', 
            'nombre' => 'Full Stack Developer', 
            'activo' => true, 
            'idUsuarioCreacion' => '1', 
        ]);
        
        \App\Models\Cargos::create([ 
            'codigo' => '003', 
            'nombre' => 'Full Stack BackEnd', 
            'activo' => true, 
            'idUsuarioCreacion' => '1', 
        ]);
        
        \App\Models\Cargos::create([ 
            'codigo' => '004', 
            'nombre' => 'Devops Azure', 
            'activo' => true, 
            'idUsuarioCreacion' => '1', 
        ]);
    }
}
