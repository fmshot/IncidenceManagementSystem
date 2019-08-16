<?php

use Illuminate\Database\Seeder;

class FaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Fault::class,50)->create();

    }
}
