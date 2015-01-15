<?php


namespace Paracall\Database\Migrations;


use Illuminate\Database\Capsule\Manager;
use Paracall\Database\Migration;

class CreateStocazzTable extends Migration {

    public function up()
    {
        Manager::schema()->create('stocazz', function($table){
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Manager::schema()->drop('stocazz');
    }
}