<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataOPDPerpusip;
use App\Models\DataOPDPUTR;
use Illuminate\Http\Request;

class DataOPDController extends Controller
{
    public function index(){
        $data_putr = DataOPDPUTR::all();
        $data_putr_success = [
            'status' => 200,
            'data_putr' => $data_putr
        ];
        $data_putr_fail = [
            'status' => 404,
            'data_putr' => 'No Records Found!'
        ];

        if ($data_putr->count() > 0){
            return response()->json($data_putr_success, 200);
        } else {
            return response()->json($data_putr_fail, 404);
        }
    }

    public function apiPerpusip(){
        $data_perpusip = DataOPDPerpusip::all();
        $data_perpusip_success = [
            'status' => 200,
            'data_perpusip' => $data_perpusip
        ];
        $data_perpusip_fail = [
            'status' => 404,
            'data_perpusip' => 'No Records Found!'
        ];

        if ($data_perpusip->count() > 0){
            return response()->json($data_perpusip_success, 200);
        } else {
            return response()->json($data_perpusip_fail, 404);
        }
    }
}
