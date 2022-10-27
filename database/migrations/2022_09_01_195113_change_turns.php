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
        Schema::table('user_reservations', function (Blueprint $table) {
            $table->time('turn')->nullable();
            $table->dropForeign(['turn_id']);
            $table->dropColumn('turn_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_reservation', function (Blueprint $table) {
            //
        });
    }
};
