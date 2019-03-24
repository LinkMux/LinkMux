<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class UpdateShortlinksTableSourceAndTargetName.
 */
class UpdateShortlinksTableSourceAndTargetName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shortlinks', function (Blueprint $table) {
            $table->renameColumn("source", "hash");
            $table->renameColumn("target", "original_url");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shortlinks', function (Blueprint $table) {
            $table->renameColumn("hash", "source");
            $table->renameColumn("original_url", "target");
        });
    }
}
