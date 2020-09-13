<?php

use Illuminate\Database\Seeder;
use App\Output;

class OutputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Output::class,8)->create();
    }
}
