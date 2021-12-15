<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'admin'.str_random(5).'@firstdays.com',
            'password' => bcrypt(env('SEEDERPW')),
        ]);
    }
}
