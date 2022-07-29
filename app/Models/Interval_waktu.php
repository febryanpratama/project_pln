<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interval_waktu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function komponen()
    {
        return $this->belongsTo(Swbs_komponen::class, 'komponen_id', 'id');
    }

    public function detailIntervalWaktu()
    {
        return $this->hasMany(Detail_interval_waktu::class, 'interval_waktu_id', 'id')->main()->first();
    }
}
