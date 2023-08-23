<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * @return string[]
     */
    public function getFillable(): array
    {
        return $this->fillable;
    }

    /**
     * @param string[] $fillable
     */
    public function setFillable(array $fillable): void
    {
        $this->fillable = $fillable;
    }

    /**
     * @return string[]
     */
    public function getHidden(): array
    {
        return $this->hidden;
    }

    /**
     * @param string[] $hidden
     */
    public function setHidden(array $hidden): void
    {
        $this->hidden = $hidden;
    }

    /**
     * @return string[]
     */
    public function getCasts(): array
    {
        return $this->casts;
    }

    /**
     * @param string[] $casts
     */
    public function setCasts(array $casts): void
    {
        $this->casts = $casts;
    }

}
