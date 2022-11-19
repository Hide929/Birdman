<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'post_id',
        'name' ,
        'title',
        'body',
        ];
        
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function post()
    {
        return $this -> belongsTo(Post::class);
    }
    
}
