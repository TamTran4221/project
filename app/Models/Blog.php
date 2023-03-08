<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =[
        'title', 'image', 'content','status'
    ];
    public function scopeSearch($query)
     {
        if ($key = request()->key) {
            $query =$query ->where('name','like','%'.$key.'%');
        }
        return $query;
     }
}
