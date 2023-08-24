<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->foreignId('article_id');
            $table->foreignId('tag_id');
            // Any additional pivot columns can be defined here
        });
    }

    public function down()
    {
        Schema::dropIfExists('article_tag');
    }
}


?>