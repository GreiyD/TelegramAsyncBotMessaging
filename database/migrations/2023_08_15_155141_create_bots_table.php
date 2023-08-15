<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create(
			'bots',
			static function(Blueprint $table) {
				$table->id();
				$table->integer('type_id');
				$table->string('name');
				$table->string('nick');
				$table->string('token')->unique();
				$table->string('description')->nullable();
				$table->string('about')->nullable();
				$table->json('commands')->nullable();
				$table->timestamp('created_at')->useCurrent();
				$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
				$table->timestamp('deleted_at')->nullable()->default(NULL);
			}
		);
		DB::statement('ALTER TABLE `bots` ADD `avatar` MEDIUMBLOB AFTER `description`');
	}

};
