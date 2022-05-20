<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
class HomeController extends Controller
{
    public function index()
    {
        $flowerList = Flower::all();
        return view('frontEnd.index',['flowerList'=>$flowerList]); 
    }
    public function contact()
    {
        return view('frontEnd.contact'); 
    }
    public function flower()
    {
        $flowerList = Flower::all();
        return view('frontEnd.flower',['flowerList'=>$flowerList]); 
    }
   public function flowerDetails($id)
   {
    $flowerList = Flower::find($id);
    return view('frontEnd.flowerDetail',['flower' =>$flowerList]);
   }
   
}
