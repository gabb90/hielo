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
        if (!Schema::hasColumn('picture_excurtions', 'type')) {
            Schema::table('picture_excurtions', function (Blueprint $table) {
                $table->string('type', 20)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pictures_excurtions', function (Blueprint $table) {
            //
        });
    }
};
