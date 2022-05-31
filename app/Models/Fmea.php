<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fmea extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded =['id'];

    public function swbs(){
        return $this->belongsTo(swbs::class, 'swbs_id', 'id');
    }
    public function komponen(){
        return $this->belongsTo(Swbs_komponen::class, 'komponen_id', 'id');
    }
    public function subswbs(){
        return $this->belongsTo(sub_swbs::class, 'swbs_id', 'swbs_id');
    }

    
    public function severity(){
        return $this->belongsTo(Kriteria::class, 'severity_id', 'id');
    }
    public function occurence(){
        return $this->belongsTo(Occurence::class, 'occurence_id', 'id');
    }
    public function detection(){
        return $this->belongsTo(Detection::class, 'detection_id', 'id');
    }

    public function fungsi(){
        return $this->belongsTo(Fungsi_sistem::class, 'komponen_id', 'komponen_id');
    }
}
