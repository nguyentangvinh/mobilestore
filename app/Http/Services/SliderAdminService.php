<?php

namespace App\Http\Services;

use App\Models\Slider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderAdminService
{
    public function create($request)
    {
        try {
            Slider::create($request->input());
            
            Session::flash('success', 'Thêm Slider thành công');
            
        } catch (\Exception $error) {

            Session::flash('danger', 'Thêm Slider không thành công');
            return false;
        }

        return true;
    }

    public function getSlider()
    {
        return Slider::orderbyDesc('id')->paginate(10);
    }

    public function destroy($request)
    {
        $slider = Slider::where('id', $request->input('id'))->first();

        if($slider)
        {
            $path = str_replace('storage', 'public', $slider->thumb);
            Storage::delete($path);
            $slider->delete();
            return true;
        }

        return false;
    }

    public function update($request, $slider)
    {
        try {
            $slider->fill($request->input());
            $slider->save();

            Session::flash('success', 'Cập nhật Slider thành công');

        } catch (\Exception $error) {
            Session::flash('success', 'Cập nhật Slider không thành công');
            return false;
        }

        return true;
    }
}