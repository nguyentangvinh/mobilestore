<?php 

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CartService
{
    public function create($request)
    {
        $qty = (int) $request->input('num_product');
        $product_id = (int) $request->input('product_id');

        if ($qty <= 0 || $product_id <= 0)
        {
            Session::flash('error', 'So luong hoac san pham khong chinh xac');
            return false;
        }

        
        $carts = Session::get('carts');

        if(is_null($carts))
        {
            Session::put('carts', [
                $product_id => $qty
            ]);

            return true;
        }
         $exists = Arr::exists($carts, $product_id);

         if ($exists)
         {
            $carts[$product_id] = $carts[$product_id] + $qty;
            Session::put('carts', $carts);

            return true;
         }

         $carts[$product_id] = $qty;
         Session::put('carts', $carts);

        return true;
            
    }

    public function getProduct()
    {
        $carts = Session::get('carts');

        if (is_null($carts)){
            return [];
        }
        $productId = array_keys($carts);
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')->where('active', 1)->whereIn('id', $productId)->get();
    }

    public function showCartAjax()
    {
        $carts = Session::get('carts');

        // if (is_null($carts)){
        //      return [];   
        // }

        $productId = array_keys($carts);
        $data = Product::select('id', 'name', 'price', 'price_sale', 'thumb')->where('active', 1)->whereIn('id', $productId)->get();

        $total = 0;
        $html = '';
        if(count($carts) != 0)
        {
        $html = '
                    <div class="cart-content d-flex">
                    <div class="cart-list">';
                    foreach($data as $value){
                        $price = $value->price;
                        $priceEnd = $price * $carts[$value->id];
                        $total += $priceEnd;
                    $html .= '
                        <!-- Single Cart Item -->
                        <div class="single-cart-item">
                            <a href="/products/'. $value->id .'-'. Str::slug($value->name) .'/detail" class="product-image">
                                <img src="'. $value->thumb .'" class="cart-thumb" alt="">
                                <!-- Cart Item Desc -->
                                <div class="cart-item-desc">
                                    <span class="badge" style="color: white">x'. $carts[$value->id] .'</span>
                                    <h6 style="margin-bottom: 0px">'. $value->name .'</h6>                               
                                    <p class="price" style="margin-top: 0px">'. number_format($price, 0, '', '.') . '₫</p>
                                    <p style="color: white;
                                    font-size: 16px;
                                    font-weight: 700;">Total: '. number_format($priceEnd, 0, '', '.') .'₫</p>
                                </div>
                            </a>
                        </div>';
                    }
                    $html .='</div>';
                  
                   
                    $html .= '<!-- Cart Summary -->
                    <div class="cart-amount-summary">

                        <h2>Summary</h2>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>'. number_format($total, 0, '', '.') .'₫</span></li>
                            <li><span>total:</span> <span>'. number_format($total, 0, '', '.') .'₫</span></li>
                        </ul>
                        <div class="checkout-btn mt-100">
                            <a href="/list-carts" class="btn essence-btn">kiểm tra giỏ hàng</a>
                        </div>
                    </div>';
                $html .= '</div>
        ';

        } else {
            $html = '
                    <div class="cart-content d-flex">
                        <div class="cart-amount-summary">
                            <h5>Không có sản phẩm nào trong giỏ hàng...</h5>
                        </div>
                    </div>
            ';
        }
        

        return $html;
        
    }

    public function destroy($id)
    {
         
 
        $carts = Session::get('carts');
        unset($carts[$id]); 

        Session::put('carts', $carts);
        return true;
    }

    
    
}
