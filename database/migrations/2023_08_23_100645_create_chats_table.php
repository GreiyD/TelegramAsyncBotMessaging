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
			'chats',
			static function(Blueprint $table) {
				$table->id();
				$table->string('name');
				$table->string('time')->nullable();
				$table->string('limit')->nullable();
				$table->boolean('limit_enabled')->nullable();
				$table->json('data')->nullable();
				$table->timestamp('created_at')->useCurrent();
				$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
				$table->timestamp('deleted_at')->nullable()->default(NULL);
			}
		);
	}

};
