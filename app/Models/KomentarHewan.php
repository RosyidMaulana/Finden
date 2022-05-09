<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarHewan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    

    public function pet(){
        return $this->belongsTo(Pet::class, 'hewan_id');
    }

    public function pelapor(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
