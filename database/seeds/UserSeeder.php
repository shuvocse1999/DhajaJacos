<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
        foreach (range(1,10) as $index) {
        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
        ]);
    }
    }
}
