<?php

use Illuminate\Database\Seeder;

class AssetGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Asset_group::class,50)->create();

    }
}
