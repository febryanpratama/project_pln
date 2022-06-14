<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail_interval_waktu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function interval_waktu()
    {
        return $this->belongsTo(Interval_waktu::class, 'interval_waktu_id', 'id');
    }
}
