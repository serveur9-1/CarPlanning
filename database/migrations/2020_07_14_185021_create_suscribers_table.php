<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marque');
            $table->string('model');
            $table->string('serie');
            $table->string('type_energie');
            $table->string('immatriculation');
            $table->string('kilometrage');
            $table->string('expire_visite');
            $table->string('expire_assurance');
            $table->string('numero_payement')->nullable();
            $table->string('numero')->nullable();
            $table->string('email');
            $table->string('parrain')->nullable();
            $table->timestamp('new_updated')->nullable();
            $table->timestamp('old_updated')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
            $table->boolean('is_pro')->nullable()->default(0);

            $table->unsignedBigInteger('user_id')->index();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscribers');
    }
}
