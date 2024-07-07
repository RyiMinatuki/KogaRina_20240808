<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable.php extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table){
            $table->id();

            $table->string('name');
            // $table->string('name', 255);
            $table->string('email');
            // $table->string('email', 255);
            //↑えっ、字数制限いらんかったん？

            $table->integer('tel', 11);
            //↑これはあってた。

            $table->text('content')->nullable();
            // $table->string('content', 1000);
            // textメソッド。nullableはnull値（空っぽのデータ）を入れても大丈夫だよと表すもの。

            $table->timestamps();
            // $table->timestamp('created_at')->useCurrent()->nullable();
            // $table->timestamp('updated_at')->useCurrent()->nullable();
            // この二つはtimestampsでまとめることができる。
        });
        //↑自分で考えたコードとその修正。
        // マイグレーションで使えるメソッド→https://readouble.com/laravel/8.x/ja/migrations.html#column-method-bigIncrements
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('contacts');
    }
}
