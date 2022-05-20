<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siparis;
use App\Models\Flower;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    public function index()
    {
       return view('user.dashboard'); 
    }
    public function sepetEkle($id,Request $request)
   {
    $flower = Flower::find($id);
    $siparis = new Siparis;
    $siparis->userId = session('id');
    $siparis->flowerId = $id;
    $siparis->siparisDurum	= '0';
    if($flower->stokMiktar>=$request->input('stok'))
    {
        $siparis->flowerAdet = $request->input('stok');
        $flower->stokMiktar = $flower->stokMiktar - $request->input('stok');
    }
    else
    {
        return Redirect::back()->withErrors(
            [
                'email' => 'Stok Yetersizdir!!!'
            ]
        );
    }
    $siparis->save();
    $flower->save();
    return redirect()->route('flower');
   }
   public function sepetim()
   {
    $sepetArray=[];
    $sepetler = Siparis::where('userId',session('id'))->where('siparisDurum',0)->get();
    foreach ($sepetler as $sepet) {
        $flower = Flower::find($sepet->flowerId);
        $users  = User::find($sepet->userId);
        $tumBilgiler = array_merge(json_decode(json_encode($flower), true), json_decode(json_encode($users), true),json_decode(json_encode($sepet), true));
        array_push($sepetArray, $tumBilgiler);
    }
    return view('user.sepetim',['sepetArray'=>$sepetArray]);
   }
   public function sepetDelete($id)
   {
       $siparis = Siparis::find($id);
       $siparis->delete();
       return redirect()->route('user.sepetim');
   }
   public function sepetOnayla(Request $request)
   {
       $sepetler = Siparis::where('userId',session('id'))->where('siparisDurum',0)->get(); 
       foreach($sepetler as $sepet){
           $sepet->Adres = $request->input('adres');
           $sepet->siparisDurum = 1;
           $sepet->save();
       }
       return redirect()->route('user.sepetim');
   }
}
