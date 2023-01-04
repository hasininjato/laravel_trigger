<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_registration' => 13,
            'lastname' => "RAJOELINA",
            'firstname' => "Andry Nirina",
            'sex' => 'Masculin',
            'birthday' => '1970-06-11',
            'place_birth' => 'Ambatobe'
        ];
    }
}
