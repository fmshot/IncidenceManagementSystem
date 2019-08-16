<?php

use Illuminate\Database\Seeder;

class AssetDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Asset_detail::class,50)->create();

    }
}
