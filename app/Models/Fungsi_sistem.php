<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fungsi_sistem extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function komponen(){
        return $this->belongsTo(Swbs_komponen::class, 'komponen_id', 'id');
    }
    public function swbs(){
        return $this->belongsTo(swbs::class, 'swbs_id', 'id');
    }
    public function subswbs(){
        return $this->belongsTo(sub_swbs::class, 'subsistem_id', 'id');
    }

    
}
