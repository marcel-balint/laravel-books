<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {

        // Get all table names in your database
        $tableNames = DB::select('SHOW TABLES');

        foreach ($tableNames as $tableName) {
            $tableName = reset($tableName);

            // Check if the table has a 'slug' column
            if (Schema::hasColumn($tableName, 'slug')) {
                // Add a unique index on the 'slug' column using raw SQL
                DB::statement("ALTER TABLE $tableName ADD UNIQUE INDEX unique_slug (slug)");
            }
        }
    }

    public function down()
    {
        // Get all table names in your database
        $tableNames = DB::select('SHOW TABLES');

        foreach ($tableNames as $tableName) {
            $tableName = reset($tableName);

            // Check if the table has a 'slug' column
            if (Schema::hasColumn($tableName, 'slug')) {
                // Drop the unique index on the 'slug' column using raw SQL
                DB::statement("ALTER TABLE $tableName DROP INDEX unique_slug");
            }
        }
    }
};
