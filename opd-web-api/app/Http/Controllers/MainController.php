<?php

namespace App\Http\Controllers;

use App\Models\DataOPDPUTR;
use App\Models\ListDataOPD;
use App\Models\ListOPD;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('landing-page.main');
    }

    public function mainAPI() {
        return view('api.opd.service_list');
    }

    public function viewPageDataAPI($opd){
        $nama_opd = ListOPD::where('slug_opd', $opd)->first()->nama_opd;
        return view('api.opd.get_data', [
            'daftar_opd' => $nama_opd,
            'slug_opd' => $opd
        ]);
    }

    public function pilihDataDigunakanAPI($slug_opd)
    {
        $data = ListDataOPD::where('slug_opd', $slug_opd)->where('daftar_data', 'LIKE', '%' . request('q') . '%')->paginate(10);
        return response()->json($data);
    }

    public function returnPageDataAPI(){
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
            $json_data = response()->json($data_putr_success, 200);
        } else {
            $json_data = response()->json($data_putr_fail, 404);
        }
        return $json_data;
    }
}
