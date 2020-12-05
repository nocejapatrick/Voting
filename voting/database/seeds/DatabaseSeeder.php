<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);



        DB::table('users')->insert([
            'first_name'=>'Patrick',
            'last_name'=>'Noceja',
            'email'=>'nocejapatrick@gmail.com',
            'password'=>bcrypt('temp123456')

        ]);

        
        DB::table('users')->insert([
            'first_name'=>'Voter',
            'last_name'=>'One',
            'email'=>'voterone@gmail.com',
            'password'=>bcrypt('temp123456')

        ]);


        DB::table('users')->insert([
            'first_name'=>'Voter',
            'last_name'=>'Two',
            'email'=>'votertwo@gmail.com',
            'password'=>bcrypt('temp123456')

        ]);


        $this->call([
            RoleSeeder::class,
            PositionSeeder::class
        ]);
    }
}
