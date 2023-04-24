<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle;
use Faker\Provider\Fakecar;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();

        return [
            'foto' => $this->faker->imageUrl(),
            'cidade' => $this->faker->city(),
            'marca' => $this->faker->vehicleBrand,
            'modelo' => $this->faker->vehicle,
            'descrição' => $this->faker->text(100),
            'ano' => $this->faker->year,
            'quilometragem' => $this->faker->numerify(),
            'tipo' => $this->faker->vehicleGearBoxType,
            'telefone' => $this->faker->phoneNumber,
            'valor' => $this->faker->randomNumber(6) / 100
        ];
    }
}
