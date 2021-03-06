<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name'     => 'Banjo',
                'email'    => 'Banjo@gmai.com',
                'password' => Hash::make('banjobanjo'),
            ]
        ]);
    }
}
