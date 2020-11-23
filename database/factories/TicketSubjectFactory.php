<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\TicketSubject;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketSubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TicketSubject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->realText(50),
            "priority"=>random_int(1,3),
            "description"=>$this->faker->realText(200),
            "fields"=>json_encode((config("answering.ticket_subjects_fields"))),
            "department_id"=>random_int(1,5)
        ];
    }
}
