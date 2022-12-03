<?php

use Illuminate\Database\Seeder;

class LightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lights')->insert([
            [
              'id'   => 1, 
              'lightsAmount'  => 130.5,
              'status' => 0,
            ],
            [
                'id'   => 2, 
                'lightsAmount'  => 130.5,
                'status' => 0,
              ],
              [
                'id'   => 3, 
                'lightsAmount'  => 90,
                'status' => 0,
              ],
              [
                'id'   => 4, 
                'lightsAmount'  => 90,
                'status' => 0,
              ],
              [
                'id'   => 5, 
                'lightsAmount'  => 90,
                'status' => 0,
              ],
              [
                'id'   => 6, 
                'lightsAmount'  => 130.5,
                'status' => 0,
              ],
              [
                'id'   => 7, 
                'lightsAmount'  => 60.10,
                'status' => 0,
              ],
              [
                'id'   => 8, 
                'lightsAmount'  => 130.5,
                'status' => 0,
              ],
              [
                'id'   => 9, 
                'lightsAmount'  => 50.60,
                'status' => 0,
              ],
              [
                'id'   => 10, 
                'lightsAmount'  => 180,
                'status' => 1,
              ],
            ]
            );
    }
}
