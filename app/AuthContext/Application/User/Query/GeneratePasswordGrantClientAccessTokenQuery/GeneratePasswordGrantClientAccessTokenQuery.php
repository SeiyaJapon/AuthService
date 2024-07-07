<?php

declare(strict_types=1);

namespace App\AuthContext\Application\User\Query\GeneratePasswordGrantClientAccessTokenQuery;

use App\AuthContext\Application\Query\QueryInterface;

class GeneratePasswordGrantClientAccessTokenQuery implements QueryInterface
{
    private string $userId;

    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }
}