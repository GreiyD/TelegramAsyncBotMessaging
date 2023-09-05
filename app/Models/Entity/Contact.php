<?php

namespace App\Models\Entity;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contact
 * @property integer      id
 * @property string       phone_number
 * @property string       first_name
 * @property string|NULL  last_name
 * @property integer|NULL user_id
 * @property string|NULL  caption
 * @property string|NULL  vcard
 * @property bool         disable_notification
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 */

class Contact extends AMessage
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'phone_number',
        'first_name',
        'last_name',
        'user_id',
        'vcard',
        'caption',
        'disable_notification',
    ];

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber(string $phone_number): void
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string|NULL
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * @param string|NULL $last_name
     */
    public function setLastName(?string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return int|NULL
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * @param int|NULL $user_id
     */
    public function setUserId(?int $user_id): void
    {
        $this->user_id = $user_id;
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
    public function getVcard(): ?string
    {
        return $this->vcard;
    }

    /**
     * @param string|NULL $vcard
     */
    public function setVcard(?string $vcard): void
    {
        $this->vcard = $vcard;
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
