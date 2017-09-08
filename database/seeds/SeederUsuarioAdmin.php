<?php

use Illuminate\Database\Seeder;

class SeederUsuarioAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'nombre'=>'German',
            'apellido'=>'Hernández',
            'fechaDeNacimiento'=>'18/12/1993',
            'resetPassword'=>'0',
            'email'=>'gdhernandezp@gmail.com',
            'password'=>bcrypt('germanciber'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('rolessistemausuario')->insert(array(
            'idRolSistema'=>'1',
            'idUsuario'=>'1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
