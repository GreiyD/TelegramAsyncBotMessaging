<?php

namespace App\Models;

use App\Models\Abstract\AModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Bot
 * @property integer           id
 * @property integer           type_id
 * @property string            name
 * @property string            nick
 * @property string            description
 * @property string            about
 * @property string            token
 * @property string|NULL       commands
 * @property string|NULL       avatar
 * @property BotType|BelongsTo bot_type
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 * @method static create(array $array)
 */
class Bot extends AModel
{

	use HasFactory;

	/*** @return BelongsTo|NULL */
	public function bot_type(): ?BelongsTo
	{
		return $this->belongsTo(BotType::class);
	}

	/*** @return int */
	public function getTypeId(): int
	{
		return $this->type_id;
	}

	/*** @param int $type_id */
	public function setTypeId(int $type_id): void
	{
		$this->type_id = $type_id;
	}

	/*** @return string */
	public function getName(): string
	{
		return $this->name;
	}

	/*** @param string $name */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/*** @return string */
	public function getNick(): string
	{
		return $this->nick;
	}

	/*** @param string $nick */
	public function setNick(string $nick): void
	{
		$this->nick = $nick;
	}

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description;
	}

	/*** @param string $description */
	public function setDescription(string $description): void
	{
		$this->description = $description;
	}

	/*** @return string */
	public function getAbout(): string
	{
		return $this->about;
	}

	/*** @param string $about */
	public function setAbout(string $about): void
	{
		$this->about = $about;
	}

	/*** @return string */
	public function getToken(): string
	{
		return $this->token;
	}

	/*** @param string $token */
	public function setToken(string $token): void
	{
		$this->token = $token;
	}

	/*** @return string|NULL */
	public function getCommands(): ?string
	{
		return $this->commands;
	}

	/*** @param string|NULL $commands */
	public function setCommands(?string $commands): void
	{
		$this->commands = $commands;
	}

	/*** @return string|NULL */
	public function getAvatar(): ?string
	{
		return $this->avatar;
	}

	/*** @param string|NULL $avatar */
	public function setAvatar(?string $avatar): void
	{
		$this->avatar = $avatar;
	}

}
