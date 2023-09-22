<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    use HasFactory;

    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters){
        //when will call the query function when search value willl be passed 
        $query->when($filters['search'] ?? false, fn($query, $search)=>
        $query->where('title','like', '%'.$search.'%')->orWhere('body','like','%'.$search.'%'));

    }

    public function category(){
        return $this->belongsTo(Category::class);
        
    }

    public function author(){
        return $this->belongsTo(Author::class);
        
    }
}
