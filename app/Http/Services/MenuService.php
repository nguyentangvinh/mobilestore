<?php 

namespace App\Http\Services;

use App\Models\Menu;

class MenuService 
{
    public function getMenuParent()
    {
        return Menu::where('parent_id', 0)->get();
    }
}