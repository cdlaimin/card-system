<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSystemsTable extends Migration { public function up() { Schema::create('systems', function (Blueprint $sp8280da) { $sp8280da->increments('id'); $sp8280da->string('name', 100)->unique(); $sp8280da->longText('value')->nullable(); $sp8280da->timestamps(); }); } public function down() { Schema::dropIfExists('systems'); } }