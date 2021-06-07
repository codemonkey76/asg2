<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('accounts_id')->nullable()->constrained('users', 'id');
            $table->string('sender_id')->nullable();
            $table->string('domain_name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('suburb')->nullable();
            $table->string('state')->nullable();
            $table->string('postcode')->nullable();
            $table->unsignedInteger('account_terms')->default(15);
            $table->integer('starting_balance')->default(0);
            $table->unsignedInteger('current_balance')->default(0);
            $table->integer('overdue_balance')->default(0);
            $table->unsignedInteger('credit_limit')->default(0);
            $table->unsignedInteger('max_daily_spend')->default(0);
            $table->boolean('unlimited')->default(false);
            $table->boolean('active')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
