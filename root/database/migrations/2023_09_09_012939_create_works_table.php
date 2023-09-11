<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'works';
        Schema::create($tableName, function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->integer('user_id')->length(11)->comment('ユーザーID');
            $table->string('work_content',255)->comment('業務内容');
            $table->string('comment',255)->comment('総務コメント');
            $table->date('date')->comment('日付');
            $table->time('work_start_time')->comment('出勤時間');
            $table->time('work_end_time')->comment('退勤時間');
            $table->time('break_time')->comment('休憩時間');
            $table->integer('status_id')->comment('ステータス');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('論理削除');
        });
        DB::statement("ALTER TABLE {$tableName} COMMENT '勤怠'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};
