<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;
    public function profile(){
        return $this->hasMany(Profile::class,'specialization_id');
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
