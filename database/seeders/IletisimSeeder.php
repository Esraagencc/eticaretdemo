<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class IletisimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<200;$i++){
            DB::table('iletisim')->insert([
                'name' => Str::random(10),
                'phone' => rand(1111111,99999999),
                'address' => Str::random(10),
            ]);
        }
    }
}
