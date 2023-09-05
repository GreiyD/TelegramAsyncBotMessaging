<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Video
 * @property integer     id
 * @property string      file_path
 * @property string|NULL file_name
 * @property File|NULL   video
 * @property string|NULL caption
 * @property string|NULL duration
 * @property integer     width
 * @property integer     height
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */
class Video extends AMessage
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'file_path',
        'file_name',
        'video',
        'caption',
        'duration',
        'width',
        'height',
        'disable_notification',
    ];

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->file_path;
    }

    /**
     * @param string $file_path
     */
    public function setFilePath(string $file_path): void
    {
        $this->file_path = $file_path;
    }

    /**
     * @return string|NULL
     */
    public function getFileName(): ?string
    {
        return $this->file_name;
    }

    /**
     * @param string|NULL $file_name
     */
    public function setFileName(?string $file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @return File|NULL
     */
    public function getVideo(): ?File
    {
        return $this->video;
    }

    /**
     * @param File|NULL $video
     */
    public function setVideo(?File $video): void
    {
        $this->video = $video;
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
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
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
