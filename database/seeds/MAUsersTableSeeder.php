<?php

use Illuminate\Database\Seeder;

class MAUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  array(
            array('id'=>1,'email'=>'deo@deo', 'first_name'=>'First_demo', 'last_name'=>'Last_demo', 'role_id'=>1,
                'remember_token'=>'asjhd', 'position'=>'demo_position', 'password'=>Hash::make('demodemo')),
        );
        DB::table('ma_users')->insert($data);
    }
}
