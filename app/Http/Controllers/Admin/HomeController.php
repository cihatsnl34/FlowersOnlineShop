<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function userList()
    {
        $userList = User::all();
        return view('admin.uyeler.uyeler',['userList' => $userList]);
    }
    public function userDelete($id)
    {
        $user = User::Find($id);
        $user->delete();
        return redirect()->route('admin.userList');
    }
}
