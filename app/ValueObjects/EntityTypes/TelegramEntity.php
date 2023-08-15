<?php

namespace App\ValueObject\Messages;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/**
 * Class TelegramEntity
 * @package App\Messages
 */
abstract class TelegramEntity
{
	/*** @var array */
	protected array $required = [];

	/*** @var array */
	protected array $optional = [];

	/*** @var array|mixed */
	protected $parameters = [];

	/*** @param array $parameters */
	public function __construct(array $parameters = [])
	{
		$this->parameters = $parameters;
	}

	/**
	 * @param $method
	 * @param $args
	 * @return $this
	 */
	public function __call($method, $args)
	{
		$parameter = Str::snake($method);
		if (count($args) === 1 && (in_array($parameter, $this->required, TRUE) || in_array($parameter, $this->optional, TRUE))) {
			$this->parameters[$parameter] = reset($args);
		}
		return $this;
	}

	/***
	 * @return void
	 * @throws ValidationException
	 */
	public function validate(): void
	{
		Validator
			::make(
				$this->parameters,
				array_combine(
					$this->required,
					array_pad([], count($this->required), 'required')
				)
			)
			->validate();
	}

	/*** @return array|mixed */
	public function toArray()
	{
		return $this->parameters;
	}
}