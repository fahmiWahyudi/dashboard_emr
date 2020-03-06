<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChartController extends Controller
{
    public function chart($no_emr){
        // $segment_posts = request()->segment(2);
        $data['no_emr'] = $no_emr;
        // $data['html1'] = '<b>Percobaan Tulis HTML</b>';
        return view('dashboard_chart', $data);
    }

    public function get_data_chart(Request $request){
        $data_chart = DB::select("SELECT DATE_FORMAT(waktu_pengukuran,'%y%m%d%H%i') as date,param_1,param_2,param_3,param_4,param_5 FROM data_chart WHERE no_emr = ?",[$request->no_emr]);
        // dd($request->no_emr);
        return response()->json(
            [
                'status' => 'success',
                'data' => $data_chart
            ]
        );
    }
}
