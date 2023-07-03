<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //        return response(['message'=>'ffffffffffffffffffff'],400);

        $offers = [];
        $events = [];
        $bookings = [];
        $favorites = [];

        for ($j = 0; $j < 3; $j++) {
            $offers[] = [
                'id' => $j + 1,
                'image' => "https://img.freepik.com/premium-photo/football-stadium-with-stands-full-fans-waiting-night-game-d-rendering_207634-4274.jpg?w=2000",
            ];
        }
        for ($i = 0; $i < 10; $i++) {
            $events[] = [
                'id' => $j + 1,
                'image' => "https://ca-times.brightspotcdn.com/dims4/default/aeca7d5/2147483647/strip/true/crop/5490x3635+0+0/resize/1200x795!/quality/80/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F06%2F95%2F0f6f64c34edd9a36de710e69510f%2Fla-photos-1staff-597718-sp-0821-sofi-stadium16-wjs.jpg",
            ];
        }

        for ($i = 0; $i < 5; $i++) {
            $bookings[] = [
                'id' => $j + 1,
                'title' => "ملعب الدوسري",
                'date' => "2023-06-10 15:26:16.682",
                'type' => "paddle_court",
                'price' => 225.50
            ];
        }
        for ($i = 0; $i < 5; $i++) {
            $favorites[] = [
                'id' => $j + 1,
                'title' => "ملعب الدوسري",
                'type' => "paddle_court",
                'date' => "2023-06-10 15:26:16.682",
                'price' => 225.50
            ];
        }

        $cities = [];

        $cities[] = [
            'id' => 1,
            'name' => "محافظة الخرج",
        ];
        
        $cities[] = [
            'id' => 2,
            'name' => "محافظة الرياض",
        ];
        
        $cities[] = [
            'id' => 3,
            'name' => "محافظة جدة",
        ];
        
        $cities[] = [
            'id' => 4,
            'name' => "محافظة المدينة المنورة",
        ];
        

        $data = ([
            'data' =>
            [
                'cities'=>$cities,
                'offers' => $offers,
                'events' => $events,
                'bookings' => $bookings,
                'favorites' => $favorites,
            ]
        ]);

        return response($data);
    }
}
