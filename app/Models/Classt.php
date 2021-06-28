<?php
/*
 * @Author: Alexcutest
 * @Date: 2021-06-28 11:29:08
 * @LastEditTime: 2021-06-28 14:41:45
 * @LastEditors: Alexcutest
 * @Description: 
 * @FilePath: /artlaravel-1/app/Models/Classt.php
 * Learn and live
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classt extends Model
{
    protected $table = "classt";
    public $timestamps = true;
    protected $primaryKey = "classt_id";
    protected $guarded = [];
}
