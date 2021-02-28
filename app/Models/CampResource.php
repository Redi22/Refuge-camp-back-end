<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Camp;
class CampResource extends Model
{
    use HasFactory;
    protected $fillable =[
        "name" ,"type" ,"measurement" ,"start_target_age" ,"end_target_age" ,"target_gender" ,"description" ,"unit_per_refuge" ,"quantity" , "camp_id"
    ];

    public function camp()
    {
        return $this->belongsTo(Camp::class);
    }   
}
