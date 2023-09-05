<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sticker
 * @property integer     id
 * @property File|NULL   sticker
 * @property string|NULL caption
 * @property string      type
 * @property bool        is_animated
 * @property bool        is_video
 * @property string|NULL set_name
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */

class Sticker extends AMessage
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'sticker',
        'caption',
        'type',
        'is_animated',
        'is_video',
        'set_name',
        'disable_notification',
    ];

    /**
     * @return File|NULL
     */
    public function getSticker(): ?File
    {
        return $this->sticker;
    }

    /**
     * @param File|NULL $sticker
     */
    public function setSticker(?File $sticker): void
    {
        $this->sticker = $sticker;
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isIsAnimated(): bool
    {
        return $this->is_animated;
    }

    /**
     * @param bool $is_animated
     */
    public function setIsAnimated(bool $is_animated): void
    {
        $this->is_animated = $is_animated;
    }

    /**
     * @return bool
     */
    public function isIsVideo(): bool
    {
        return $this->is_video;
    }

    /**
     * @param bool $is_video
     */
    public function setIsVideo(bool $is_video): void
    {
        $this->is_video = $is_video;
    }

    /**
     * @return string|NULL
     */
    public function getSetName(): ?string
    {
        return $this->set_name;
    }

    /**
     * @param string|NULL $set_name
     */
    public function setSetName(?string $set_name): void
    {
        $this->set_name = $set_name;
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
