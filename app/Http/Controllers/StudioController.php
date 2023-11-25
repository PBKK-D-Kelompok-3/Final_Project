<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
    {
        $studios = Studio::all();

        // return view('studio', ['studios' => $studios]);

        return response()->json([
            'message' => "success", 
            'data' => $studios,
        ]);
    }

    public function createStudio(Request $request)
    {
        $studio = Studio::create([
            'name' => $request->name
        ]);

        if($studio)
        {
            return redirect('/studios');
        }
    }
}
