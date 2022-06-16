<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PemilihanTindakan extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function komponen()
    {
        return $this->belongsTo(Swbs_komponen::class, 'komponen_id', 'id');
    }

    // public function fungsi(){
    //     return $this->belongsTo(Fungsi_sistem::class, '');
    // }
}
