<?php
/*
|--------------------------------------------------------------------------
| Disable direct access
|--------------------------------------------------------------------------
|
*/

# Make sure admin is logged in
authenticate_admin();

# Make sure table does not exist before creating the table
if (!db_table_exist('app_chat')) {
    DB::schema()->create('app_chat', function ($table) {
        $table->increments('id');

        $table->text('contents')->nullable();
        $table->text('message')->nullable();
        $table->enum('type',[
            'Admin',
            'Client',
        ]);
        $table->unsignedInteger('from_id')->nullable();
        $table->unsignedInteger('to_id')->nullable();
        $table->dateTime('time')->nullable();
        $table->boolean('read')->nullable();
        $table->boolean('sent')->nullable();
        $table->string('attachment_path')->nullable();
        $table->timestamps();
    });
}