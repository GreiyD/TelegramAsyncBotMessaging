<?php

namespace App\Models;

use App\Traits\DatesByDefault;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BotType
 * @property integer id
 * @property string  title
 * @package App\Models
 */
class BotType extends Model
{
	use DatesByDefault;

	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getTitle(): string
	{
		return $this->title;
	}

	/*** @return string */
	public function getShortTitle(): string
	{
		return strtolower(str_replace(' ', '_', $this->title));
	}

	/*** @param string $title */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}
}
