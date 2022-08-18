<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Services\MenuAdminService;
use App\Http\Requests\Admin\MenuFormRequest;

class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuAdminService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function create()
    {
        
        return view('admin.menu.add', [
            'title' => 'Thêm Danh Mục', 
            'getParent' => $this->menuService->getMenu()
        ]);
    }

    public function store(MenuFormRequest $request)
    {
        $this->menuService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.menu.list', [
            'title' => 'Danh Sách Danh Mục',
            'menus' => $this->menuService->getAllMenu()
        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->menuService->destroy($request);

        if ($result)
        {
            return response()->json([
                'error' => false,
                'message' => Session::flash('success', 'Xóa danh mục thành công')
            ]);
        }

        return response()->json([
            'error' => true,
            
        ]);
    }

    public function show(Menu $menu)
    {
        return view('admin.menu.edit', [
            'title' => 'Chỉnh sửa danh mục',
            'menu' => $menu,
            'getParent' => $this->menuService->getMenu()
        ]);
    }

    public function update(MenuFormRequest $request, Menu $menu)
    {
        $this->menuService->update($request, $menu);
        return redirect('/admin/menu/list');
    }
}
