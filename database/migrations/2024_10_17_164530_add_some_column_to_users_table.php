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
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('is_active')->default(1)->after('remember_token');
            $table->integer('created_by')->nullable()->after('is_active');
            $table->ipAddress('created_from_ip')->nullable()->after('created_by');
            $table->integer('updated_by')->nullable()->after('created_from_ip');
            $table->integer('updated_from_ip')->nullable()->after('updated_by');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_active');
            $table->dropColumn('created_by');
            $table->dropColumn('created_from_ip');
            $table->dropColumn('updated_by');
            $table->dropColumn('updated_from_ip');
            $table->dropSoftDeletes();
        });
    }
};
