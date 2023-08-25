<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTimestampsFromStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('students', 'created_at')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropColumn('created_at');
            });
        }

        if (Schema::hasColumn('students', 'updated_at')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropColumn('updated_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // You can add code here to re-add the columns if needed
    }
}
