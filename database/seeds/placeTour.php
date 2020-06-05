<?php

use Illuminate\Database\Seeder;

class placeTour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place')->insert(
            
            // [
            //     'name'=>'Hà Nội',
            //     'idRegion'=>1,
            // ],
           [
               [
                'name'=>'Hạ Long',
                'idRegion'=>1
               ],
            [
                'name'=>'SaPa',
                'idRegion'=>1
            ],
            [
                'name'=>'Ninh Bình',
                'idRegion'=>1
            ],
            [
                'name'=>'Thanh Hóa',
                'idRegion'=>1
            ],
            [
                'name'=>'Phan Thiết',
                'idRegion'=>2
            ],
            [
                'name'=>'Nha Trang',
                'idRegion'=>2
            ],
            [
                'name'=>'Đà Lạt',
                'idRegion'=>2
            ],
            [
                'name'=>'Tây Nguyên',
                'idRegion'=>2
            ],
            [
                'name'=>'Tuy Hòa-Quy Nhơn-Quảng Ngãi',
                'idRegion'=>2
            ],
            [
                'name'=>'Hội An-Đà Nẵng',
                'idRegion'=>2
            ],
            [
                'name'=>'Huế-Quảng Nam',
                'idRegion'=>2
            ],
            [
                'name'=>'Phú Quốc',
                'idRegion'=>3
            ],
            [
                'name'=>'Miền Tây',
                'idRegion'=>3
            ],
            [
                'name'=>'Côn Đảo',
                'idRegion'=>3
            ],
            [
                'name'=>'Hồ Tràm',
                'idRegion'=>3
            ],
            [
                'name'=>'Vũng Tàu',
                'idRegion'=>3
            ],
           ]
            
        );
    }
}
