<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->dropColumn('umur');
        });
    }

    public function down()
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->integer('umur')->nullable(); // Adjust type and constraints as needed
        });
    }

};
