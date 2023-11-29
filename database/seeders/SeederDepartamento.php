<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederDepartamento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\Departamentos::create([ 
            'codigo' => '001', 
            'nombre' => 'Sistemas', 
            'activo' => true, 
            'idUsuarioCreacion' => '1', 
        ]);
        
        \App\Models\Departamentos::create(['codigo' => '002', 
            'nombre' => 'Infraestructura', 
            'activo' => true, 
            'idUsuarioCreacion' => '2', 
        ]);
        
        \App\Models\Departamentos::create(['codigo' => '003', 
            'nombre' => 'Cloud', 
            'activo' => true, 
            'idUsuarioCreacion' => '3', 
        ]);
        
        \App\Models\Departamentos::create(['codigo' => '004', 
            'nombre' => 'Base de datos', 
            'activo' => true, 
            'idUsuarioCreacion' => '4', 
        ]);
    }
}
