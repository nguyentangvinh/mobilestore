<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ProductService;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    

    public function index(Request $request, $id, $slug)
    {
        $menu = $this->productService->getId($id);

        //tao moi quan he o model Menu

        $products = $this->productService->getProductByMenu($menu);

        $menuLimit = Menu::where('parent_id', 0)->take(4)->get();
        return view('product-by-menu', [
            'title' => $menu->name,
            'titleProduct' => $menu->name,
            'products' => $products,
            'menuLimit' => $menuLimit
        ]);
    }

    public function all()
    {
        $menuLimit = Menu::where('parent_id', 0)->take(4)->get();
        return view('all-product', [
            'title' => 'Tất cả sản phẩm',
            'titleProduct' => 'Tất cả sản phẩm',
            'products' => $this->productService->getAllProduct(),
            'menuLimit' => $menuLimit
        ]);     
    }

    public function show($id = '', $slug = '')
    {   
        $menuLimit = Menu::where('parent_id', 0)->take(4)->get();
        $product = $this->productService->show($id);
        return view('detail', [
            'title' => $product->name,
            'products' => $product,
            'menuLimit' => $menuLimit
        ]);
 
    }

    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $data = Product::where('id', 'like', '%' . $request->search . '%')
                            ->orwhere('name', 'like', '%' . $request->search . '%')
                            ->orwhere('description', 'like', '%' . $request->search . '%')
                            ->get();

            $html = '';

            if (count($data) > 0)
            {
                $html = '<div class="show-search-result">';
                        foreach($data as $value) {
                            $html .= '<div class="media">
                                        <a class="pull-left" href="">
                                            <img class="media-object" src="' . $value->thumb . '" width="70px" alt="Image">
                                        </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="/products/' . $value->id . '-' . Str::slug($value->name) . '/detail">' . $value->name . '</a></h4>
                                        <p style="color: red; font-size: 14px; font-weight: bold">' . \App\Helpers\Helper::price($value->price, $value->price_sale) . '</p>
                                
                                    </div>
                                    </div>';
                        }
                        $html .='</div>';

            } else {
                $html = 'Không tìm thấy sản phẩm nào';
            }

            return $html;
        }
        
    }
}
