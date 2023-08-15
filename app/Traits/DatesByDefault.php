<?php

namespace App\Traits;

use Carbon\Carbon;

/**
 * Trait Entity
 * @property Carbon created_at
 * @property Carbon updated_at
 * @package App\Traits
 */
trait DatesByDefault
{

	/*** @return Carbon */
	public function getCreatedAt(): Carbon
	{
		return $this->created_at;
	}

	/*** @return Carbon */
	public function getUpdatedAt(): Carbon
	{
		return $this->updated_at;
	}

}