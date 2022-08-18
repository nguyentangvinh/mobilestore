<?php 

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProductAdminService 
{

    public function isValidPrice($request)
    {
        if ($request->input('price') != 0 && $request->input('price_sale') != 0 && $request->input('price_sale') >= $request->input('price'))
        {
            Session::flash('error', 'Giá sale phải nhỏ hơn giá gốc');
            return false;
        }

        if ($request->input('price') == 0 && $request->input('price_sale') != 0)
        {
            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        }
    }


    public function create($request)
    {
        $checkPrice = $this->isValidPrice($request);
        if ($checkPrice === false)
        return false;


        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' => (int) $request->input('price'),
                'price_sale' => (int) $request->input('price_sale'),
                'thumb' => (string) $request->input('thumb'),
                'active' => (int) $request->input('active')              
            ]);

            Session::flash('success', 'Thêm Sản phẩm thành công');

        } catch (\Exception $error) {
            Session::flash('error', 'Thêm Sản phẩm không thành công');
            Log::info($error->getMessage());
            return false;
        }

        return true;
        
    }

    public function getProduct()
    {
        return Product::with('menu')->orderbyDesc('id')->paginate(50);
    }

    public function destroy($request)
    {
        $product = Product::where('id', $request->input('id'))->first();

        if ($product)
        {
            return Product::where('id', $request->input('id'))->orwhere('menu_id', $request->input('id'))->delete();
        }
        return false;
    }

    public function update($request, $product)
    {
        $checkPrice = $this->isValidPrice($request);
        if ($checkPrice === false)
        return false;

        try {
            $product->name = (string) $request->input('name');
            $product->menu_id = (int) $request->input('menu_id');
            $product->price = (int) $request->input('price');
            $product->price_sale = (int) $request->input('price_sale');
            $product->description = (string) $request->input('description');
            $product->content = (string) $request->input('content');
            $product->thumb = (string) $request->input('thumb');
            $product->active = (int) $request->input('active');

            $product->save();

            Session::flash('success', 'Cập nhật sản phẩm thành công');

        } catch (\Exception $error) {
            Session::flash('success', 'Cập nhật sản phẩm không thành công');
            return false;
        }

        return true;
    }
}