<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use Predis\Client;

class FormController extends Controller
{
    public function index()
    {
        $datas = User::find(auth()->user()->id);

        return view('detailAccount', ["datas" => $datas]);
    }

    public function logOut(Request $request) 
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect("/login");
        }
    }

    public function deleteAcc(Request $request)
    {
        if(Auth::check())
        {
            $user = User::find(auth()->user()->id);
            $user->delete();
            return redirect("/login");
        }
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required',
            'gambar' => 'required|max:20480|mimes:jpg,png,jpeg'
        ]);

        
        

        $extension = $request->file('gambar')->extension();
        $filename = date('Y-m-d-H-i-s') . "." . $extension;

        $request->file('gambar')->storeAs('public/images', $filename);
        
        $request['gambar'] = $filename;
        User::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "confirm" => $request->confirm,
            "gambar" => $filename,
        ]);

        return redirect('/allForm');
    }

    public function getCache()
    {   
        //Cache::put('keyy', 'keyyyy', 60);
        
        // $users = User::all();
        // Cache::put('users', $users, 60);    

        // Retrieve data from the cache
        $value = Cache::get('users');
        dd($value);
    }

    public function cache()
    {   
        $users = User::all();
        Cache::put('users', $users, 45);
    }
}
