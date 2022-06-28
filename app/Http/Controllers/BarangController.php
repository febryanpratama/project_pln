<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use MathPHP\Probability\Distribution\Continuous;
// use MathPHP\Probability\Distribution\Continuous;
// use gburtini\Distributions\Normal;
use \PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\Normal;
use \PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal;


// use \PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal;


class BarangController extends Controller
{
    //

    public function index()
    {
        $title = 'Barang List';
        $data = Barang::get();
        return view('pages.admin.barang.index', compact(['title', 'data']));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'path_barang' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator)->with('error', 'Gagal Menambahkan Data');
        }
        $data = $request->all();

        if ($request->hasFile('path_barang')) {
            # code...
            $depan = $request['path_barang'];
            $fileName = 'images/foto_barang/' . md5($depan->getClientOriginalName() . time()) . "." . $depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_barang/', $fileName);

            $data['path_barang'] = $fileName;

            Barang::create($data);

            return back()->with('success', 'Berhasil Menambahkan Data Barang');
        }
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token', 'barang_id');
        if ($request->hasFile('path_barang')) {
            # code...
            $depan = $request['path_barang'];
            $fileName = 'images/foto_barang/' . md5($depan->getClientOriginalName() . time()) . "." . $depan->getClientOriginalExtension();
            $depan->move('./uploads/images/foto_barang/', $fileName);

            $data['path_barang'] = $fileName;
        }

        Barang::where('id', $request['barang_id'])->update($data);

        return back()->with('success', 'Berhasil Mengubah Data Barang');
    }

    public function destroy(Request $request)
    {
        Barang::where('id', $request['barang_id'])->delete();
        return back()->with('success', 'Berhasil Menghapus Data Barang');
    }

    // public function test()
    // {
    //     $spreadsheet = new Normal();
    //     $data = $spreadsheet->distribution(5, 354.8, 14.873, false);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);

    //     // $
    //     // $data1 = Helper::besar(5, 354.8, 14.873);

    //     $data2 = Helper::rt(5, 354.8, 14.873);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);

    //     // $spread = new StandardNormal();
    //     // $x  = $spread->distribution(0, true);
    //     // dd("5 --------------------ft=" . $data . "-------------Ft=" . $data1 . '------------rt=' . $data2);


    //     // norm.dist(5, 354.8, 14.873)
    //     $data = $spreadsheet->distribution(0, 354.8, 14.873, false);
    //     $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data2 = $spreadsheet->distribution(0, 354.8, 14.873, true);
    //     // $data1 = $spreadsheet->distribution(0, 354.8, 14.873, true);

    //     // dd($data1);
    //     // $x = 7.1662E-126;
    //     // $b1 =  0.319381530;
    //     // $b2 = -0.356563782;
    //     // $b3 =  1.781477937;
    //     // $b4 = -1.821255978;
    //     // $b5 =  1.330274429;
    //     // $p  =  0.2316419;
    //     // $c  =  0.39894228;

    //     // if (
    //     //     $x >= 0.0
    //     // ) {
    //     //     $t = 1.0 / (1.0 + $p * $x);
    //     //     $kl =  (1.0 - $c * exp(-$x * $x / 2.0) * $t *
    //     //         ($t * ($t * ($t * ($t * $b5 + $b4) + $b3) + $b2) + $b1));
    //     //     dd($kl . "awda");
    //     // } else {
    //     //     $t = 1.0 / (1.0 - $p * $x);
    //     //     $kt = ($c * exp(-$x * $x / 2.0) * $t *
    //     //         ($t * ($t * ($t * ($t * $b5 + $b4) + $b3) + $b2) + $b1));

    //     //     dd($kt . "uih");
    //     // }

    //     $σ      = 14.873;
    //     $μ      = 354.8;
    //     $x      = 274;
    //     // $standardNormal = new Continuous\StandardNormal();
    //     $normal = new Continuous\Normal($μ, $σ);
    //     $pdf    = $normal->pdf($x);
    //     $cdf            = $normal->cdf($x);

    //     // dd($cdf);


    //     // function cumnormdist($x)
    //     // {
    //     // }

    //     // 
    //     // $μ         = 354.8;   // scale parameter
    //     // $σ         = 14.873;   // location parameter
    //     // $x         = 0;
    //     // $logNormal = new Continuous\LogNormal($μ, $σ);
    //     // // $logNormal = new Continuous\LogNorm($μ, $σ);
    //     // $pdf       = $logNormal->pdf($x);
    //     // $cdf       = $logNormal->cdf($x);
    //     // // $icdf      = $logNormal->inverse($p);
    //     // $μ         = $logNormal->mean();
    //     // $median    = $logNormal->median();
    //     // $mode      = $logNormal->mode();
    //     // $σ²        = $logNormal->variance();

    //     // $σ      = 354.8;
    //     // $μ      = 14.873;
    //     // $x      = 2;
    //     // $normal = new Continuous\Normal($μ, $σ);
    //     // $pdf    = $normal->pdf($x);
    //     // $cdf    = $normal->cdf($x);
    //     // $icdf   = $normal->inverse(1);
    //     // $μ      = $normal->mean();
    //     // $median = $normal->median();
    //     // $mode   = $normal->mode();
    //     // $σ²     = $normal->variance();


    //     // echo $pdf . "-----------------" . $cdf;
    //     // dd($);
    //     // use gburtini\Distributions\Normal;
    //     // 
    //     // $σ      = 14.873;
    //     // $μ      = 354.8;
    //     // $x      = 0;
    //     // $normal = new Continuous\Normal($μ, $σ);
    //     // $pdf    = $normal->pdf($x);
    //     // $cdf    = $normal->cdf($x);
    //     // // $icdf   = $normal->inverse();
    //     // $μ      = $normal->mean();
    //     // $median = $normal->median();
    //     // $mode   = $normal->mode();

    //     // dd($cdf);
    //     $h = 0.5 * (1 + Helper::erf((325 - 354.18) / (14.873 * sqrt(2))));

    //     dd($h);
    // }
}
