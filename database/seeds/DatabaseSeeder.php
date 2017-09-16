<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SeederUsuarioAdmin::class);
        $this->call(SeederTipoTelefono::class);
        $this->call(SeederUsuarioRol::class);
    }
}
