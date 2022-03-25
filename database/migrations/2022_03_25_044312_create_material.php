<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('categoryID');
            $table->integer('subCategoryID');
            $table->integer('workSpotID');
            $table->integer('unitID');
            $table->string('description');
            $table->string('rate');
            $table->string('qty');
            $table->string('rackNo');
            $table->string('qtyInUse');
            $table->string('criticalQty');
            $table->boolean('status')->default(true);
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material');
    }
}
