<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PathServicesSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(BillingAddressSeeder::class);
    }
}
