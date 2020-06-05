<?php

use Illuminate\Database\Seeder;

class serveInclude extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serveincludes')->insert(
            [
                 //tour hà nội
 [
    'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR Hà Nội',
    'price'=>1000000,
    'number'=>10,
    'img'=>'dv1.jpg',
    'idTour'=>1
],
//  [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1700000,
//     'number'=>20,
//     'img'=>'dv1.jpg',
//     'idTour'=>2
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>2
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>3
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>3
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>4
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>4
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>5
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>5
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>3
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>3
// ],[
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>4
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>4
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>5
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>5
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>6
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>6
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>8
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>7
// ],
// [
//     'id'=>'0020',
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>7
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>8
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>8
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>9
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>9
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>10
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>10
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>11
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>11
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>12
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>12
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>13
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>13
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>14
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>14
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>15
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>15
// ],
// //
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>16
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>16
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN - TOUR MIỀN BẮC 5N',
//     'price'=>1000000,
//     'number'=>10,
//     'img'=>'dv1.jpg',
//     'idTour'=>17
// ],
// [
//     'name'=>'ĐÓN/ TIỄN SÂN BAY TRONG NỘI THÀNH (THEO TOUR)',
//     'price'=>500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>17
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>18
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>19
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>20
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>21
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>22
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>23
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>24
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>25
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>26
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>27
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>28
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>29
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>30
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>31
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>32
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>33
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>34
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>35
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>36
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>37
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>38
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>1500000,
//     'number'=>10,
//     'img'=>'dv2.jpg',
//     'idTour'=>39
// ],
// // nam
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>40
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>41
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>42
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>43
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>44
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>45
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>46
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>47
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>48
// ],
// [
//     'name'=>'PHỤ THU PHÒNG ĐƠN ',
//     'price'=>750000,
//     'number'=>10,
//     'img'=>'dv3.jpg',
//     'idTour'=>49,
// ],



            ]
        );
    }
}
