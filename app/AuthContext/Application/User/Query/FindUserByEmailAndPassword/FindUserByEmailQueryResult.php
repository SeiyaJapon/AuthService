<?php

declare (strict_types=1);

namespace App\AuthContext\Application\User\Query\FindUserByEmailAndPassword;

use App\AuthContext\Application\Query\QueryResultInterface;

class FindUserByEmailQueryResult implements QueryResultInterface
{
    private array $user;

    public function __construct(array $user)
    {
        $this->user = $user;
    }

    public function result(): array
    {
        return [
            'user' => $this->user
        ];
    }
}