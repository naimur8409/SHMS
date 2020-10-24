<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'doctor_id',
        'email',
        'phone',
        'gender',
        'age',
        'problem'
    ];

public function doctor(){

    return $this->belongsTo('App\Models\Doctor');
}
}
