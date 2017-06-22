<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BCATestConfig extends Model
{
    public static function getConfig(){
        $sql = 'SELECT u.name as uName, c.*             
                    FROM b_c_a_test_configs as c 
                    LEFT JOIN users as u 
                        ON c.user_id = u.id';
        return DB::select($sql);
    }
}
