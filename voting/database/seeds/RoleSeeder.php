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
        //

        DB::table('roles')->insert([
            'name'=>'admin',
            'guard_name'=>'web',
        ]);

        DB::table('roles')->insert([
            'name'=>'voter',
            'guard_name'=>'web',
        ]);


        DB::table('model_has_roles')->insert([
            'role_id'=>1,
            'model_type'=>'App\User',
            'model_id'=>1
        ]);


        DB::table('model_has_roles')->insert([
            'role_id'=>2,
            'model_type'=>'App\User',
            'model_id'=>2
        ]);

        DB::table('model_has_roles')->insert([
            'role_id'=>2,
            'model_type'=>'App\User',
            'model_id'=>3
        ]);

    }
}
