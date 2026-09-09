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
        Schema::table('articles', function (Blueprint $table) {
            $table->string('title_ja')->nullable()->after('title');
            $table->longText('content_ja')->nullable()->after('content');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->string('title_ja')->nullable()->after('title');
        });

        Schema::table('achievements', function (Blueprint $table) {
            $table->string('title_ja')->nullable()->after('title');
            $table->text('description_ja')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['title_ja', 'content_ja']);
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn(['title_ja']);
        });

        Schema::table('achievements', function (Blueprint $table) {
            $table->dropColumn(['title_ja', 'description_ja']);
        });
    }
};
