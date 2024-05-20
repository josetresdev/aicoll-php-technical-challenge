<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Company::create([
                'name' => $faker->company,
                'nit' => $faker->unique()->numerify('##########'), // Generate a 10 digit NIT
                'status' => $faker->randomElement(['active', 'inactive']),
            ]);
        }
    }
}
