<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'content',
        'menu_id',
        'price',
        'price_sale',
        'thumb',
        'active'
    ];

    //moi quan he voi bang menu để lấy ra tên menu trong danh sách sản phẩm
    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id'); //id la khoa chinh', menu_id la khoa phu
        
    }
}
