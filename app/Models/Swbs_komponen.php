<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Swbs_komponen extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function subsistem(){
        return $this->belongsTo(sub_swbs::class, 'subsistem_id', 'id');
    }
}
