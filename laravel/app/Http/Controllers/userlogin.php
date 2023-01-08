<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserLogin extends Controller
{

    public function login(){
        return view('login');
    }

    public function regis(){
        return view('regis');
    }


    public function store(Request $request){
        $data = new User();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = "user";
        $data->status = "not logged in";
        $data->save();

        return redirect('/login');
    }

    public function masuk(Request $request)
    {
        $data = User::where('email', $request->email)->firstOrFail();
        if ($data->email == $request->email){
                $syarat = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
                if (Auth::attempt($syarat)) {
                    $request->session()->regenerate();
                    if($data->role == 'user'){
                        $data->status = 'logged in';
                        $data->save();
                        return redirect()->intended('/foryou');
                    }elseif($data->role == 'admin'){
                        $data->status = 'logged in';
                        $data->save();
                        return redirect('/admin');
                    }

                }

        }else{
            return redirect('/login');
        }
    }

    public function logout($id){
        $user = User::find($id);
        $user->status ='not logged in';
        $user->save();
        Auth::logout();
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $poto = "";
        if ($request->foto) {
            $poto = $request->foto->getClientOriginalName() . '-' . time()
                . '.' . $request->foto->extension();
            $request->foto->move(public_path('ava'), $poto);
        }elseif ($request -> foto == null){
            $poto = $user->foto;
        }
        if ($request->pw == $request->pwbaru){
            $user->username=$request->username;
            $user->foto=$poto;
            $user->save();
        }

        return redirect('/foryou');

    }

}
