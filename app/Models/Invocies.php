<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invocies extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customers::class);
    }


}
