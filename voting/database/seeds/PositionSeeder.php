<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('positions')->insert([
            'title'=>'President'
        ]);
        DB::table('positions')->insert([
            'title'=>'Vice-President'
        ]);
        DB::table('positions')->insert([
            'title'=>'Secretary'
        ]);
        DB::table('positions')->insert([
            'title'=>'Treasurer'
        ]);
    }
}
