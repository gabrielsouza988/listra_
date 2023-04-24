<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Faker\Factory as Faker;
class VehicleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Vehicle::factory(1)->create();
        $faker = Faker::create();
        $response = Http::get('https://vpic.nhtsa.dot.gov/api/vehicles/GetVehicleTypesForMake/merc?format=json');
        $vehicles = $response->json();
        $values = [];
        foreach ($vehicles['Results'] as $key => $vehicle) {
            $values[] = [
                'foto' => $faker->imageUrl(),
                'cidade' => $faker->city(),
                'marca' => $vehicle['MakeName'],
                'modelo' => $vehicle['MakeName'],
                'descrição' => $faker->text(100),
                'ano' => $faker->year,
                'quilometragem' => $faker->numerify(),
                'tipo' => $faker->randomElement($array = array('Automático', 'Manual')),
                'telefone' => $faker->phoneNumber,
                'valor' => $faker->randomNumber(6) / 100
            ];
        }
        \DB::table('vehicles')->insert($values);
    }
}
