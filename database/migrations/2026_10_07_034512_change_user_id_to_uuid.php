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
        Schema::table('_user', function (Blueprint $table) {
            $table->uuid('uuid')->nullable();
        });

        DB::statement('UPDATE "_user" SET "uuid" = gen_random_uuid()');

        DB::statement('ALTER TABLE "_user" DROP CONSTRAINT "_user_pkey"');

        Schema::table('_user', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        Schema::table('_user', function (Blueprint $table) {
            $table->renameColumn('uuid', 'id');
        });

        DB::statement('ALTER TABLE "_user" ALTER COLUMN "id" SET NOT NULL');
        DB::statement('ALTER TABLE "_user" ADD PRIMARY KEY ("id")');
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
