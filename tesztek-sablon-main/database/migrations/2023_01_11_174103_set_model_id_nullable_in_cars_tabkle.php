<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetModelIdNullableInCarsTabkle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->foreignId('model_id')->nullable()->change();
            $table->dropForeign('cars_model_id_foreign');
            $table->foreign('model_id', 'cars_model_id_foreign')
                ->references('id')->on('models')->onDelete("SET NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->foreignId('model_id')->change();
            $table->dropForeign('cars_model_id_foreign');
            $table->foreign('model_id', 'cars_model_id_foreign')
                ->references('id')->on('models');
        });
    }
}
