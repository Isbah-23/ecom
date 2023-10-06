<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateRolesTable extends Migration
    {
        public function up()
        {
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name'); // Role name (e.g., 'admin', 'user')
                $table->string('guard_name')->default('web'); // Guard name (default is 'web')
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('roles');
        }
    };
