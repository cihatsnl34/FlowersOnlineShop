<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siparis;
use App\Models\Flower;
class HomeController extends Controller
{
    public function index()
    {
        $all_users = User::all();
        $sepetler = Siparis::where('siparisDurum',1)->get();
        $counts = [
            'user' => count($all_users),
            'sepet' => count($sepetler)
        ];
        return view('admin.dashboard',['counts'=>$counts]);
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
    public function siparisler()
    {
        $sepetArray=[];
        $sepetler = Siparis::where('siparisDurum',1)->get();
        foreach ($sepetler as $sepet) {
            $flower = Flower::find($sepet->flowerId);
            $users  = User::find($sepet->userId);
            $tumBilgiler = array_merge(json_decode(json_encode($flower), true), json_decode(json_encode($users), true),json_decode(json_encode($sepet), true));
            array_push($sepetArray, $tumBilgiler);
        }
        return view('admin.siparisler',['sepetArray'=>$sepetArray]);
    }
    
}
