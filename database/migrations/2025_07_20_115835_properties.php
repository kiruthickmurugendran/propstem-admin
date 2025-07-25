<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create ('properties', function(Blueprint $table) {
            $table ->bigIncrements('id');
            $table ->string('name');
            $table ->string('address');
            $table ->string('location');
            $table ->string('city');
            $table ->string('district');
            $table ->string('state');
            $table ->string('latitude');
            $table ->string('longitude');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
