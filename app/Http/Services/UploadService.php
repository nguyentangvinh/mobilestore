<?php

namespace App\Http\Services;

class UploadService
{
    public function store($request)
    {
        if ($request->hasFile('file'))
        {
            try {
                
                $name = $request->file('file')->getClientOriginalName(); //lay ra ten anh        

                $pathFull = 'uploads/' .date("Y/m/d"); //tao link thu muc anh sau khi da shortcut thu muc

                $request->file('file')->storeAs('public/' . $pathFull , $name); //tao thu muc chua anh

                // dd($path);

                return '/storage/' . $pathFull . '/' . $name;

            } catch (\Exception $err) {
                return false;
            }
            
        }
    }
}