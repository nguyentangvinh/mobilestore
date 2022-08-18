<?php 

namespace App\Http\Services;

use App\Models\Menu;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MenuAdminService
{
    public function create($request)
    {
        try{
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (string) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active')
            ]);

            Session::flash('success', 'Thêm Danh mục thành công');

        } catch (\Exception $error){
            Session::flash('error', 'Thêm Danh mục không thành công. Vui lòng thử lại');
            Log::info($error->getMessage());
            return false;
        }

        return true;
    }

    public function getMenu()
    {
        return Menu::all();
        
       
    }

    public function getAllMenu()
    {
        return Menu::orderbyDesc('id')->paginate(30);
    }

    public function destroy($request)
    {
        $menu = Menu::where('id', $request->input('id'))->first();
        
        if ($menu){

            return Menu::where('id', $request->input('id'))->orwhere('parent_id', $request->input('id'))->delete();
        }
        return false;
    }

    public function update($request, $menu)
    {
        try {
            $menu->name = (string) $request->input('name');
            $menu->parent_id = (string) $request->input('parent_id');
            $menu->description = (string) $request->input('description');
            $menu->content = (string) $request->input('content');
            $menu->active = (string) $request->input('active');

            $menu->save();
            
            Session::flash('success', 'Cập nhập danh mục thành công');

        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhập danh không mục thành công');
            return false;
        }

        return true;
    }
}