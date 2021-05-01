<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_number');
            $table->string('invoice_item');
            $table->foreignId('invoice_item_id')
                ->constrained('invoice_items')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('sold_by');
            $table->string('customer');

            $table->dateTime('date');
            $table->string('status');
            $table->integer('discount');
            $table->string('vat/tax');

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
        Schema::dropIfExists('invoices');
    }
}
