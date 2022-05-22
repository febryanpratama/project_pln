<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sub_swbs extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function swbs(){

        return $this->belongsTo(swbs::class, 'swbs_id', 'id');
    }
}
