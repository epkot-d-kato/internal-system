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
        $tableName= 'users';
        Schema::create($tableName, function (Blueprint $table) {
            $table->id()->length(11)->comment('ID');
            $table->string('last_name')->comment('名字');
            $table->string('first_name',100)->comment('名前');
            $table->string('last_name_kana')->comment('名字(ふりがな)');
            $table->string('first_name_kana')->comment('名前(ふりがな)');
            $table->integer('role_id')->nullable->length(11)->comment('権限');
            $table->string('prefecture')->nullable()->comment('都道府県');
            $table->string('address1',255)->nullable()->comment('市町村・番地');
            $table->string('address2',255)->nullable()->comment('建造物名・部屋番号');
            $table->string('email',255)->comment('メールアドレス');
            $table->string('email_verified_at',255)->comment('メール認証');
            $table->string('password',100)->comment('パスワード');
            $table->string('remember_token',255)->comment('リメンバートークン');
            $table->date('join_date')->comment('入社日');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
            $table->timestamp('deleted_at')->comment('論理削除');
            $table->unique(['email']);
        });
        DB::statement("ALTER TABLE {$tableName} COMMENT '社員一覧'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
