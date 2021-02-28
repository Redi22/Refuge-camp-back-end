<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampResource;
class CampResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $res = new CampResource();
        $res->name =" Some little task";
        $res->type = "some";
        $res->measurement = "litter";
        $res->type = "some";
        $res->start_target_age = 9;
        $res->end_target_age = 40;
        $res->unit_per_refuge = 10;
        $res->target_gender = "female";
        $res->description = "description description description description description description description ";
        $res->quantity = 100;
        $res->camp_id = 1;   
        $res->save();
        
        
    }
}
