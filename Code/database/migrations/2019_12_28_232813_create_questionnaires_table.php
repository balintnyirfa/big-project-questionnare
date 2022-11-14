<?php

# use ...

class CreateQuestionnairesTable extends Migration
{
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->bigIncrements('questionnareId');
            $table->string('questionnareName');

        });
    }

    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}