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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|NULL
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * @param string|NULL $time
     */
    public function setTime(?string $time): void
    {
        $this->time = $time;
    }

    /**
     * @return string|NULL
     */
    public function getLimit(): ?string
    {
        return $this->limit;
    }

    /**
     * @param string|NULL $limit
     */
    public function setLimit(?string $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return bool|NULL
     */
    public function getLimitEnabled(): ?bool
    {
        return $this->limit_enabled;
    }

    /**
     * @param bool|NULL $limit_enabled
     */
    public function setLimitEnabled(?bool $limit_enabled): void
    {
        $this->limit_enabled = $limit_enabled;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    /**
     * @param Carbon $created_at
     */
    public function setCreatedAt(Carbon $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
