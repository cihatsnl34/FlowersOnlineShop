<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flower;
use Illuminate\Support\Facades\Storage;
class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flower_data = Flower::all();
        return view('admin.flower.flower', ['flowers' => $flower_data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flower = new Flower;
        $name = $request->input('name');
        $flower->flowerName = $name;
        
        $flower->stokMiktar = $request->input('stokMiktar');
        $flower->price = $request->input('price');
        if ($request->file('anaResim')) {
            $file = $request->file('anaResim');
            $anaResim_filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path("flowerImages/$name/anaResim/"), $anaResim_filename);
        }
        $flower->anaResim = $anaResim_filename== null? " ": $anaResim_filename;
        $resimler = [];
        if ($request->file('resimUrl')) {
            foreach ($request->file('resimUrl') as $key => $altresim) {

                $altresim_filename = date('YmdHi') . $altresim->getClientOriginalName();
                $altresim->move(public_path("flowerImages/$name/"), $altresim_filename);
                array_push($resimler, $altresim_filename);
            }
        }
        $flower->altResim = json_encode($resimler)== null? " ": json_encode($resimler);
        $flower->save();
        return redirect()->route('admin.flower');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flowerData = Flower::find($id);
        return view('admin.flower.flower-edit', ['flowerData' => $flowerData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $flower = Flower::find($id);
        $name = $request->input('name');
        $flower->flowerName = $name;
        
        $flower->stokMiktar = $request->input('stokMiktar');
        $flower->price = $request->input('price');
        if ($request->file('anaResim')) {
            $file = $request->file('anaResim');
            $anaResim_filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path("flowerImages/$name/anaResim/"), $anaResim_filename);
        }
        $flower->anaResim = $anaResim_filename== null? " ": $anaResim_filename;
        $flower->save();
        return redirect()->route('admin.flower');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flower = Flower::find($id);
        $flower->delete();
        return redirect()->route('admin.flower');
    }
}
