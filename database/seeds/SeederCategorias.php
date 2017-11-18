<?php

use Illuminate\Database\Seeder;

class SeederCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert(array(
            'nombre' => 'Arquitectura',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('categoria')->insert(array(
            'nombre' => 'Diseño Gráfico',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('categoria')->insert(array(
            'nombre' => 'Desarrollo Web',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
