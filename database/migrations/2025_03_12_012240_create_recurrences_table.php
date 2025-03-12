<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurrences', function (Blueprint $table) {
            $table->increments('rec_cod');
            $table->integer('rec_cli_cod');
            $table->string('rec_cli_email');
            $table->integer('rec_owner_cod');
            $table->string('rec_owner_email');
            $table->timestamp('rec_start_date');
            $table->timestamp('rec_end_date')->nullable();
            $table->string('rec_type', 50);
            $table->string('rec_payment_method', 100);
            $table->integer('rec_frequency');
            $table->integer('rec_frequency_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurrences');
    }
}
