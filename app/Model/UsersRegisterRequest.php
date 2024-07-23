<?php

namespace Root\PHP\MVC\Model;

class UsersRegisterRequest
{
    public function __construct(
        public ?string $username = null,
        public ?string $name = null,
        public ?string $password = null,
        public ?string $createdAt = null,
    ) {
    }
}
