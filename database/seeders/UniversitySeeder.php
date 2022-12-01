<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; 

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('university')->insert([
        'id' => '1',
        'name' => '東京理科大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '2',
        'name' => '都立産技大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '3',
        'name' => '東京都立大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '4',
        'name' => '日本大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '5',
        'name' => '愛知総合工科高校',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '6',
        'name' => '九州大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '7',
        'name' => '徳島大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '8',
        'name' => '静岡理工科大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '9',
        'name' => '上智大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '10',
        'name' => '東北大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '12',
        'name' => '帝京大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '13',
        'name' => '名古屋大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '14',
        'name' => '電気通信大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('university')->insert([
        'id' => '15',
        'name' => '東京工業大学',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    }
}
