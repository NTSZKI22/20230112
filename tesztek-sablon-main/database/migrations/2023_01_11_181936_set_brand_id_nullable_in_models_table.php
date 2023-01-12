<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetBrandIdNullableInModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('models', function (Blueprint $table) {
            $table->foreignId('brand_id')->nullable()->change();
            $table->dropForeign('models_brand_id_foreign');
            $table->foreign('brand_id', 'models_brand_id_foreign')
                ->references('id')->on('brands')->onDelete("SET NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('models', function (Blueprint $table) {
            $table->foreignId('brand_id')->change();
            $table->dropForeign('models_brand_id_foreign');
            $table->foreign('brand_id', 'models_brand_id_foreign')
                ->references('id')->on('brands');
        });
    }
}
