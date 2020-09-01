<?php

use Illuminate\Database\Seeder;
use App\Product;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ventas::class,8)->create();
    }
}

