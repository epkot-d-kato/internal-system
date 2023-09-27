<?php

namespace Tests\Feature;

use App\Models\Work;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WorkTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $work = Work::factory()->create();
        $this->assertDatabaseHas('works',[
            'id' => $work -> id,
            'user_id' => $work -> user_id,
            'work_content' => $work -> work_content,
            'comment' => $work -> comment,
            'date' => $work -> date,
            'work_start_time' => $work -> work_start_time,
            'work_end_time' => $work -> work_end_time,
            'break_time' => $work -> break_time,
            'status_id' => $work -> status_id,
            // 'created_at' => $work -> created_at,
            // 'updated_at' => $work -> updated_at,
            // 'deleted_at' => $work -> deleted_at,
        ]);
    }
}
