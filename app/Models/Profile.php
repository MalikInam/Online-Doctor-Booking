<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
  
    public function speciality(){
        return $this->belongsTo(Specialization::class,'specialization_id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
