<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
            $table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')->references('id')->on('tags');
			$table->string('name');
			$table->string('slug');
			$table->text('description')->nullable();
			$table->string('ticket_number')->nullable();
			$table->integer('priority')->unsigned()->default(0);
			$table->string('old_tag')->nullable();
			$table->string('requestor')->nullable();
			$table->date('due_date')->nullable();
			$table->date('completed_date')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
