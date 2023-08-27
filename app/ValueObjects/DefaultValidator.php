<?php

namespace App\ValueObjects;

use Illuminate\Support\Facades\Validator;

/**
 * Class Request
 * @package App\ValueObjects
 */
class DefaultValidator
{

	/**
	 * @param array $parameters
	 * @return \Illuminate\Validation\Validator
	 */
	public static function audio(array $parameters): \Illuminate\Validation\Validator
	{
		return Validator::make(
			$parameters,
			[
				'audio'                => 'nullable',
				'file_path'            => 'required',
				'caption'              => 'nullable|string',
				'duration'             => 'nullable|string',
				'performer'            => 'nullable|string',
				'title'                => 'nullable|string',
				'disable_notification' => 'nullable|boolean',
			]
		);
	}
}