<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rpn extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function barang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
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
}
