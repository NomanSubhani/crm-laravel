<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            ['name'=>'Apple',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/a/a5/Apple_gray_logo.png',
            'website'=>Str::random(10)],
            
            ['name'=>'Google',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/7/74/Google_Chrome_Logo.jpg',
            'website'=>Str::random(10)],
            
            ['name'=>'IBM',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/f/fc/IBM_logo_in.jpg',
            'website'=>Str::random(10)],

            ['name'=>'Microsoft',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/8/8b/Microsoft_logo_%282012%29_modified.png',
            'website'=>Str::random(10)],

            ['name'=>'hp',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/0/04/HP_PhotoSmart_SDIO_Kamera.jpg',
            'website'=>Str::random(10)],

            ['name'=>'Wipro',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/1/1b/Wipro_Logo.png',
            'website'=>Str::random(10)],

            ['name'=>'infosys',
            'email'=>Str::random(10).'@gmail.com',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/6/6f/Logo_of_Infosys_BPM.jpg',
            'website'=>Str::random(10)]

            ]);

    }
}