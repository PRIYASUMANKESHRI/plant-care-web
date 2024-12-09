<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('stripe_id');
            $table->string('stripe_status');
            $table->timestamp('issued_at');
            $table->timestamp('due_at')->nullable();
            $table->decimal('amount', 8, 2);
            $table->decimal('amount_paid', 8, 2);
            $table->decimal('amount_due', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
