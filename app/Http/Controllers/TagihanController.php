<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function callback(){
        $data = request()->all();

        $status = $data['status'];
        $external_id = $data['external_id'];

        Tagihan::where('doc_no', $external_id)->update([
            'payment_status' => $status
        ]);

        return response()->json($data);
    }
}
