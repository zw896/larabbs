<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       // 借助 Laravel 提供的 Auth 的 attempt 方法可以让我们很方便的完成用户的身份认证操作，如下所示：
       if (Auth::attempt($credentials)) {
           // 登录成功后的相关操作
            session()->flash('success', '欢迎回来！');
           return redirect()->route('users.show', [Auth::user()]);
       } else {
           // 登录失败后的相关操作
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
       }

       return;
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}
