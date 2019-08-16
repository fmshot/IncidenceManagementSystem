<?php

use Illuminate\Database\Seeder;

class AssetAllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Asset_allocation::class,50)->create();
    }
}
