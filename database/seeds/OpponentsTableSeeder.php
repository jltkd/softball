<?php

use Illuminate\Database\Seeder;
use App\Opponent;
class OpponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opponent::truncate();

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Team($faker));

        for ($i = 0; $i < 10; $i++) {
            Opponent::create([
                'user_id'       => '1',
                'team_name'     => $faker->team,
                'coach_name'    => $faker->name,
                'coach_email'   => $faker->email,
                'coach_phone'   => $faker->phoneNumber,
                'field_address' => $faker->address,
                'field_number'  => $faker->numberBetween(1, 5),
                'notes'         => $faker->paragraph,
            ]);
        }
    }
}
