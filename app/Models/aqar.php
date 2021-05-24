<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aqar extends Model
{
    use HasFactory;
/*
    public static function find($slug)
    {
        if (!file_exists($path =  resource_path("aqars/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
        return cache()->remember("aqars.{$slug}", 1200, fn() => file_get_contents($path));

    }*/
}
