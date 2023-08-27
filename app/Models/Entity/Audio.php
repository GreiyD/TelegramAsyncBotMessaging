<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Audio
 * @property integer     id
 * @property string      file_path
 * @property File|NULL   audio
 * @property string|NULL caption
 * @property string|NULL duration
 * @property string|NULL performer
 * @property string|NULL title
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */
class Audio extends AMessage
{

	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 * @var array
	 */
	protected $fillable = [
		'file_path',
		'audio',
		'caption',
		'duration',
		'performer',
		'title',
		'disable_notification',
	];

	/*** @return string */
	public function getFilePath(): string
	{
		return $this->file_path;
	}

	/*** @param string $file_path */
	public function setFilePath(string $file_path): void
	{
		$this->file_path = $file_path;
	}

	/*** @return File|NULL */
	public function getAudio(): ?File
	{
		return $this->audio;
	}

	/*** @param File|NULL $audio */
	public function setAudio(?File $audio): void
	{
		$this->audio = $audio;
	}

	/*** @return string|NULL */
	public function getCaption(): ?string
	{
		return $this->caption;
	}

	/*** @param string|NULL $caption */
	public function setCaption(?string $caption): void
	{
		$this->caption = $caption;
	}

	/*** @return string|NULL */
	public function getDuration(): ?string
	{
		return $this->duration;
	}

	/*** @param string|NULL $duration */
	public function setDuration(?string $duration): void
	{
		$this->duration = $duration;
	}

	/*** @return string|NULL */
	public function getPerformer(): ?string
	{
		return $this->performer;
	}

	/*** @param string|NULL $performer */
	public function setPerformer(?string $performer): void
	{
		$this->performer = $performer;
	}

	/*** @return string|NULL */
	public function getTitle(): ?string
	{
		return $this->title;
	}

	/*** @param string|NULL $title */
	public function setTitle(?string $title): void
	{
		$this->title = $title;
	}

	/*** @return bool */
	public function isDisableNotification(): bool
	{
		return $this->disable_notification;
	}

	/*** @param bool $disable_notification */
	public function setDisableNotification(bool $disable_notification): void
	{
		$this->disable_notification = $disable_notification;
	}

}
