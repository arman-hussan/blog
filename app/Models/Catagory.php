<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function parent()
    {
    	return $this->belongsTo(Catagory::class,'parent_id');    }
}
