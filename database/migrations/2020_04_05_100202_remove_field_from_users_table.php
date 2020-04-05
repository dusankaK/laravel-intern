<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveFieldFromUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // The dropColumn in the up method, because with new migration we want to delete this column. 
            // How we can drop multiple columns - by passing an array of column names to the dropColumn method. $table->dropColumn(['votes', 'avatar', 'location'])
            $table->dropColumn('city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('city');
        });
    }
}
