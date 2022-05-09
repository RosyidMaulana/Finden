<?php

namespace App\Models;


use App\Models\User;
use App\Models\Coment;
use App\Models\Daerah;
use App\Models\Category;
use App\Models\KomentarHewan;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use Sluggable, HasFactory;
    
    protected $guarded = ['id'];
    

    public function scopeFilter($query, array $filters){
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' .$search . '%')//name = nama kolom pada tabel post
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
        $query->when($filters['jatim']?? false, function($query, $jatim){
            // return $query->where('jatim_id', 'like', '%' . $jatim . '%');
            return $query->whereHas('jatim', function ($query) use ($jatim) {
                $query->where('nama', $jatim);
            });  
        });

    }

    public function category(){
        return $this->belongsTo(Category::class,  'category_id');
    }

    public function jatim(){
        return $this->belongsTo(Daerah::class, 'jatim_id');
    }

    public function pelapor()
    {
        return $this->belongsTo(User::class,  'user_id');
    }

    public function coment(){
        return $this->hasMany(Coment::class);
    }

    

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}

