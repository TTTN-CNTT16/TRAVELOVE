<?php

use Illuminate\Database\Seeder;

class slideTour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slideTour')->insert(
            [
                // ha noi 1
                // [
                //     'img'=>'hn10',
                //     'idTour'=>'1'
                // ],
                
                // [
                //     'img'=>'hn11',
                //     'idTour'=>'1'
                // ],
                // [
                //     'img'=>'hn12',
                //     'idTour'=>1
                // ],
                // [
                //     'img'=>'hn13',
                //     'idTour'=>1
                // ],
                //ha noi 2
                [
                    'img'=>'hn20',
                    'idTour'=>2
                ],
                [
                    'img'=>'hn21',
                    'idTour'=>2
                ],
                [
                    'img'=>'hn22',
                    'idTour'=>2
                ],
                [
                    'img'=>'hn23',
                    'idTour'=>2
                ],
            ]
        );
    }
}
