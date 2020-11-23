<?php

namespace Database\Seeders;

use App\Models\TicketSubject;
use Illuminate\Database\Seeder;

class TicketSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketSubject::factory()->count(100)->create();
    }
}
