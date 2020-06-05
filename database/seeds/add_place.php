<?php

use Illuminate\Database\Seeder;

class add_place extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('place')->insert(
            [
                ['img'=>'THN.jpg'],
                ['img'=>'TQNinh.jpg'],
                ['img'=>'TSapa.jpg'],
                ['img'=>'TNinhBinh.jpg'],
                ['img'=>'TThanhHoa.jpg']
            ]
        );
    }
}
