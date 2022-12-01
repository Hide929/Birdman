<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; 

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('awards')->insert([
        'id' => '1',
        'name' => '滑空機部門',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('awards')->insert([
        'id' => '2',
        'name' => '人力プロペラ機ディスタンス部門',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        */
        
        DB::table('awards')->insert([
        'id' => '3',
        'name' => '人力プロペラ機タイムトライアル部門',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('awards')->insert([
        'id' => '4',
        'name' => '部門なし',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    }
}
