<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'profiles',
            function (Blueprint $table) {
                $table->text('certification')->nullable();
                $table->string('transaction_currency')->nullable();
                $table->string('withdraw_details')->nullable();
                $table->year('years_exp')->nullable();
                $table->string('market_profile')->nullable();
                $table->integer('citation_id')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'profiles',
            function (Blueprint $table) {
                $table->dropColumn('certification');
                $table->dropColumn('transaction_currency');
                $table->dropColumn('withdraw_details');
                $table->dropColumn('years_exp');
                $table->dropColumn('market_profile');
                $table->dropColumn('citation_id');
            }
        );
    }
}
