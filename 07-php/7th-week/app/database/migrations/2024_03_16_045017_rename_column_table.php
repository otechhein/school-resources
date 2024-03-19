<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::table('testings', function (Blueprint $table) {
            DB::statement("ALTER TABLE testings CHANGE COLUMN name namenew VARCHAR(255);");
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testings', function (Blueprint $table) {
            //
            // $table->removeColumn('name_new', 'name');
        });
    }
};
