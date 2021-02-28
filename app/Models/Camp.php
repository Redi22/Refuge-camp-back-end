<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CampResources;
class Camp extends Model
{
    use HasFactory;
    public function camp_resources()
    {
        return $this->hasMany(CampResources::class);
    }
}
