<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return [
            [
                "name"=> "زيارة عامة",
                "tid"=> "264"
            ],
            [
                "name"=> "حضور فعالية",
                "tid"=> "265"
            ],
            [
                "name"=> "زيارة علمية",
                "tid"=> "266"
            ],
            [
                "name"=> "تصريح منشآت",
                "tid"=> "267"
            ]
            ];
     }
}
