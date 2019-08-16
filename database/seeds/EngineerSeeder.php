<?php

use Illuminate\Database\Seeder;

class EngineerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Engineer::class,50)->create();

    }
}
