<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class swbs extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function sub_swbs()
    {
        return $this->hasMany(sub_swbs::class, 'swbs_id', 'id')->withTrashed();
    }
}
