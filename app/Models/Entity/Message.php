<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Message
 * @property integer     id
 * @property string      text
 * @property string|NULL caption
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */

class Message extends AMessage
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'text',
        'caption',
        'disable_notification',
        ];

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string|NULL
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string|NULL $caption
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @return bool
     */
    public function isDisableNotification(): bool
    {
        return $this->disable_notification;
    }

    /**
     * @param bool $disable_notification
     */
    public function setDisableNotification(bool $disable_notification): void
    {
        $this->disable_notification = $disable_notification;
    }

}
