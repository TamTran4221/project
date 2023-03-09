<?php
namespace App\Helper;
class Cart
{
    private $items =[];
    private $total_price = 0;
    private $total_quantity = 0;
    public function __construct()
    {
        $this -> items = session('cart')? session('cart'):[];
    }
    public function add($product, $quantity)
    {
        $cart_item = (object) [
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->sale_price ? $product->sale_price : $product->price,
            'quantity' => 1
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id];

        }else{
            $this->items[$product->id] = $cart_item;
        }
        session(['cart'=>$this->items]);
    }
    public function update($product_id, $quantity)
    {
        if (isset($this->items[$product_id])) {
            $this->items[$product_id]['product_quantity'] = $quantity;
        }
        session(['cart'=>$this->items]);
    }
    public function delete($product_id)
    {
        if (isset($this->items[$product_id])) {
            unset($this->items[$product_id]);
        }
        session(['cart'=>$this->items]);
    }
    public function getItems()
    {
       return $this->items;
    }
    public function getTotalprice()
    {
       $total = 0 ;
       foreach ($this->items as $value) {
        $total += $value['product_price'] * $value['product_quantity'];
       }
    }
}