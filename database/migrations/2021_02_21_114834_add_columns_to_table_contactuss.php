<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableContactuss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contactuss', function (Blueprint $table) {
            $table->string('namecont')->nullable($value = false)->after('id');
            $table->string('emailcont')->nullable($value = false)->after('namecont');
            $table->text('descriptioncont')->nullable($value = false)->after('emailcont');
            $table->string('phonecont')->nullable($value = false)->after('descriptioncont');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactuss', function (Blueprint $table) {
            //
        });
    }
}
