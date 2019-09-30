<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm() {
        if(auth()->guest()) {
            return view('admin.login');
        }else {
            return redirect('/admin/home');
        }
    }

    public function login(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $login = auth()->attempt([
            'username' => $request['username'],
            'password' => $request['password']
        ]);

        if($login) {
            return redirect('/admin/home')->with('Info','Welcome ' . $request['username'] . "!");
        }else {
            return redirect()->back()->with('Error', 'Invalid username and/or password.');
        }
    }

    public function logout() {
        auth()->logout();
        return redirect('/admin');
    }

    public function home() {
        return view('admin.home');
    }
}
