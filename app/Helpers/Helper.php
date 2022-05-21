<?php
namespace App\Helpers;

use App\Models\Detection;
use App\Models\Kriteria;
use App\Models\Occurence;

class Helper
{
    static function TotalRpn($severity_id, $occurence_id, $detection_id){
        
        $severity = Kriteria::where('id', $severity_id)->first();
        $rating_severity = $severity->rating_kriteria;

        $occurence = Occurence::where('id', $occurence_id)->first();
        $rating_occurence = $occurence->rating_occurence;

        $detection = Detection::where('id', $detection_id)->first();
        $rating_detection = $detection->rating_detection;

        $rpn = $rating_severity*$rating_occurence*$rating_detection;

        return $rpn;

        // dd($rating_severity);


    }
}