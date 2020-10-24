<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


protected $fillable = [
                    'name','email','phone','address','gender','degree','specialist','serial_phone_no',
];

public function diseases(){
    // return $this->belongsToMany('App\Models\disease');

    return $this->belongsToMany(Disease::class,'disease_doctor');
}

}

