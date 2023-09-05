<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Photo
 * @property integer     id
 * @property string      file_path
 * @property File|NULL   photo
 * @property string|NULL caption
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */

class Photo extends AMessage
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'file_path',
        'photo',
        'caption',
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
     * @return File|NULL
     */
    public function getPhoto(): ?File
    {
        return $this->photo;
    }

    /**
     * @param File|NULL $photo
     */
    public function setPhoto(?File $photo): void
    {
        $this->photo = $photo;
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
