<?php

use Illuminate\Database\Seeder;

class AudiTrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Audit_trail::class,50)->create();

    }
}
