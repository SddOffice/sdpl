<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //
    public function registration(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'email' => 'required|unique:registrations,email,'.$req->input('email'),
            'mobile_no' => 'required|unique:registrations,mobile_no,'.$req->input('mobile_no'),
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $model = new Registration;

            $model->name = $req->input('name');
            $model->email = $req->input('email');
            $model->mobile_no = $req->input('mobile_no');
            $model->password = $req->input('password');
            
            if($model->save()){
                return response()->json([
                    'status'=>200
                ]);  
            }else{
                return response()->json([
                    'status'=>400
                ]);
            }
        }
        
    }
}
