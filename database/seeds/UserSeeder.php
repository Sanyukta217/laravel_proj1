<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_tbl')->insert([
            'name'=>'Sanyukta',
            'email'=>'sanyukta@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
