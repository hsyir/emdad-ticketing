<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        (new DepartmentSeeder())->run();
        (new TicketSubjectSeeder())->run();
        (new UsersSeeder())->run();
        (new CitySeeder())->run();
        (new OfficeSeeder())->run();
    }
}
