<?php

namespace App\Models;

use App\Models\Abstract\AModel;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Chat
 * @property integer     id
 * @property string      name
 * @property string|NULL time
 * @property string|NULL limit
 * @property bool|NULL   limit_enabled
 * @property Client      client
 * @property Carbon      created_at
 * @property array       data
 * @package App\Models
 * @method static where(string $string, string $string1, $id)
 * @method static create(array $array)
 */
class Chat extends AModel
{
    use HasFactory;
}
