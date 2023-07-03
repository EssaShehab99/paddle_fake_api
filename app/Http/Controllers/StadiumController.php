<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function index(Request $request)
    {
        return Stadium::where('city_id', $request->city_id)
            ->paginate(10);
    }
    public function show(Request $request,Stadium $stadium)
    {
        return [

            "id" => 4,
            "name" => "ملعب الدوسري",
            "details" => '<ul>
                <li style="text-align: right;"><span style="color: #a2aab8;">الملعب امن للنساء</span></li>
                <li style="text-align: right;"><span style="color: #a2aab8;">الحجز يشمل الماء والموسيقى والكرات</span></li>
                </ul>',
            "available_days" => [
                ["id" => 1,        "name" => "السبت",        "date" => "2023-06-10T21:36:08.000000Z"],
                ["id" => 2,        "name" => "الأحد",        "date" => "2023-06-11T21:36:08.000000Z"],
                ["id" => 3,        "name" => "الاثنين",        "date" => "2023-06-12T21:36:08.000000Z"],
                ["id" => 4,        "name" => "الثلاثاء",        "date" => "2023-06-13T21:36:08.000000Z"],
                ["id" => 5,        "name" => "الأربعاء",        "date" => "2023-06-14T21:36:08.000000Z"],
                ["id" => 6,        "name" => "الخميس",        "date" => "2023-06-15T21:36:08.000000Z"],
                ["id" => 7,        "name" => "الجمعة",        "date" => "2023-06-16T21:36:08.000000Z"]
            ],
            "available_durations" => [
                [
                    "id" => 1,
                    "name" => "ساعة",
                ],
                [
                    "id" => 2,
                    "name" => "ساعة ونصف",
                ],
                [
                    "id" => 3,
                    "name" => "ساعتين",
                ],
                [
                    "id" => 4,
                    "name" => "ساعتين ونصف",
                ],
            ],
            "price" => 3,
            "rate" => 4.8,
            "currency" => "ر/س",
            "address" => "الخرج - حي الاندلس - شارع التوحيد",
            "distance" => "3 كيلو متر",
            "is_favorite" => true,
            "image_url" => "https://via.placeholder.com/200x200.png/002277?text=minima",
            "created_at" => "2023-06-29T21:36:08.000000Z",
            "updated_at" => "2023-06-29T21:36:08.000000Z",

        ];
    }
    public function getAvailableBookings(Request $request,Stadium $stadium)
    {
        return [
                ["id"=>1,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
                ["id"=>2,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
                ["id"=>3,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
                ["id"=>4,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
                ["id"=>5,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
                ["id"=>6,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
                ["id"=>7,"from" => "2023-06-10T21:36:08.000000Z","to" => "2023-06-10T21:36:08.000000Z"],
         ];
    } 
      public function checkCode(Request $request)
    {
        return [
            "data"=>[
                'code' => $request->code,
                'amount' => 25,
                'message' =>"هذا الكوبون متاح",
                'is_valid' => true,
            ]
        ];
    }


    public function setFavorite(Request $request)
    {
        // Retrieve the stadium ID and is_favorite value from the request
        $stadiumId = $request->input('id');
        $isFavorite = $request->input('is_favorite');

        // Perform the necessary logic to update the stadium as a favorite in the database or storage

        // Return the response indicating the success or failure of the operation
        return response()->noContent();
    }
}
