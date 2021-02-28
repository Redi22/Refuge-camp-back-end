<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refuge extends Model
{
    use HasFactory;
    protected $fillable = [
        "fullName" , "age" , "gender" ,"allergies" , "region" ,"height" ,"weight" ,"illness" , "spouse_id" , "parent_id"    
    ];
    public function spouse()
    {   
        return $this->hasOne(Refuge::class, 'id', 'spouseId');;
    }
    public function parent()
    {
        return $this->belongsTo(Refuge::class);
    }
}
