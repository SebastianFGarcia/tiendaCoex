<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Area;
use App\Models\TypeContract;
use App\Models\Contract;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        DB::table('areas')->insert([
            [
                'name' => 'Administración',
                'description' => 'Administración de la empresa',
            ],
            [
                'name' => 'Desarrollo',
                'description' => 'Desarrollo de la empresa',
            ],
            [
                'name' => 'RRHH',
                'description' => 'Recursos Humanos de la empresa',
            ],
            [
                'name' => 'DevOps',
                'description' => 'DevOps de la empresa',
            ],
        ]);
        DB::table('type_contracts')->insert([
            [
                'name' => 'OPS',
            ],
            [
                'name' => 'Labor',
            ],
            [
                'name' => 'Termino Fijo',
            ],
            [
                'name' => 'Termino Indefinido',
            ],
            [
                'name' => 'Aprendizaje',
            ],
            [
                'name' => 'Ocasional',
            ]
        ]);
        Contract::factory(10)->create();
        Employee::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
