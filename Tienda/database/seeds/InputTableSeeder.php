<?php

use Illuminate\Database\Seeder;
use App\Input;

class InputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Input::class,8)->create();
    }
}
