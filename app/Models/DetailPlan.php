<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPlan extends Model
{
    protected $table = 'datails_plan';

    public function plan(){
        return $this->belongsTo(Plan::class);
     }
}
