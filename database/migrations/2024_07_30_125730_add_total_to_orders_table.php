<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Only add the 'total' column if it doesn't already exist
        if (! Schema::hasColumn('orders', 'total')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->decimal('total', 8, 2)->after('zip');
            });
        }
    }

    public function down()
    {
        // Drop the 'total' column if it exists
        if (Schema::hasColumn('orders', 'total')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('total');
            });
        }
    }
};
