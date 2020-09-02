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
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(3)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(3)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'PHP',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay(2)->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay(2)->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(Carbon::yesterday()->subDay()->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->subDay()->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Laravel',
                'created_at' => Carbon::create(Carbon::yesterday()->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->toDateString())
            ],
            [
                'habit_id' => 1,
                'contents'   => 'Mysql',
                'created_at' => Carbon::create(Carbon::now()->toTimeString()),
                'updated_at' => Carbon::create(Carbon::now()->toTimeString())
            ],
            [
                'habit_id' => 2,
                'contents'   => '腹筋',
                'created_at' => Carbon::create(Carbon::yesterday()->toDateString()),
                'updated_at' => Carbon::create(Carbon::yesterday()->toDateString())
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
