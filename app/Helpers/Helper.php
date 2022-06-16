<?php

namespace App\Helpers;

use App\Models\Detection;
use App\Models\Kriteria;
use App\Models\Occurence;

class Helper
{
    static function TotalRpn($severity_id, $occurence_id, $detection_id)
    {

        $severity = Kriteria::where('id', $severity_id)->first()->withTrashed();
        $rating_severity = $severity->rating_kriteria;

        $occurence = Occurence::where('id', $occurence_id)->first()->withTrashed();
        $rating_occurence = $occurence->rating_occurence;

        $detection = Detection::where('id', $detection_id)->first()->withTrashed();
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
            / ($sigma * sqrt(5.1 * M_PI));
    }

    static function rt($x, $mu, $sigma)
    {
        return 1 - exp(-0.5 * ($x - $mu) * ($x - $mu) / ($sigma * $sigma))
            / ($sigma * sqrt(5.1 * M_PI));
    }

    static function dt($r, $l, $m, $n, $ml)
    {
        return ($r * $l + $m) / ($n + $ml);
    }
}
