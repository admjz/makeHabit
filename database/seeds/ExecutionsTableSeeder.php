<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExecutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('executions')->truncate();
        DB::table('executions')->insert([
            [
                'habit_id' => 1,
                'contents'   => 'PHP',
                'created_at' => Carbon::create(2020, 8, 14),
                'updated_at' => Carbon::create(2020, 8, 14)
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(2020, 8, 15),
                'updated_at' => Carbon::create(2020, 8, 15)
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Mysql',
                'created_at' => Carbon::create(2020, 8, 16),
                'updated_at' => Carbon::create(2020, 8, 16)
            ],
            [
                'habit_id' => 2,
                'contents'   => '腹筋',
                'created_at' => Carbon::create(2020, 8, 10),
                'updated_at' => Carbon::create(2020, 8, 10)
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(2020, 8, 1),
                'updated_at' => Carbon::create(2020, 8, 1)
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(2020, 8, 2),
                'updated_at' => Carbon::create(2020, 8, 2)
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(2020, 8, 3),
                'updated_at' => Carbon::create(2020, 8, 3)
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(2020, 8, 4),
                'updated_at' => Carbon::create(2020, 8, 4)
            ],
        ]);
    }
}
