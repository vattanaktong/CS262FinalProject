<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProductsrecommendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productsrecommend', function (Blueprint $table) {
            $table->foreignid('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productsrecommend', function (Blueprint $table) {
            $table->dropForeign('productsrecommend_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
