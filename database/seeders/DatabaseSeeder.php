<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;
use Faker\Factory as Faker;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //Seed the application's database.
    public function run(): void
    {
        // $this->call(MemberTableSeeder::class);

        $faker = Faker::create();
        // foreach(range(1, 10) as $index){
        for ($i = 1; $i < 10; $i++) {
            // DB::table('members')->insert([
            //     'name' => Str::random(10),
            //     'email' => Str::random(15).'@gmail.com',
            //     'password' => Hash::make('password'),
            // ]);
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => bcrypt('password'),
            ]);
        };
    }
}
