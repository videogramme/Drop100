<?php

class Create_Albums {

	/**
	 * Make changes to the database.
	 * Create the albums table in the database
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums', function($table) {
		    $table->increments('id');
		    $table->string('album_name', 255);
		    $table->text('album_artist');
		    $table->text('album_body');
		    $table->text('album_songs');
		    $table->text('album_price');
		    $table->text('album_quantity');
		    $table->text('album_tags');
		    $table->integer('album_author')->index();
		    $table->text('album_visible');
		    $table->text('album_comment');
		    $table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 * In this case we just drop the table
	 * @return void
	 */
	public function down()
	{
		Schema::drop('albums');
	}

}