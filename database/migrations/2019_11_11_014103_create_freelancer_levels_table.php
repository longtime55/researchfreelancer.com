<?php
/**
 * Class CreateFreelancerLevelsTable
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @version <1.0.0>
 * @link    http://www.amentotech.com
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancerLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'freelancer_levels',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('slug');
                $table->text('abstract')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('freelancer_levels');
    }
}
