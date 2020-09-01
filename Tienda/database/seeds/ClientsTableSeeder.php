<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cliente::class,8)->create();
    }
}
