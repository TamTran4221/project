<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'product_id','price','quantity','subtotal'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
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
    public function details123()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
    public function details()
    {
        $data = DB::table('order_details as d')
        ->select('d.quantity','d.price','p.name','p.image', DB::raw('SUM(d.quantity * d.price) as SubTotal'))
        ->join('products as p', 'p.id','=','d.product_id')
        ->where('d.order_id', $this->id)
        ->groupBy('d.quantity','d.price','p.name','p.image')->get();

        return $data;
    }
}
