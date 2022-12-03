<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
              'id'   => 1, 
              'display_name'  => 'Administrator',
            ],
            [
              'id'   => 2,
              'display_name' => 'Employee',
            ]
            ]
            );
    }
}
