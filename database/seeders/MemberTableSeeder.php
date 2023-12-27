<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('members')->insert([
        //     'name'=>'Md Shakil Ahmed',
        //     'email'=>'mdshakilahmed823@gmail.com',
        //     'password'=>bcrypt('43341863')
        // ]);

        // DB::table('members')->insert([
        //     'name'=>'Md Shakil Ahmed Joy',
        //     'email'=>'mdshakilahmedjoy823@gmail.com',
        //     'password'=>bcrypt('43341863')
        // ]);

        $members = [
            [
                'name'=>'Md Tanvir Ahmed',
                'email'=>'tanvir@gmail.com',
                'password'=>bcrypt('43341863')
    
            ],
            [
                'name'=>'Md Udoy Ahmed',
                'email'=>'udoy@gmail.com',
                'password'=>bcrypt('43341863')
    
            ]
        ];
        DB::table('members')->insert($members);
    }
}
