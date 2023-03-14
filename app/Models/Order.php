<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
            $users = User::where('name','like','%'.$key.'%')->get();
            foreach ($users as  $value) {
                $query = $query ->where('user_id','=',$value->id);
            }
        }
        return $query;
     }
    
}
