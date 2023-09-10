<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "type",
        "email",
        "address",
        "city",
        "postal_code",

    ];
    public function invocies(){
        return $this->hasMany(Invocies::class);
    }
}
