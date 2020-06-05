<?php

use Illuminate\Database\Seeder;

class regionTour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert(
            [  [
                  'name'=>'Miền Bắc',
              ],
              [
                  'name'=>'Miền Trung',
              ],
              [
                  'name'=>'Miền Nam',
              ]
            ]
          );
    }
}
