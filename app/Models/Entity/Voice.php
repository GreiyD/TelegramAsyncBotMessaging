<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Voice
 * @property integer     id
 * @property File|NULL   voice
 * @property string|NULL caption
 * @property string|NULL duration
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */
class Voice extends AMessage
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'voice',
        'caption',
        'duration',
        'disable_notification',
    ];

    /**
     * @return File|NULL
     */
    public function getVoice(): ?File
    {
        return $this->voice;
    }

    /**
     * @param File|NULL $voice
     */
    public function setVoice(?File $voice): void
    {
        $this->voice = $voice;
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
     * @return string|NULL
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param string|NULL $duration
     */
    public function setDuration(?string $duration): void
    {
        $this->duration = $duration;
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
