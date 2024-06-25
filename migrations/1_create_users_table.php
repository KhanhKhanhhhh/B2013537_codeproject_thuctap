<?php
use App\Models\Ward;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up()
    : void{
        Schema::create('users', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username')->nullable();
            $table->string('sourcecode')->nullable();
            $table->string('responsibility_center')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('status')->default(1);
            $table->foreignIdFor(Ward::class)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('users');
    }
};
