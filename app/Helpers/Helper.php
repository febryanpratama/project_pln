<?php

namespace App\Helpers;

use App\Models\Detail_interval_waktu;
use App\Models\Detection;
use App\Models\Kriteria;
use App\Models\Occurence;

class Helper
{
    static function TotalRpn($severity_id, $occurence_id, $detection_id)
    {

        $severity = Kriteria::where('id', $severity_id)->withTrashed()->first();
        $rating_severity = $severity->rating_kriteria;

        $occurence = Occurence::where('id', $occurence_id)->withTrashed()->first();
        $rating_occurence = $occurence->rating_occurence;

        $detection = Detection::where('id', $detection_id)->withTrashed()->first();
        $rating_detection = $detection->rating_detection;

        $rpn = $rating_severity * $rating_occurence * $rating_detection;

        return $rpn;

        // dd($rating_severity);


    }

    static function normal($x, $mu, $sigma)
    {
        return exp(-0.5 * ($x - $mu) * ($x - $mu) / ($sigma * $sigma))
            / ($sigma * sqrt(2.0 * M_PI));
    }

    static function besar($x, $mu, $sigma)
    {
        return exp(-0.5 * ($x - $mu) * ($x - $mu) / ($sigma * $sigma))
            / ($sigma * sqrt(5.162 * M_PI));
    }

    static function rt($x, $mu, $sigma)
    {
        return 1 - exp(-0.5 * ($x - $mu) * ($x - $mu) / ($sigma * $sigma))
            / ($sigma * sqrt(5.162 * M_PI));
    }

    static function dt($r, $l, $m, $n, $ml)
    {
        return ($r * $l + $m) / ($n + $ml);
    }

    // function normal_distribution

    static function erf($x)
    {
        $sign = ($x >= 0) ? 1 : -1;
        $x = abs($x);

        $a1 = 0.254829592;
        $a2 = -0.284496736;
        $a3 = 1.421413741;
        $a4 = -1.453152027;
        $a5 = 1.061405429;
        $p = 0.3275911;

        $t = 1 / (1 + $p * $x);
        $y = 1 - (($a1 * $t + $a2 * pow($t, 2) + $a3 * pow($t, 3) + $a4 * pow($t, 4) + $a5 * pow($t, 5)) * $t) * $sign;
        return $y;
    }

    static function getHariRcm($id)
    {
        $data = Detail_interval_waktu::where('interval_waktu_id', $id)->orderBy('dt', 'asc')->first();

        return $data->t;
    }
}
