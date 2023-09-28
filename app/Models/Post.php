<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'url',
        'comment',
        'user_id',
        'category_id',
        ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
        
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }    
        
         // Userとの関連付け
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

