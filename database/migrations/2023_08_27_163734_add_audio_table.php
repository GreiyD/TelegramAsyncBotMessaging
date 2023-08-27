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
			'audio',
			static function(Blueprint $table) {
				$table->id();
				$table->string('file_path')->unique();
				$table->string('audio')->nullable();
				$table->string('caption')->nullable();
				$table->string('duration')->nullable();
				$table->string('performer')->nullable();
				$table->string('title')->nullable();
				$table->boolean('disable_notification')->default(FALSE);
				$table->timestamp('created_at')->useCurrent();
				$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
				$table->timestamp('deleted_at')->nullable()->default(NULL);
			}
		);
	}
};
