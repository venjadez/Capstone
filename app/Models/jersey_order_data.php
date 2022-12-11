<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jersey_order_data extends Model
{
    public $table ='jersey_order_data';
    public $primaryKey ='id';
    public $incrementing ='true';
    public $timestamps ='false';
}
class jersey_order_info extends Model
{
    public $table ='jersey_order_info';
    public $primaryKey ='id';
    public $incrementing ='true';
    public $timestamps ='false';
}