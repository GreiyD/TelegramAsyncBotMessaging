<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Document
 * @property integer     id
 * @property string      file_path
 * @property File|NULL   document
 * @property string|NULL caption
 * @property string|NULL file_name
 * @property bool        disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */

class Document extends AMessage
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'file_path',
        'document',
        'caption',
        'file_name',
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
    public function getDocument(): ?File
    {
        return $this->document;
    }

    /**
     * @param File|NULL $document
     */
    public function setDocument(?File $document): void
    {
        $this->document = $document;
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
