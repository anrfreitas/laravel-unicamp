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
        factory(App\cliente::class, 10)->create(); //run it for 10 times... (model::class, times)->create()
    }
}
