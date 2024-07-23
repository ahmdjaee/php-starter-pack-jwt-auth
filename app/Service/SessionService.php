<?php

namespace Root\PHP\MVC\Service;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Root\PHP\MVC\Domain\Session;
use Root\PHP\MVC\Domain\Users;
use Root\PHP\MVC\Repository\SessionRepository;
use Root\PHP\MVC\Repository\UserRepository;

class SessionService
{

    private const COOKIE_NAME = 'X-USER-SESSION';
    private const SECRET_KEY = 'KLJFDFLKJKJ393984JJFOD0S9JKMCJKLJS&JDIO1$IINVMOUROYIOOWJNV$%';
    private const JWT_ALGO = 'HS256';

    public function __construct(
        protected SessionRepository $sessionRepository,
        protected  UserRepository $userRepositry
    ) {
    }

    public function create(string $username): Session
    {

        $session = new Session();

        $session->id = uniqid();
        $session->username = $username;
        $this->sessionRepository->save($session);

        $payload = [
            'id' => $session->id,
            'username' => $session->username,
            'iat' => time(), // Issuing at
            'exp' => time() + 3600 * 24 // Expiration time
        ];

        $jwt = JWT::encode($payload, self::SECRET_KEY, self::JWT_ALGO);

        setcookie(
            name: self::COOKIE_NAME,
            value: $jwt,
            expires_or_options: time() + 3600 * 24,
            path: '/',
            httponly: true
        );

        return $session;
    }

    public function current(): ?Users
    {
        $jwt = $_COOKIE[self::COOKIE_NAME] ?? '';

        try {
            //code...
            $payload = JWT::decode($jwt, new Key(self::SECRET_KEY, self::JWT_ALGO));
            $session = $this->sessionRepository->findById($payload->id);
            if ($session) {
                return $this->userRepositry->findByUsername($session->username);
            } else {
                return null;
            }
        } catch (Exception) {
            return null;
        }
    }

    public function destroy()
    {
        $jwt = $_COOKIE[self::COOKIE_NAME] ?? '';
        $payload = JWT::decode($jwt, new Key(self::SECRET_KEY, self::JWT_ALGO));
        $this->sessionRepository->deleteById($payload->id);

        setcookie(self::COOKIE_NAME, '', 1, '/');
    }
}
