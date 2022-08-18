<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ProductService;
use App\Http\Services\MenuService;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    protected $productService;
    protected $menuService;
    public function __construct(ProductService $productService, MenuService $menuService)
    {
        $this->productService = $productService;
        $this->menuService = $menuService;
    }


    public function index(Product $product)
    {
        $menuLimit = Menu::where('parent_id', 0)->take(4)->get();
        $slider = Slider::where('active', 1)->get();

        return view('home', [
            'title' => 'Mobile Store',
            'titleProduct' => 'Sản Phẩm Hot',
            'products' => $this->productService->getNewProduct(),
            'sliders' => $slider,
            'menuLimit' => $menuLimit
        ]);
    }

    
}
