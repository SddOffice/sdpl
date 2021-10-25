<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        $data = Registration::all();
        return response()->json([
            'status'=>200,
            'msg'=>'ok',
            'data'=>$data
            
        ]);
    }
}
