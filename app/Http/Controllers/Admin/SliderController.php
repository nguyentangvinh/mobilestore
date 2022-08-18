<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use Illuminate\Http\Request;
use App\Http\Services\SliderAdminService;
use App\Models\Slider;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    protected $sliderService;
    public function __construct(SliderAdminService $sliderService)
    {
        $this->sliderService = $sliderService;
    }

    public function create()
    {
        return view('admin.slider.add', [
            'title' => 'Thêm Slider'
        ]);
    }

    public function store(SliderRequest $request)
    {
        $this->sliderService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.slider.list', [
            'title' => 'Danh Sách Slider',
            'sliders' => $this->sliderService->getSlider()
        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->sliderService->destroy($request);
        
        if ($result)
        {
            return response()->json([
                'error' => false,
                'message' => Session::flash('success', 'Xóa slider thành công')
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
    
    public function show(Slider $slider)
    {
        return view('admin.slider.edit', [
            'title' => 'Chỉnh Sửa Slider',
            'sliders' => $slider
        ]);
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        $this->sliderService->update($request, $slider);
        return redirect('admin/slider/list');
    }
}
