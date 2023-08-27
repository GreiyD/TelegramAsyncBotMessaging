<?php

namespace App\Models\Entity;

use App\Models\Abstract\AModel;
use App\Models\Factories\AudioFactory;
use App\ValueObjects\DefaultValidator;
use ReflectionClass;

/**
 * Class AMessage
 * @property array|mixed parameters
 * @package App\Models\Abstracts
 */
abstract class AMessage extends AModel
{

	use AudioFactory;

	/*** @return array|mixed */
	public function getParameters(): mixed
	{
		return $this->parameters;
	}

	/*** @param array|mixed $parameters */
	public function setParameters(mixed $parameters): void
	{
		$this->parameters = $parameters;
	}

	/**
	 * @param array $parameters
	 * @return mixed
	 */
	public function setData(array $parameters): mixed
	{
		$methodName = strtolower((new \ReflectionClass ($this))->getShortName()) . 'Factory';
		/**
		 * @uses AudioFactory::audioFactory()
		 */
		return $this::$methodName($this, $parameters);
	}

	/***
	 * @param $params
	 * @return mixed
	 */
	public function validate($params): mixed
	{
		$methodName = strtolower((new \ReflectionClass ($this))->getShortName());
		/**
		 * @uses DefaultValidator::audio()
		 */
		return DefaultValidator::$methodName($params);
	}

}