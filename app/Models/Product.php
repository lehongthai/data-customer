<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    /**
     * Get all product, username, categories
     *
     * @return mixed
     */
    public static function getAllProduct(){
        $sql = 'SELECT u.name as uName, c.name as cName, p.*             
                    FROM products as p 
                    LEFT JOIN users as u 
                        ON p.user_id = u.id 
                    LEFT JOIN categories as c
                        ON c.id = p.cate_id';
        return DB ::select($sql);
    }
}
