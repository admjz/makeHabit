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
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(10)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(10)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'PHP',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(9)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(9)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'PHP',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(8)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(8)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'PHP',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(7)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(7)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'PHP',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(6)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(6)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(5)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(5)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(Carbon::yesterday(4)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday(4)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(3)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(3)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(2)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(2)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Mysql',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(1)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(1)->toDateString())
            ],
            [
                'habit_id' => 2,
                'contents'   => '腹筋50回',
                'created_at' => Carbon::create(Carbon::yesterday()->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->toDateString())
            ],
            [
                'habit_id' => 2,
                'contents'   => '腕立て伏せ50回',
                'created_at' => Carbon::create(Carbon::now()->toTimeString()),
                'updated_at' => Carbon::create(Carbon::now()->toTimeString())
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(10)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(10)->toDateString())
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(16)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(16)->toDateString())
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(18)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(18)->toDateString())
            ],
            [
                'habit_id' => 3,
                'contents'   => '',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(19)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(19)->toDateString())
            ],
        ]);
    }
}
