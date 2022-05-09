<?php

namespace App\Models;


class Orang 
{
   private static $wong = [
        [
            "nama" => "Keke Kumalasari",
            "slug" => "keke-kumalasari",
            "jenis_kelamin" => "CWK",
            "ciri"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore optio quos ipsa placeat laudantium neque aliquid architecto! Dolore minima eligendi mollitia saepe beatae debitis",

        ],
        [
            "nama" => "M kmur",
            "slug" => "makmur",
            "jenis_kelamin" => "CWK",
            "ciri"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore optio quos ipsa placeat laudantium neque aliquid architecto! Dolore minima eligendi mollitia saepe beatae debitis",

        ],
    ];

    
    public static function all(){
        return collect(self::$wong);
    }

    public static function find($slug){
        $baru = static::all();

    return $baru->firstWhere('slug', $slug );
    }
}
