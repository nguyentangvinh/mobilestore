<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login', [
            'title' => 'Đăng nhập Admin'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ],
        [
            'email.required' => 'Vui lòng điền Email đăng nhập',
            'password.required' => 'Vui lòng nhập mật khẩu'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {

            return redirect()->route('admin');
           
        }
        Session::flash('error', 'Email hoặc mật khẩu không chính xác. Vui lòng thử lại!');
        return redirect()->back();
              
    }
}
