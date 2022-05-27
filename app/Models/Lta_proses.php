<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lta_proses extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function komponen(){
        return $this->belongsTo(Swbs_komponen::class,'komponen_id', 'id');
    }
}
