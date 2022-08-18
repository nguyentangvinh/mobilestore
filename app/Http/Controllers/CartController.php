<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $result = $this->cartService->create($request);

        if($result === false)
        {
            return redirect()->back();
        }
        return redirect('/list-carts');
    }
    
    public function show(Request $request)
    {
        $result = $this->cartService->showCartAjax($request);
        return $result;
    }

    public function showlistcart(Request $request)
    {
        $menuLimit = Menu::where('parent_id', 0)->take(4)->get();
        $products = $this->cartService->getProduct();
        return view('cart.cart', [
            'title' => 'Danh Sách Giỏ Hàng',
            'menuLimit' => $menuLimit,
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }


    public function update(Request $request)
    {
        dd($request->all());
    }

    public function destroy($id = 0)
    {
        $this->cartService->destroy($id);
        return redirect('list-carts');
    }

}
