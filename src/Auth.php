<?php

namespace App;

use App\Exceptions\AuthException;
use App\Models\User;
use Symfony\Component\HttpFoundation\Session\Session;

class Auth
{

    public function __construct(private readonly Session $storage)
    {
    }

    /**
    * @throws AuthException
    */
    public function attempt(string $email, string $password): User
    {
        if ($email === 'admin@example.com' && $password === '123') {
            return new User(['name' => 'Администратор', 'email' => 'admin@example.com']);
        }
        throw new AuthException();
    }

    public function login(User $user): void
    {
        $this->storage->set('user', $user);
    }

    public function logout(): void
    {
        $this->storage->remove('user');
    }

    public function isAuthorized(): bool
    {
        return $this->storage->has('user');
    }

    public function user(): ?User
    {
        return $this->storage->get('user');
    }
}