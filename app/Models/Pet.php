<?php

namespace App\Models;

use App\Models\Coment;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use Sluggable, HasFactory;

    public function scopeFilter($query, array $filters){
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('jenis', 'like', '%' .$search . '%')//jenis = nama kolom pada tabel post
                        ->orwhere('spesial', 'like', '%' .$search . '%');
        });
        $query->when($filters['filter']?? false, function($query, $filter){
            return $query->where('gender', 'like', '%' .$filter . '%');
        });
        
        $query->when($filters['category']?? false, function($query, $category){
            // return $query->where('category_id', 'like', '%' . $category . '%');
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('nama', $category);
            });
        });
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    } 

    public function pelapor()
    {
        return $this->belongsTo(User::class,  'user_id');
    }

    public function komentarHewan(){
        return $this->hasMany(KomentarHewan::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'jenis'
            ]
        ];
    }
    protected $guarded = ['id'];
}
