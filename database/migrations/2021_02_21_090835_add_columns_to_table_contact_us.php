<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableContactUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contactUs', function (Blueprint $table) {
            $table->string('namecon')->nullable($value = false)->after('id');
            $table->string('emailcon')->nullable($value = false)->after('namecon');
            $table->text('descriptioncon')->nullable($value = false)->after('emailcon');
            $table->integer('phonecon')->nullable($value = false)->after('descriptioncon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactUs', function (Blueprint $table) {
            //
        });
    }
}
