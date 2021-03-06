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
        $this->call(ReportsReferenceSeeder::class);
        $this->call(AdminUser::class);
        $this->call(DiseasesSeeder::class);
    }
}
