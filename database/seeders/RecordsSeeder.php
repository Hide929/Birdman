<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; 

class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*---------------第1回-------------- */
        
        
         DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => '日本ハングライダー協会',
        'player_name' => '白井利宣',
        'Age' => '33',
        'distance' => '42.58 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => 'パート2',
        'player_name' => '山崎裕夫',
        'Age' => NULL,
        'distance' => '45.45 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => 'ふひふす',
        'player_name' => '太田豊地',
        'Age' => '23',
        'distance' => '46.18 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => '日本ハングライダー協会',
        'player_name' => '中村ヤスヲ',
        'Age' => '28',
        'distance' => '46.61 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => '日本ハングライダークラブ',
        'player_name' => '小野議鑑',
        'Age' => '27',
        'distance' => '48.78 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => 'マイティマウスブラザーズ',
        'player_name' => '遠藤晴生',
        'Age' => '24',
        'distance' => '49.14 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => '千葉大学航空宇宙研究会',
        'player_name' => '	宮沢芳明',
        'Age' => '24',
        'distance' => '53.78 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => '5ウイングス',
        'player_name' => '浅田幸三',
        'Age' => '29',
        'distance' => '	54.47 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
                
        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => 'なかよし',
        'player_name' => '池田省治',
        'Age' => '24',
        'distance' => '	54.51 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);

        DB::table('records')->insert([
        'year_id' => '1',
        'team_name' => '東京ハングライダークラブ',
        'player_name' => '岡　芳樹',
        'Age' => '30',
        'distance' => ' 82.44 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        

        /*---------------第2回-------------- */
        
                                                      
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => '三河ハング・とぼーね',
        'player_name' => '安藤連純',
        'Age' => '29',
        'distance' => '57.86 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                               
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => 'ハングライダーズクラブ＼マイティマウスブラザーズ',
        'player_name' => '佐竹政夫',
        'Age' => '29',
        'distance' => '60.22 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                        
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => 'スカイラブ',
        'player_name' => '坂本数夫',
        'Age' => '28',
        'distance' => '63.14 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => '日本スカイセーリング',
        'player_name' => '中村ヤスヲ',
        'Age' => '29',
        'distance' => '65.09 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => '日本ハンググライダー他',
        'player_name' => '管沼孝伸',
        'Age' => '29',
        'distance' => '65.27 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => 'ハヤシレイシング',
        'player_name' => 'Steve Mc Corkle',
        'Age' => '30',
        'distance' => '65.27 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => '高山スカイセーリング',
        'player_name' => '山内良治',
        'Age' => '28',
        'distance' => '65.70 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);  
                
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => '伊豆箱根フライヤーズクラブ',
        'player_name' => '菊池守男',
        'Age' => '30',
        'distance' => '65.95 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]); 
                
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => '日本スカイセーリングクラブ',
        'player_name' => '中戸川正幸',
        'Age' => '22',
        'distance' => '66.57 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '2',
        'team_name' => 'ニューウィングス',
        'player_name' => '大平英二',
        'Age' => '25',
        'distance' => '79.78 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        /*---------------第3回-------------- */
                        
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => 'レディーバード',
        'player_name' => '木下徹二',
        'Age' => '30',
        'distance' => '77.53 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => 'JEAA',
        'player_name' => '佐竹宗科',
        'Age' => '30',
        'distance' => '78.01 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => 'ピーターパンチャレンジスピリット',
        'player_name' => '田中伸二',
        'Age' => '22',
        'distance' => '80.66 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                        
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => '三河ハング',
        'player_name' => '安藤連純',
        'Age' => '24',
        'distance' => '82.44 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => '(カリフォルニア)',
        'player_name' => 'ロイ・ハガード',
        'Age' => '23',
        'distance' => '84.55 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                        
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => '玄海オガチとその一味',
        'player_name' => '川口良児',
        'Age' => '25',
        'distance' => '84.88 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => 'UPジャパンチーム',
        'player_name' => '外村仁克',
        'Age' => '26',
        'distance' => '84.88 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => '(カリフォルニア)',
        'player_name' => 'ピ―ト・ブロック',
        'Age' => '42',
        'distance' => '86.90 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => 'NEW WINGS',
        'player_name' => '大平英二',
        'Age' => '27',
        'distance' => '87.52 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);

        DB::table('records')->insert([
        'year_id' => '3',
        'team_name' => '日本自作航空機連盟',
        'player_name' => '島根俊夫',
        'Age' => '28',
        'distance' => '88.53 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);



        
    }
}
