<?php 

namespace App\Http\Services;

use App\Models\Menu;
use App\Models\Product;

class ProductService
{
    public function getNewProduct()
    {
        return Product::where('active', 1)->orderbyDesc('id')->take(4)->get();
    }

    public function getId($id)
    {
        return Menu::where('id', $id)->where('active', 1)->firstOrFail();
    }

    public function getAllProduct()
    {
        return Product::where('active', 1)->orderbyDesc('id')->paginate(16);
    }

    public function getProductByMenu($menu)
    {
        return $menu->products()->select('id', 'name', 'price', 'price_sale', 'thumb')->where('active', 1)->orderByDesc('id')->paginate(8);
    }

    public function show($id)
    {
        return Product::with('menu')->where('id', $id)->where('active', 1)->firstOrFail();
    }
}