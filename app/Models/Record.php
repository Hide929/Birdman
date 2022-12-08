<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'year_id' ,
        'team_name',
        'university_id',
        'player_name',
        'second_player_name',
        'Age',
        'distance',
        'other',
        ];
    
    public function getPaginateByLimit(int $limit_count = 20)
    {
        return $this->orderby('id', 'DESC')->paginate($limit_count);
    }
        
    public function year()
    {
        return $this -> belongsTo(Year::class); 
    }
    
       public function award()
    {
        return $this -> belongsTo(Award::class); 
    }
    
  
    
    
}


