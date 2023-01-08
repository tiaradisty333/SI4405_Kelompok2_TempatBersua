<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $thumb = $request->foto_thumb->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_thumb->extension();
        $request->foto_thumb->move(public_path('gambar_resto'), $thumb);

        $slide = $request->foto_slide->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_slide->extension();
        $request->foto_slide->move(public_path('gambar_resto'), $slide);

        $menu = $request->foto_menu->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_menu->extension();
        $request->foto_menu->move(public_path('gambar_resto'), $menu);

        $resto = new Resto();
        $resto->namaresto = $request->nama_cafe;
        $resto->district = $request->kawasan;
        $resto->address = $request->lokasi_cafe;
        $resto->open = $request->waktubuka;
        $resto->close = $request->waktututup;
        $resto->price = $request->harga1;
        $resto->upto = $request->harga2;
        $resto->thumbnail = $thumb;
        $resto->content = $slide;
        $resto->menu = $menu;
        $resto->category = 'gratis';
        $resto->status = 'approved';
        $resto->rekomen = 'tidak';
        $resto->save();

        return redirect('/admin');
    }

    public function storeuser(Request $request)
    {
        $thumb = $request->foto_thumb->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_thumb->extension();
        $request->foto_thumb->move(public_path('gambar_resto'), $thumb);

        $slide = $request->foto_slide->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_slide->extension();
        $request->foto_slide->move(public_path('gambar_resto'), $slide);

        $menu = $request->foto_menu->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_menu->extension();
        $request->foto_menu->move(public_path('gambar_resto'), $menu);

        $resto = new Resto();
        $resto->namaresto = $request->nama_cafe;
        $resto->district = $request->kawasan;
        $resto->address = $request->lokasi_cafe;
        $resto->open = $request->waktubuka;
        $resto->close = $request->waktututup;
        $resto->price = $request->harga1;
        $resto->upto = $request->harga2;
        $resto->thumbnail = $thumb;
        $resto->content = $slide;
        $resto->menu = $menu;
        $resto->category = $request->kategori;
        $resto->status = 'waiting';
        if($request->kategori == 'gratis'){
            $resto->rekomen = 'tidak';
        }elseif($request->kategori){
            $resto->rekomen = 'ya';
        }
        $resto->save();

        return redirect('/foryou');
    }

    public function ubahStatusPost($id){
        $resto = Resto::find($id);
        $resto->status = 'approved';
        $resto->save();
        return redirect('/admin');
    }
    public function ubahStatusDecline($id){
        $resto = Resto::find($id);
        $resto->status = 'declined';
        $resto->save();
        return redirect('/admin');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

    }

    public function showDetail(Request $request, $id){
        $detailResto = Resto::find($id);
        return view('detail',compact('detailResto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function edit(Resto $resto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resto $resto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resto $resto)
    {
        //
    }
}
