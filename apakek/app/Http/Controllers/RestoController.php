<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use App\Models\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district = 'All Places in Bandung';
        $resto = Resto::where('status', 'approved')->get();
        $rekomen = Resto::where('rekomen','ya')->get();
        return view('foryou', compact('resto','district','rekomen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
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

        if($request->hasfile('foto_slide')){
            foreach($request->file('foto_slide') as $image_content){
                $name_content = $image_content->getClientOriginalName(). '-'. time();
                $image_content->move(public_path().'/gambar_resto/',$name_content);
                $data_content[] = $name_content;
            }
        }

        if($request->hasfile('foto_menu')){
            foreach($request->file('foto_menu') as $image_menu){
                $name_menu = $image_menu->getClientOriginalName(). '-'. time();
                $image_menu->move(public_path().'/gambar_resto/',$name_menu);
                $data_menu[] = $name_menu;
            }
        }

        $resto = new Resto();
        $resto->namaresto = $request->nama_cafe;
        $resto->district = $request->kawasan;
        $resto->address = $request->lokasi_cafe;
        $resto->open = $request->waktubuka;
        $resto->close = $request->waktututup;
        $resto->price = $request->harga1;
        $resto->upto = $request->harga2;
        $resto->thumbnail = $thumb;
        $resto->content = json_encode($data_content);
        $resto->menu = json_encode($data_menu);
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

        // $slide = $request->foto_slide->getClientOriginalName() . '-' . time()
        //             . '.' . $request->foto_slide->extension();
        // $request->foto_slide->move(public_path('gambar_resto'), $slide);

        // $menu = $request->foto_menu->getClientOriginalName() . '-' . time()
        //             . '.' . $request->foto_menu->extension();
        // $request->foto_menu->move(public_path('gambar_resto'), $menu);

        if($request->hasfile('foto_slide')){
            foreach($request->file('foto_slide') as $image_content){
                $name_content = $image_content->getClientOriginalName(). '-'. time();
                $image_content->move(public_path().'/gambar_resto/',$name_content);
                $data_content[] = $name_content;
            }
        }

        if($request->hasfile('foto_menu')){
            foreach($request->file('foto_menu') as $image_menu){
                $name_menu = $image_menu->getClientOriginalName(). '-'. time();
                $image_menu->move(public_path().'/gambar_resto/',$name_menu);
                $data_menu[] = $name_menu;
            }
        }


        $resto = new Resto();
        $resto->namaresto = $request->nama_cafe;
        $resto->district = $request->kawasan;
        $resto->address = $request->lokasi_cafe;
        $resto->open = $request->waktubuka;
        $resto->close = $request->waktututup;
        $resto->price = $request->harga1;
        $resto->upto = $request->harga2;
        $resto->thumbnail = $thumb;
        $resto->content = json_encode($data_content);
        $resto->menu = json_encode($data_menu);
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
    public function show($district)
    {
        $resto = Resto::where('district','=', $district)->get();
        $rekomen = Resto::where('rekomen','ya')->get();
        return view('foryou', compact('resto','district','rekomen'));
    }

    public function showDetail(Request $request, $id){
        $resto = Resto::all();
        $detailResto = Resto::find($id);
        return view('detail',compact('detailResto','resto'));
    }

    public function updateResto(Request $request, $id)
    {
        $resto = Resto::find($id);
        if($request->foto_thumb){
            $thumb = $request->foto_thumb->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_thumb->extension();
            $request->foto_thumb->move(public_path('gambar_resto'), $thumb);
        }elseif($request->foto_thumb == null){
            $thumb = $resto->thumbnail;
        }

        if($request->hasfile('foto_slide')){
            foreach($request->file('foto_slide') as $image_content){
                $name_content = $image_content->getClientOriginalName(). '-'. time();
                $image_content->move(public_path().'/gambar_resto/',$name_content);
                $data_content[] = $name_content;
            }
        }elseif($resto->foto_slide == null){
            $data_slide = $resto->content;
        }

        if($request->hasfile('foto_menu')){
            foreach($request->file('foto_menu') as $image_menu){
                $name_menu = $image_menu->getClientOriginalName(). '-'. time();
                $image_menu->move(public_path().'/gambar_resto/',$name_menu);
                $data_menu[] = $name_menu;
            }
        }elseif($request->foto_menu == null){
            $data_menu = $resto->menu;
        }


        $resto->namaresto = $request->nama_cafe;
        $resto->district = $request->kawasan;
        $resto->address = $request->lokasi_cafe;
        $resto->open = $request->waktubuka;
        $resto->close = $request->waktututup;
        $resto->price = $request->harga1;
        $resto->upto = $request->harga2;
        $resto->thumbnail = $thumb;
        $resto->content = $data_slide;
        $resto->menu = $data_menu;
        $resto->rekomen = $request->rekomen;
        $resto->save();

        return redirect('/admin');
    }

    public function deleteResto($id)
    {
        $resto = Resto::find($id);
        $resto->delete();

        return back();
    }

    public function showLike()
    {
        $resto = like::where('user_id',Auth::user()->id)->get();
        return view('like',compact('resto'));
    }

    public function like($id)
    {

        $like = new like();
        $like->user_id = Auth::user()->id;
        $like->resto_id = $id;
        $like->liked = 'yes';
        $like->save();

        return redirect('/detail/'.$id);

    }

    public function unlike($id)
    {
        $like = like::find($id);
        $like->delete();

        return back();
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
