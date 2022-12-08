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
        
        
        //第2回
                                                      
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
        
        //第3回
                        
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
        
        

        //第4回
                
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => NULL,
        'player_name' => 'ジョージ・フォールマン',
        'Age' => '25',
        'distance' => '	73.86 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => 'レインボー',
        'player_name' => '内藤重男',
        'Age' => '26',
        'distance' => '75.53 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => 'NEW WINGS',
        'player_name' => '大平英二',
        'Age' => '28',
        'distance' => '76.93 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => '伊豆箱根フライヤーズ',
        'player_name' => '藤田直己',
        'Age' => '30',
        'distance' => '77.77 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => '日本スカイセーリングクラブ', 
        'player_name' => '中村ヤスヲ',
        'Age' => '31',
        'distance' => '79.72 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => 'JEAA-JABAL',
        'player_name' => '佐竹宗科',
        'Age' => '13',
        'distance' => '81.40 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => 'スポーツクラブLINK',
        'player_name' => '田下　茂',
        'Age' => '30',
        'distance' => '89.16 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                        
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => NULL,
        'player_name' => '図師　理',
        'Age' => '27',
        'distance' => '90.35 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => '九州大学鳥人間製作チーム',
        'player_name' => '神宝圭一',
        'Age' => '21',
        'distance' => '92.64 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        
        DB::table('records')->insert([
        'year_id' => '4',
        'team_name' => '日大駿河台航空研究会',
        'player_name' => '鈴木正人',
        'Age' => '21',
        'distance' => '101.60 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        
        
        //第5回
        
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => '高山スカイセーリング',
        'player_name' => '村田識光',
        'Age' => '24',
        'distance' => '73.37 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '田村　学',
        'Age' => '21',
        'distance' => '75.43 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => 'ニューウィングス',
        'player_name' => '森本兼司',
        'Age' => '26',
        'distance' => '75.92 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                               
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '斉藤千史',
        'Age' => '20',
        'distance' => '77.48 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                       
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => NULL,
        'player_name' => '山本　隆',
        'Age' => '28',
        'distance' => '80.92 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                               
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => '九州大学鳥人間製作チーム',
        'player_name' => '上原康生',
        'Age' => '23',
        'distance' => '82.71 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                       
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => '日本自作航空機連盟',
        'player_name' => '高橋　真',
        'Age' => '29',
        'distance' => '88.01 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                               
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => NULL,
        'player_name' => '矢吹　博',
        'Age' => '31',
        'distance' => '88.56 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                       
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => NULL,
        'player_name' => '桑原政彰',
        'Age' => '26',
        'distance' => '90.19 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                              
        DB::table('records')->insert([
        'year_id' => '5',
        'team_name' => '車山ハンググライディングクラブ',
        'player_name' => '菊池守男',
        'Age' => '33',
        'distance' => '95.83 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        
        
        //第6回
                                                                      
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => '日本航空研究会',
        'player_name' => '鈴木　正人',
        'Age' => '22',
        'distance' => '86.83 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                              
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => NULL,
        'player_name' => '楠　正彰',
        'Age' => '27',
        'distance' => '89.29 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                              
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => '関西ハンググライダー',
        'player_name' => '小池　秀己',
        'Age' => '21',
        'distance' => '90.95 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                      
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => '車山ハンググライディングクラブ',
        'player_name' => '菊池　守男',
        'Age' => '33',
        'distance' => '96.47 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                              
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => 'ウラワ・フライング・オルフェ',
        'player_name' => '糸谷　浩',
        'Age' => '27',
        'distance' => '100.50 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                      
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => '高山スカイセーリング',
        'player_name' => '村田　識光',
        'Age' => '25',
        'distance' => '100.70 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                              
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => NULL,
        'player_name' => '大平　英二',
        'Age' => '30',
        'distance' => '103.40 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                              
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => 'S.Dフックイン',
        'player_name' => '高見　恭司',
        'Age' => '20',
        'distance' => '121.40 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => '九州大学鳥人間製作チーム',
        'player_name' => '大渕　哲',
        'Age' => '23',
        'distance' => '139.70 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '6',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '村山　智彦',
        'Age' => '19',
        'distance' => '144.00 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第7回
                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => NULL,
        'player_name' => '楠　正彰',
        'Age' => '28',
        'distance' => '	114.22 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => 'N82会',
        'player_name' => '山田　誠',
        'Age' => '20',
        'distance' => '114.67 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => NULL,
        'player_name' => '長嶋正義',
        'Age' => '27',
        'distance' => '122.28 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => 'シオダフライングクラブ',
        'player_name' => '金子政彦',
        'Age' => '21',
        'distance' => '125.95 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => '鳥人間になる会',
        'player_name' => '吉田荘一',
        'Age' => '19',
        'distance' => '130.98 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => 'セシリア会',
        'player_name' => '福森啓太',
        'Age' => '25',
        'distance' => '133.95 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => 'レインボーフライングクラブ',
        'player_name' => '糸谷　浩',
        'Age' => '28',
        'distance' => '136.81 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => '九州大学バードマンチーム',
        'player_name' => '甲斐　学',
        'Age' => '22',
        'distance' => '137.68 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '大貫正明',
        'Age' => '21',
        'distance' => '139.71 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '7',
        'team_name' => '日本フライングクラブ',
        'player_name' => '岡崎利彦',
        'Age' => '25',
        'distance' => '162.62 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第8回
                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '秋田フライングクラブ',
        'player_name' => '立石　勉',
        'Age' => '36',
        'distance' => '108.63 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '‘84鳥人間になる会',
        'player_name' => '中尾邦雄',
        'Age' => '32',
        'distance' => '110.14 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '大貫正明',
        'Age' => '20',
        'distance' => '112.80 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => 'Aeroscepsy',
        'player_name' => '鈴木正人',
        'Age' => '25',
        'distance' => '114.83 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '群馬ハンググライダー連盟',
        'player_name' => '大川泰右',
        'Age' => '36',
        'distance' => '115.19 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '九州大学バードマンチーム',
        'player_name' => '木船一晶',
        'Age' => '21',
        'distance' => '122.15 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '豊田飛行愛好会',
        'player_name' => '石本　豪',
        'Age' => '26',
        'distance' => '133.36 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => 'N-‘83',
        'player_name' => '山田　誠',
        'Age' => '21',
        'distance' => '142.83 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => '三鷹青年団体連絡協議会内アドベンチャーグループ',
        'player_name' => '加藤信男',
        'Age' => '33',
        'distance' => '150.45 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '8',
        'team_name' => NULL,
        'player_name' => '楠　正彰',
        'Age' => '29',
        'distance' => '163.03 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第9回
                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '浜松フライングクラブチームTON・DOL',
        'player_name' => '有賀増栄',
        'Age' => '33',
        'distance' => '114.27 m',
        'award_id' => '4',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => 'POINT ONE MILE',
        'player_name' => '柴野敏彦',
        'Age' => '31',
        'distance' => '126.71 m',
        'award_id' => '4',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '第一工業大学航空機設計研究部',
        'player_name' => '林　直明',
        'Age' => '21',
        'distance' => '132.21 m',
        'award_id' => '4',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '三鷹航空宇宙技術研究会',
        'player_name' => '清水公彦',
        'Age' => '31',
        'distance' => '133.24 m',
        'award_id' => '4',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => NULL,
        'player_name' => '楠　正影',
        'Age' => '30',
        'distance' => '142.82 m',
        'award_id' => '4',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '31',
        'distance' => '156.62 m',
        'award_id' => '4',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => 'Aerocepsy',
        'player_name' => '鈴木正人',
        'Age' => '26',
        'distance' => '159.66 m',
        'award_id' => '4',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '三鷹アドベンチャーグループ',
        'player_name' => '加藤信男',
        'Age' => '34',
        'distance' => '190.88 m',
        'award_id' => '4',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '茂原市フリーフライト',
        'player_name' => '木島明良',
        'Age' => '26',
        'distance' => '214.51 m',
        'award_id' => '4',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' => '豊田飛行愛好会',
        'player_name' => '石本　豪',
        'Age' => '27',
        'distance' => '290.45 m',
        'award_id' => '4',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第10回
                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '千葉大学航空宇宙研究会',
        'player_name' => '近　敏幸',
        'Age' => '24',
        'distance' => '72.56 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '三鷹航空宇宙技術研究会',
        'player_name' => '清水公彦',
        'Age' => '32',
        'distance' => '88.93 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '北海道工業大学 航空学術研究部',
        'player_name' => '工藤寛之',
        'Age' => '21',
        'distance' => '91.00 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '総和スカイクラブ',
        'player_name' => '遠藤伸市',
        'Age' => '27',
        'distance' => '99.98 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '法政大学航空工学研究会',
        'player_name' => '今泉洋行',
        'Age' => '20',
        'distance' => '100.27 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '32',
        'distance' => '104.97 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => '群馬ハンググライダー連盟',
        'player_name' => '大川泰右',
        'Age' => '38',
        'distance' => '125.11 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' => 'チームアルバトロス',
        'player_name' => '金子　斉',
        'Age' => '23',
        'distance' => '152.99 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' =>  NULL,
        'player_name' => '楠　正彰',
        'Age' => '31',
        'distance' => '154.26 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                     
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' =>  'POINT ONE MILE',
        'player_name' => '柴野敏彦',
        'Age' => '32',
        'distance' => '158.38 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                             
        DB::table('records')->insert([
        'year_id' => '10',
        'team_name' =>  '武生イラチカブンブン飛ばそう会',
        'player_name' => '能米昭一郎',
        'Age' => '25',
        'distance' => '37.45 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  'コンパス会',
        'player_name' => '中山　浩典',
        'Age' => '26',
        'distance' => '38.70 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  'フライングX',
        'player_name' => '吉開正志',
        'Age' => '30',
        'distance' => '51.33 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  '神奈川大学航空工学研究部',
        'player_name' => '徳田真章',
        'Age' => '21',
        'distance' => '52.35 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  '浜松フライングチームTONDOL',
        'player_name' => '有賀増栄',
        'Age' => '34',
        'distance' => '66.03 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  '‘86バードマンクラブ',
        'player_name' => '住野　匡',
        'Age' => '27',
        'distance' => '79.90 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  '日本大学理工学部航空研究会',
        'player_name' => '上田　稔',
        'Age' => '20',
        'distance' => '90.27 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  '超人会人力飛行機分科会',
        'player_name' => '磯部正信',
        'Age' => '29',
        'distance' => '165.92 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  'Team Aeroscepsy',
        'player_name' => '鈴木正人',
        'Age' => '27',
        'distance' => '286.12 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        DB::table('records')->insert([
        'year_id' => '9',
        'team_name' =>  'Team Aeroscepsy',
        'player_name' => '田中紀彦',
        'Age' => '27',
        'distance' => '512.20 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第11回
                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => '日本電熱',
        'player_name' => '高橋定伸',
        'Age' => '25',
        'distance' => '91.78 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => NULL,
        'player_name' => '野田保人',
        'Age' => '59',
        'distance' => '96.24 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => '九州大学鳥人間チーム',
        'player_name' => '河端道郎',
        'Age' => '21',
        'distance' => '109.42 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                             
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => NULL,
        'player_name' => '楠　正彰',
        'Age' => '32',
        'distance' => '114.61 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                     
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => '三鷹アドベンチャーグループ',
        'player_name' => '加藤信男',
        'Age' => '35',
        'distance' => '137.28 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                             
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '32',
        'distance' => '137.66 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                     
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => 'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '39',
        'distance' => '137.67 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                             
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => '早稲田大学宇宙航空研究会WASA',
        'player_name' => '田村光雄',
        'Age' => '19',
        'distance' => '144.00 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => 'TEAM CUMULUS',
        'player_name' => '福森啓太',
        'Age' => '28',
        'distance' => '156.00 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' => '茂原市フリーライト',
        'player_name' => '木島明良',
        'Age' => '27',
        'distance' => '176.71 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  'フライングX',
        'player_name' => '片倉　稔',
        'Age' => NULL,
        'distance' => '20.85 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  NULL,
        'player_name' => '大岡勝男',
        'Age' => '26',
        'distance' => '21.37 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  NULL,
        'player_name' => '矢島靖英',
        'Age' => '38',
        'distance' => '22.04 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  'スカイクラブ（広島ハンググライダークラブ）',
        'player_name' => '杉山　彰',
        'Age' => '40',
        'distance' => '28.64 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  '彦根バードマンD51クラブ',
        'player_name' => '林　正',
        'Age' => '38',
        'distance' => '31.34 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  '川崎重工業（株）コンパス会',
        'player_name' => '中山　浩典',
        'Age' => '26',
        'distance' => '39.22 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  '屋根裏飛行倶楽部',
        'player_name' => '住野　匡',
        'Age' => '28',
        'distance' => '49.06 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  '日本航空鳥人間クラブ(BIRDS)',
        'player_name' => '渡辺泰幸',
        'Age' => '23',
        'distance' => '70.19 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  '武生イラチカブンブン飛ばそう会',
        'player_name' => '渉谷　勉',
        'Age' => '25',
        'distance' => '81.77 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '11',
        'team_name' =>  '日本大学理工学部航空研究会',
        'player_name' => '上田　稔',
        'Age' => '21',
        'distance' => '435.56 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第12回
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  'KEEPサークル(勤労青年ホームOB)',
        'player_name' => '浅　秀喜',
        'Age' => '28',
        'distance' => '61.20 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  '熊本工業大学鳥人間同好会',
        'player_name' => '吉武新一',
        'Age' => '24',
        'distance' => '101.40 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  NULL,
        'player_name' => '野田保人',
        'Age' => '60',
        'distance' => '130.70 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  '北海道工業大学航空学術研究所',
        'player_name' => '乾　貫行',
        'Age' => '20',
        'distance' => '163.45 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  '早稲田大学宇宙航空研究会「WASA」',
        'player_name' => '杉山史一',
        'Age' => '20',
        'distance' => '194.15 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  '大阪工業大学航空部OB会',
        'player_name' => '武村文夫',
        'Age' => '28',
        'distance' => '202.40 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  'Team CUMURUS',
        'player_name' => '福森啓太',
        'Age' => '29',
        'distance' => '211.30 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '39',
        'distance' => '212.60 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  'Team Aeroscepsy',
        'player_name' => '鈴木正人',
        'Age' => '29',
        'distance' => '214.90 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '12',
        'team_name' =>  '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '33',
        'distance' => '261.90 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第13回
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  'TEAM CUMULUS',
        'player_name' => '福森啓太',
        'Age' => '30',
        'distance' => '32.40 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  '筑波鳥人間の会',
        'player_name' => '秋元靖史',
        'Age' => '25',
        'distance' => '34.80 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  '茂原市フリーフライト',
        'player_name' => '木島明良',
        'Age' => '29',
        'distance' => '40.50 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  '九州大学鳥人間チーム',
        'player_name' => '前田能孝',
        'Age' => '22',
        'distance' => '51.80 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  'オムロン鳥人間同好会',
        'player_name' => '白坂宗徳',
        'Age' => '28',
        'distance' => '77.10 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  '日本大学工学部航空技術研究同好会',
        'player_name' => '永見広次',
        'Age' => '23',
        'distance' => '82.80 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  'みたかアドベンチャーグループ',
        'player_name' => '加藤信男',
        'Age' => '38',
        'distance' => '102.30 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  '熊本工業大学航空工学研究会',
        'player_name' => '岡本長生',
        'Age' => '21',
        'distance' => '158.10 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  'チームアルバトロス',
        'player_name' => '金子　斉',
        'Age' => '26',
        'distance' => '193.30 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '13',
        'team_name' =>  'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '41',
        'distance' => '205.10 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第14回
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '超人会',
        'player_name' => '高橋成典',
        'Age' => '23',
        'distance' => '87.13 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '京都人力飛行クラブ',
        'player_name' => '浅田康照',
        'Age' => '39',
        'distance' => '178.72 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  'トムステクニカルディビジョン',
        'player_name' => '杉原　徹',
        'Age' => '21',
        'distance' => '203.96 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '日本航空鳥人間クラブン',
        'player_name' => '諸石健吾',
        'Age' => '36',
        'distance' => '242.08 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '早稲田大学宇宙航空研究会',
        'player_name' => '桑山彰崇',
        'Age' => '21',
        'distance' => '291.33 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '山口鳥人間の会',
        'player_name' => '青木保元',
        'Age' => '42',
        'distance' => '314.00 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  'チーム翼',
        'player_name' => '武市直也',
        'Age' => '31',
        'distance' => '467.48 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  'チームエアロセプシー',
        'player_name' => '中山　浩典',
        'Age' => '30',
        'distance' => '513.06 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '日本大学航空研究会バードマンチーム',
        'player_name' => '坂本佳久',
        'Age' => '23',
        'distance' => '649.05 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
        'year_id' => '14',
        'team_name' =>  '日本大学理工学部航空研究会',
        'player_name' => '小林　稔',
        'Age' => '20',
        'distance' => '1,810.54 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第15回
                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '九州大学鳥人間チーム',
        'player_name' => '杉森健一',
        'Age' => '21',
        'distance' => '134.80 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'JR西日本Spirit of SHISETSU',
        'player_name' => '正垣道久',
        'Age' => '41',
        'distance' => '137.45 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '京都大学バードマンチームOB会',
        'player_name' => '小林由佳',
        'Age' => '22',
        'distance' => '152.40 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'アクティブギャルズ',
        'player_name' => '堀　琴乃',
        'Age' => '23',
        'distance' => '157.40 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '田島順司エクセルクラブ',
        'player_name' => '田島順司',
        'Age' => '35',
        'distance' => '166.90 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '36',
        'distance' => '173.85 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'みたかアドベンチャーグループ',
        'player_name' => '島崎　孝',
        'Age' => '37',
        'distance' => '190.05 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  NULL,
        'player_name' => '秋元靖史',
        'Age' => '27',
        'distance' => '195.75 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '42',
        'distance' => '276.45 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'フリーフライト',
        'player_name' => '木島明良',
        'Age' => '31',
        'distance' => '318.75 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'ノーリツ楽創会グループ「あひる」',
        'player_name' => '木村和宏',
        'Age' => '25',
        'distance' => '22.30 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '茜浜モデラーズ',
        'player_name' => '野口　均',
        'Age' => '27',
        'distance' => '56.00 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'TEAMエアロセプシー',
        'player_name' => '中山　浩典',
        'Age' => '31',
        'distance' => '64.65 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '第一エ業大学航空機設計研究部',
        'player_name' => '小西　工',
        'Age' => '21',
        'distance' => '73.80 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '田島順三製作所エクセルクラブ',
        'player_name' => '小川忠志',
        'Age' => '41',
        'distance' => '111.80 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  'FLAG&GLAY',
        'player_name' => '与那覇吉尚',
        'Age' => '31',
        'distance' => '122.25 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '早稲田大学航空宇宙研究会',
        'player_name' => '山下浩ニ',
        'Age' => '20',
        'distance' => '158.30 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '摂津人力飛行機研究会',
        'player_name' => '尾崎　節',
        'Age' => '52',
        'distance' => '227.60 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '京都バードマン',
        'player_name' => '浅田康照',
        'Age' => '39',
        'distance' => '230.80 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '15',
        'team_name' =>  '日本大学理工学部航空研究会バードマンチーム',
        'player_name' => '阪本佳久',
        'Age' => '24',
        'distance' => '500.20 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第16回
                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  NULL,
        'player_name' => '天野新吉',
        'Age' => '61',
        'distance' => '100.63 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '練馬区役所土木部「練土研チャレンジチーム」',
        'player_name' => '竹永修一',
        'Age' => '31',
        'distance' => '133.74 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  'エクセルクラブ設計チーム',
        'player_name' => '田島順司',
        'Age' => '36',
        'distance' => '137.45 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '京都バードマンチーム「シューティングスターズ」',
        'player_name' => '古賀　響',
        'Age' => '19',
        'distance' => '137.93 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '有人飛翔体研究会',
        'player_name' => '宝田由紀',
        'Age' => '24',
        'distance' => '141.80 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '筑波鳥人間の会',
        'player_name' => '秋元靖史',
        'Age' => '28',
        'distance' => '156.17 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '東京都立大学人力飛行機研究会',
        'player_name' => '栗野けんじ',
        'Age' => '21',
        'distance' => '189.50 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '京都大学工学部航空学科「京都エアロプロジェクト」',
        'player_name' => '岡　尚志',
        'Age' => '22',
        'distance' => '202.83 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '44',
        'distance' => '221.04 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  'チームエアロセプシー',
        'player_name' => '中村 克',
        'Age' => '26',
        'distance' => '232.08 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '天まで昇れ―Ⅳ',
        'player_name' => '津田章仁',
        'Age' => '20',
        'distance' => '88.09 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '東京都新都市建設公社新都市バードマンクラブ',
        'player_name' => '小池利明',
        'Age' => '37',
        'distance' => '97.36 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '東海大学人カ飛行機研究会',
        'player_name' => '二本木―巳',
        'Age' => '21',
        'distance' => '124.34 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '川崎重工「チーム翼」',
        'player_name' => '武市直也',
        'Age' => '33',
        'distance' => '205.84 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '早稲田大学航空研究会WASA',
        'player_name' => '前田浩夫',
        'Age' => '20',
        'distance' => '256.11 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '京都バードマン「楽只苑」',
        'player_name' => '浅田康照',
        'Age' => NULL,
        'distance' => '300.87 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  'アクティブギャルズ',
        'player_name' => '堀　琴乃',
        'Age' => '24',
        'distance' => '334.13 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  'トヨタ人カ飛行機同好会「スカイ悟空」',
        'player_name' => '安達佳津見',
        'Age' => '33',
        'distance' => '788.31 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  '日本大学工学部航空研究会とべとべ琵琶湖横断チーム',
        'player_name' => '西　泰史',
        'Age' => '22',
        'distance' => '1,226.04 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                
        DB::table('records')->insert([
        'year_id' => '16',
        'team_name' =>  'チームエアロセプシー',
        'player_name' => '中山　浩典',
        'Age' => '32',
        'distance' => '2,019.65 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第17回
                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'みたかアドベンチャーグループ',
        'player_name' => '島崎　孝',
        'Age' => '39',
        'distance' => '89.20 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '熊本工業大学航空エ学研究会',
        'player_name' => '宮原道英',
        'Age' => '22',
        'distance' => '103.13 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'エクセルクラブ',
        'player_name' => '田島順司',
        'Age' => '37',
        'distance' => '106.40 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'WOOD STOCK',
        'player_name' => '弓削和義',
        'Age' => '32',
        'distance' => '127.69 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '39',
        'distance' => '143.52 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'チームアルバトロス会',
        'player_name' => '松尾　泰',
        'Age' => '31',
        'distance' => '168.90 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'チームHAMA HAMA',
        'player_name' => '福森啓太',
        'Age' => '34',
        'distance' => '182.05 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'Mr.WENS FLYING CLUB',
        'player_name' => '正垣道久',
        'Age' => '28',
        'distance' => '186.65 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '45',
        'distance' => '218.77 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '東京都立大学人力飛行機研究会',
        'player_name' => '栗野けんじ',
        'Age' => '22',
        'distance' => '248.31 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'チーム　翼',
        'player_name' => '二宮　崇',
        'Age' => '26',
        'distance' => '46.72 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'WING OF HOJO',
        'player_name' => '原　正明',
        'Age' => '36',
        'distance' => '54.54 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '早稲田大学宇宙航空研究会WASA',
        'player_name' => '國竹　泰夫',
        'Age' => '19',
        'distance' => '55.11 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'H.C.Iル・パラディ・クラブ',
        'player_name' => '鹿野　正広',
        'Age' => '27',
        'distance' => '73.57 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '尼崎工業会青年経営研究会',
        'player_name' => '高丸　正',
        'Age' => '33',
        'distance' => '79.53 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '天まで昇れー７',
        'player_name' => '津田　章仁',
        'Age' => '21',
        'distance' => '81.59 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                        
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'すずめフライングチーム',
        'player_name' => '松田　宏一',
        'Age' => '29',
        'distance' => '89.87 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  'エーアイバードマンプロジェクトチーム',
        'player_name' => '佃　岳',
        'Age' => '27',
        'distance' => '171.88 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '京都バードマン',
        'player_name' => '浅田　康照',
        'Age' => NULL,
        'distance' => '619.16 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '17',
        'team_name' =>  '日本大学理工学部航空研究会',
        'player_name' => '野呂　元紀',
        'Age' => '23',
        'distance' => '2,180.78 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第18回
                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'オムロンバードマンクラブ',
        'player_name' => '青地宏和',
        'Age' => '23',
        'distance' => '105.65 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '熊本工業大学航空工学研究会',
        'player_name' => '磯貝喜美子',
        'Age' => '22',
        'distance' => '126.95 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '九州大学鳥人間チーム',
        'player_name' => '村上 務',
        'Age' => '20',
        'distance' => '139.36 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'エクセルクラブ',
        'player_name' => '田島順司',
        'Age' => '38',
        'distance' => '141.00 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'チームハマハマ',
        'player_name' => '福森恵太',
        'Age' => '35',
        'distance' => '151.51 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'アクティブギャルズ',
        'player_name' => '堀 琴乃',
        'Age' => '26',
        'distance' => '152.80 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'チームみょーみゃーか',
        'player_name' => '武藤公一',
        'Age' => '46',
        'distance' => '211.74 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'エアロキャプチャープロジェクト',
        'player_name' => '奥村 太',
        'Age' => '29',
        'distance' => '229.01 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '西富士友の会',
        'player_name' => '糸谷 浩',
        'Age' => '40',
        'distance' => '272.21 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '46',
        'distance' => '274.72 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '早稲田大学WASA',
        'player_name' => '木達　一仁',
        'Age' => '20',
        'distance' => '59.35 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '日本航空大学大学校固定翼ゼミ',
        'player_name' => '副島　輝生',
        'Age' => '32',
        'distance' => '61.34 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'エーアイアドベンチャークラブ',
        'player_name' => '加藤　知弘',
        'Age' => '26',
        'distance' => '65.68 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '天まで昇れー8',
        'player_name' => '浦　晴雄',
        'Age' => '45',
        'distance' => '73.68 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'ジャムコ鳥の会',
        'player_name' => '朝倉　輝',
        'Age' => '25',
        'distance' => '82.72 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'チームエアロセプシー',
        'player_name' => '中山　浩典',
        'Age' => '34',
        'distance' => '194.90 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '京都大学バードマンチーム　SHOOTING　STARS',
        'player_name' => '巽　秀太郎',
        'Age' => '21',
        'distance' => '310.24 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'チーム市原エンジョイフライト',
        'player_name' => '金沢　善郎',
        'Age' => '38',
        'distance' => '442.47 m	',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  'つくば鳥人間の会',
        'player_name' => '田中　泰吾',
        'Age' => '20',
        'distance' => '853.88 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '18',
        'team_name' =>  '日本大学理工学部航空研究会日本バードマンOBチーム',
        'player_name' => '宮脇　康成',
        'Age' => '24',
        'distance' => '2,371.65 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第19回
                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' =>  '日本テレビTVおじゃマンモス',
        'player_name' => '森脇建児',
        'Age' => '28',
        'distance' => '89.34 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' =>  'チームハマハマ',
        'player_name' => '福森啓太',
        'Age' => '36',
        'distance' => '131.57 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' =>  '清水とばし隊',
        'player_name' => '天野新吉',
        'Age' => '64',
        'distance' => '131.71 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' =>  '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '41',
        'distance' => '147.65 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' =>  '熊本工業大学航空工業研究会',
        'player_name' => '島田尚之',
        'Age' => '21',
        'distance' => '176.98 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' =>  'team SKY WARKER',
        'player_name' => '青地宏和',
        'Age' => '27',
        'distance' => '192.14 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'チームみょーみゃーか',
        'player_name' => '武藤公一',
        'Age' => '47',
        'distance' => '249.24 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '東京都立大学人力飛行機研究会',
        'player_name' => '原田昭男',
        'Age' => '20',
        'distance' => '291.95 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '東京工業大学 Meister',
        'player_name' => '佐野貴之',
        'Age' => '20',
        'distance' => '292.05 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '47',
        'distance' => '329.83 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '天まで昇れ―IX',
        'player_name' => '本庄法之',
        'Age' => '28',
        'distance' => '60.65 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'ウイングス豊橋',
        'player_name' => '川口竜太',
        'Age' => NULL,
        'distance' => '83.09 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'ドボン会',
        'player_name' => '西山雅也',
        'Age' => '30',
        'distance' => '90.10 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '東海大学人力飛行機研究会',
        'player_name' => '井上孝司',
        'Age' => '21',
        'distance' => '575.26 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '大阪府立大学 堺・風車の会',
        'player_name' => '中尾　誠',
        'Age' => '20',
        'distance' => '623.66 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'ジャムコ鳥の会',
        'player_name' => '朝倉　輝',
        'Age' => '26',
        'distance' => '654.10 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '早稲田大学宇宙航空研究会',
        'player_name' => '木達一仁',
        'Age' => '21',
        'distance' => '910.92 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '宮脇康成',
        'Age' => '25',
        'distance' => '5,449.10 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'トヨタ人力飛行機同好会',
        'player_name' => '大原　満',
        'Age' => '28',
        'distance' => '6,411.20 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '19',
        'team_name' => 'チームエアロセプシー',
        'player_name' => '中山　浩典',
        'Age' => '35',
        'distance' => '8,764.00 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第20回
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'エアロセプシー',
        'player_name' => '鈴木弘人',
        'Age' => '37',
        'distance' => '	169.93 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'チームみょーみゃーか',
        'player_name' => '武藤公一',
        'Age' => '48',
        'distance' => '181.59 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '芝浦工業大学 Team Birdman Trial',
        'player_name' => '佐々木保郎',
        'Age' => '23',
        'distance' => '203.55 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'Team SKY WARKERS',
        'player_name' => '田中多聞',
        'Age' => '32',
        'distance' => '田中多聞',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '熊本工業大学航空工学研究会',
        'player_name' => '生江竜平',
        'Age' => '21',
        'distance' => '219.65 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'チームTOKI',
        'player_name' => '中村　克',
        'Age' => '30',
        'distance' => '221.41 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '西富士友の会',
        'player_name' => '糸谷　浩',
        'Age' => '42',
        'distance' => '237.14 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'ふくちやま・舞夢MY夢',
        'player_name' => '大概慶太',
        'Age' => '31',
        'distance' => '274.62 m',
        'award_id' => '1',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '三鷹アドベンチャーグループ',
        'player_name' => '大木　祥資',
        'Age' => '26',
        'distance' => '275.71 m',
        'award_id' => '1',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'TOA鳥人間の会',
        'player_name' => '佐々木正司',
        'Age' => '48',
        'distance' => '300.36 m',
        'award_id' => '1',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '東京都立大学人力飛行機研究会',
        'player_name' => '箱石朋範',
        'Age' => '20',
        'distance' => '422.96 m',
        'award_id' => '2',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'つくば鳥人間の会',
        'player_name' => '田中泰吾',
        'Age' => '22',
        'distance' => '450.07 m',
        'award_id' => '2',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '第一工業大学航空機設計研究部',
        'player_name' => '立石礼正',
        'Age' =>  NULL,
        'distance' => '521.49 m',
        'award_id' => '2',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'Mr.WENS FLYING CLUB',
        'player_name' => '足田欣哉',
        'Age' =>  '42',
        'distance' => '587.73 m',
        'award_id' => '2',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'ジャムコ鳥の会',
        'player_name' => '朝倉　輝',
        'Age' =>  '27',
        'distance' => '1,015.92 m',
        'award_id' => '2',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'ウイングス豊橋',
        'player_name' => '川口竜太',
        'Age' =>  '22',
        'distance' => '1,066.20 m',
        'award_id' => '2',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'トヨタ人力飛行機同好会',
        'player_name' => '大原　満',
        'Age' =>  NULL,
        'distance' => '4,869.07 m',
        'award_id' => '2',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '日本大学理工学部航空研究会',
        'player_name' => '金子有峰',
        'Age' =>  '21',
        'distance' => '5,209.22 m',
        'award_id' => '2',
        'rank' => '3',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'チームエアロセプシー',
        'player_name' => '中山　浩典',
        'Age' =>  '36',
        'distance' => '7,973.16 m',
        'award_id' => '2',
        'rank' => '2',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '大阪府立大学 堺・風車の会',
        'player_name' => '中尾　誠',
        'Age' =>  '21',
        'distance' => '	9,761.56 m',
        'award_id' => '2',
        'rank' => '1',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        
        //第22回
        
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '紅菱会有人飛翔体研究会',
        'player_name' => '東　恭子',
        'Age' =>  '28',
        'distance' => '124.42 m',
        'award_id' => '1',
        'rank' => '10',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '神奈川工科大学航空研究部',
        'player_name' => '黒澤正人',
        'Age' =>  '21',
        'distance' => '174.62 m',
        'award_id' => '1',
        'rank' => '9',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                        
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '練土研チャレンジチーム',
        'player_name' => '竹永修一',
        'Age' =>  '37',
        'distance' => '183.97 m',
        'award_id' => '1',
        'rank' => '8',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '熊本工業大学航空工学研究会',
        'player_name' => '中野泰伸',
        'Age' =>  '22',
        'distance' => '208.01 m',
        'award_id' => '1',
        'rank' => '7',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => '夜鳥の会',
        'player_name' => '雨宮健一',
        'Age' =>  '25',
        'distance' => '211.91 m',
        'award_id' => '1',
        'rank' => '6',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                               
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'TOA鳥人間の会',
        'player_name' => '大上由美子',
        'Age' =>  '23',
        'distance' => '221.10 m',
        'award_id' => '1',
        'rank' => '5',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
                                                       
        DB::table('records')->insert([
        'year_id' => '20',
        'team_name' => 'チームToki',
        'player_name' => '伊藤友秀',
        'Age' =>  '26',
        'distance' => '226.32 m',
        'award_id' => '1',
        'rank' => '4',
        'other' => NULL,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    }
}
