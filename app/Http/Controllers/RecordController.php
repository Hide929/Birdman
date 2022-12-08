<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Record;
use App\Models\Year;
use App\Models\Award;
use Illuminate\Pagination\Paginator;


class RecordController extends Controller
{
    
    public function history(Request $request, Record $records)
    {
        
        
      
        
        $year = $request -> input('year');
        $award = $request -> input('award');
        $keyword = $request-> input('keyword');
        
        
        
        
        
        //dd($posts);
        
        $query = Record::query();
        
        if(!($keyword) == null){
            
           $query->where('player_name', 'LIKE', "%{$keyword}%") ->orWhere('team_name', 'LIKE', "%{$keyword}%");  
               
            
            
            $query -> get();
            
            //dd($records);
    
            
        }else{
         $query ->get();
        }
 
        
        
 
        
       
        
       
        if(!($year) == null){
          $query -> where('year_id', $year);
        }
      
        if(!($award) == null){
          $query -> where('award_id', $award);
        }
        
       $records = $query->orderby('id', 'DESC')->paginate(20);
        
        
        
        
        

        
          
            //dump($team);
            //dump($records);
        
    
        
        //$records = $records -> where('', $award);
        
    
        
        
        $years_list = Year::get();
        $awards_list = Award::get();
        
        
        //dd($records);
        //dd($years_list);
        
    
        
       
        
        return view('posts/history', compact('records', 'years_list', 'awards_list', 'year', 'award', 'keyword'));
    }
    
    public function add()
    {
        return view('posts/add');
    }
    
    public function save(Request $request, Record $record)
    {
        $input = $request['records'];
        
        //dd($input);
        $record->fill($input)->save();
        return redirect('posts/history');
    }
}

