<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jersey_order_data;
use App\Models\jersey_order_info;
class JerseyController extends Controller
{

    function jerseyformdata(){
        return view('Jersey');
    }
}
