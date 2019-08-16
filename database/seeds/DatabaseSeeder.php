<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);

        $this->call(AssetAllocationSeeder::class);
        $this->call(AssetDetailSeeder::class);
        $this->call(AssetGroupSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(AudiTrailSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(\EngineerSeeder::class);
//        $this->call(\FaultSeeder::class);






        //factory(App\Model\Asset_allocation::class,50)->create();
    }
}
