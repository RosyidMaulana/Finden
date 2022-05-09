<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Coment extends Model
{
    use  HasFactory;
    
    protected $guarded = ['id'];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    

    public function pelapor(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
