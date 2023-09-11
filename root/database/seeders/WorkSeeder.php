<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDateTime = now();

        DB::table('works')->insert([
            'user_id'=> 1,
            'work_content'=>'テスト',
            'comment'=>'テスト',
            'date'=>'2023-09-09',
            'work_start_time'=>'09:00:00',
            'work_end_time'=>'18:00:00',
            'break_time'=>'01:00:00',
            'status_id'=>1,
            'created_at'=> $currentDateTime,
            'updated_at'=> $currentDateTime,
        ]);
    }
}
