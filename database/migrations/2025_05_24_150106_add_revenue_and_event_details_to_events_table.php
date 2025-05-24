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
        Schema::table('events', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('event_date');
            $table->integer('participant_limit')->after('price');
            $table->integer('participant_count')->default(0)->after('participant_limit');
            $table->string('city')->after('address');
            $table->time('event_time')->after('event_date');
            $table->enum('event_type', ['workshop', 'zoom_meeting', 'seminar', 'webinar'])->after('event_time');
            // Optional: kolom total_revenue jika ingin disimpan
            $table->decimal('total_revenue', 12, 2)->default(0)->after('participant_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['price', 'participant_limit', 'participant_count', 'city', 'event_time', 'event_type', 'total_revenue']);
        });
    }
};
