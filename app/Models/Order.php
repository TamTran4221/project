<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected  $fillable =  [
        'name', 'address','phone', 'note','status' ,'user_id'
    ];
    public function user()
    {
        return $this ->belongsTo(User::class);
    }
    public function scopeSearch($query)
     {
        if ($key = request()->key) {
            $query =$query ->where('name','like','%'.$key.'%');
        }
        return $query;
     }
    
}
