<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function GetVisitorDetails(){

        date_default_timezone_set("Asia/Riyadh");

        $ip_address = $_SERVER['REMOTE_ADDR'];
        $visit_time = date("h:i:sa");
        $visit_date = date("d:m:y");

        $result = visitor::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date
        ]);

        return $result;

    }
}
