<?php

use Illuminate\Database\Seeder;

class cost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('costs')->insert(
            [
                // ha noi 
                [
                    'id'=>1,
                    'price'=>6279000,
                    'id_tour'=>1,
                    'effectDay'=>'2020-04-15',
                ],
            ]
            //     [
            //         'price'=>8129000,
            //         'idTour'=>2,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7879000,
            //         'idTour'=>3,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>9899000,
            //         'idTour'=>4,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // tour ha long
            //     [
            //         'price'=>9899000,
            //         'idTour'=>5,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6899000,
            //         'idTour'=>6,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>7,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8899000,
            //         'idTour'=>8,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // sapa
            //     [
            //         'price'=>8129000,
            //         'idTour'=>9,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>9899000,
            //         'idTour'=>10,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8769000,
            //         'idTour'=>11,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8869000,
            //         'idTour'=>12,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // ninh binh
            //     [
            //         'price'=>6279000,
            //         'idTour'=>13,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>14,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6899000,
            //         'idTour'=>15,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // phan thiet 
            //     [
            //         'price'=>5899000,
            //         'idTour'=>16,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>4899000,
            //         'idTour'=>17,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>18,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // nha trang 
            //     [
            //         'price'=>5899000,
            //         'idTour'=>19,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // da lat 
            //     [
            //         'price'=>8899000,
            //         'idTour'=>20,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>9899000,
            //         'idTour'=>21,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>22,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     // tay nguyen
            //     [
            //         'price'=>5899000,
            //         'idTour'=>23,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6799000,
            //         'idTour'=>24,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7799000,
            //         'idTour'=>25,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>4899000,
            //         'idTour'=>26,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8899000,
            //         'idTour'=>27,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>9899000,
            //         'idTour'=>28,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>5899000,
            //         'idTour'=>29,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>899000,
            //         'idTour'=>30,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>31,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>7899000,
            //         'idTour'=>32,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8899000,
            //         'idTour'=>33,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>9899000,
            //         'idTour'=>34,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>5899000,
            //         'idTour'=>35,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6899000,
            //         'idTour'=>36,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8899000,
            //         'idTour'=>37,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>6799000,
            //         'idTour'=>38,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6899000,
            //         'idTour'=>39,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>9899000,
            //         'idTour'=>40,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>41,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>4899000,
            //         'idTour'=>42,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6899000,
            //         'idTour'=>43,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>7899000,
            //         'idTour'=>44,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>6899000,
            //         'idTour'=>45,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>5899000,
            //         'idTour'=>46,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>8899000,
            //         'idTour'=>47,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     //
            //     [
            //         'price'=>9899000,
            //         'idTour'=>48,
            //         'effectDay'=>'2020-04-15',
            //     ],
            //     [
            //         'price'=>6899000,
            //         'idTour'=>49,
            //         'effectDay'=>'2020-04-15',
            //     ]
                
            // ]
           );
    }
}
