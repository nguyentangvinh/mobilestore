<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\MenuAdminService;
use App\Http\Services\ProductAdminService;
use App\Models\Product;

class ProductController extends Controller
{
    protected $menuService;
    protected $productService;

    public function __construct(MenuAdminService $menuService, ProductAdminService $productService)
    {
        $this->menuService = $menuService;
        $this->productService = $productService;
    }
    

    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm Sản Phẩm',
            'menus' => $this->menuService->getMenu()
        ]);
    }

    public function store(ProductFormRequest $request)
    {
        $this->productService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.product.list', [
            'title' => 'Danh Sách Sản Phẩm',
            'products' => $this->productService->getProduct()
        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->productService->destroy($request);

        if ($result)
        {
            return response()->json([
                'error' => false,
                'message' => 'Xoá sản phẩm thành công'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function show(Product $product)
    {
        return view('admin.product.edit', [
            'title' => 'Chỉnh Sửa Sản Phẩm',
            'product' => $product,
            'menus' => $this->menuService->getMenu()
        ]);
    }

    public function update(ProductFormRequest $request, Product $product)
    {
        $this->productService->update($request, $product);

        return redirect('/admin/product/list');
    }
    
}
