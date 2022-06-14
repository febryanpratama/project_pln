<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Detail_interval_waktu;
use App\Models\Interval_waktu;
use App\Models\Kriteria;
use App\Models\Swbs_komponen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RcmController extends Controller
{
    //

    public function index()
    {
        $title = 'RCM';
        $komponen = Swbs_komponen::get();
        $data = Interval_waktu::with('komponen')->get();
        return view('pages.admin.rcm.index', compact(['title', 'data', 'komponen']));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $tf = $request->korektif / (24 * 60);
        $tp = $request->preventif / (24 * 60);

        $mu = 354.8;
        $sigma = 14.873;
        // dd($tp);

        // $data = array();
        DB::beginTransaction();

        try {
            //code...
            $interval_waktu = Interval_waktu::create([
                'komponen_id'       => $request->komponen_id,
                'waktu_korektif'    => $request->korektif,
                'waktu_preventif'   => $request->preventif,
                'tf'                => $tf,
                'tp'                => $tp,
                'mu'                => $mu,
                'sigma'             => $sigma,
            ]);

            $htu = NULL;
            for ($i = 0; $i <= 50; $i++) {
                # code...
                $fkecilt = Helper::normal($i, $mu, $sigma);
                $fbesart = Helper::besar($i, $mu, $sigma);
                $rt = Helper::rt($i, $mu, $sigma);
                $htu = $fbesart;
                if ($i == 0) {
                    # code...
                    $ht = $fbesart;
                } else {
                    $ht = (1 + $htu) * $fbesart;
                }
                $dt = Helper::dt($ht, $tf, $tp, $i, $tp);

                Detail_interval_waktu::create([
                    'interval_waktu_id' => $interval_waktu->id,
                    'fkecilt'           => $fkecilt,
                    'fbesart'           => $fbesart,
                    'rt'                => $rt,
                    'ht'                => $ht,
                    'dt'                => $dt
                ]);
            }

            DB::commit();

            return back()->with('success', 'Berhasil Menambahkan Interval Waktu');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return back()->with('error', $th);
        }
        // dd($data);
    }

    public function detail($id)
    {
        $title = 'Detail Interval Waktu';
        $data = Detail_interval_waktu::with('interval_waktu', 'interval_waktu.komponen')->where('interval_waktu_id', $id)->orderBy('dt', 'desc')->get();

        // dd($data);
        return view('pages.admin.rcm.detail', compact(['title', 'data']));
        // dd($data);
    }
}
