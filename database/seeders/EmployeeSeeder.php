<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        
        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Apple',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Google',
        'phone'=>Str::random(10)],
        
        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Apple',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Goole',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'hp',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'infosys',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Wipro',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'IBM',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'IBM',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'infosys',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Google',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Wipro',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'Apple',
        'phone'=>Str::random(10)],

        ['firstName'=>Str::random(6),
        'lastName'=>Str::random(6),
        'email'=>Str::random(10).'@gmail.com',
        'company'=>'infosys',
        'phone'=>Str::random(10)],

        ]);
    }
}
