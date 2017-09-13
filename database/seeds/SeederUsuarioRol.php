<?php

use Illuminate\Database\Seeder;

class SeederUsuarioRol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolessistema')->insert(array(
            'nombre' => 'Administrador',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('rolessistema')->insert(array(
            'nombre' => 'Cliente',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
