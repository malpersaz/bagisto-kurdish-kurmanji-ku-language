<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if the locale already exists to prevent duplicates
        $exists = DB::table('locales')->where('code', 'ku')->exists();

        if (!$exists) {
            DB::table('locales')->insert([
                'code' => 'ku',
                'name' => 'Kurdî',
                'direction' => 'ltr',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('locales')->where('code', 'ku')->delete();
    }
};
