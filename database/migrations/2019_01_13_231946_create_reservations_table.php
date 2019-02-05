<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reserveable_type');
            $table->unsignedInteger('reserveable_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('state_id')->default (1);
            $table->timestamp ('started_at')->default (now ());
            $table->timestamp ('ended_at')->default (now ());
            $table->boolean('deleted')->default (0);
            $table->timestamp ('confirmed_at')->nullable ();
            $table->timestamp ('canceled_at')->nullable ();
            $table->timestamp ('deleted_at')->nullable ();
            $table->timestamp ('validated_at')->nullable ();
            $table->timestamps();

            $table->foreign ('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

            $table->foreign ('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations', function (Blueprint $table) {
            $table->dropForeign (['state_id','user_id']);
        });
    }
}
