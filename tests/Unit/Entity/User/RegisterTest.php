<?php

namespace Tests\Unit\Entity\User;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testRequest(): void
    {
        $user = User::register(
            $name = 'name',
            $email = 'email',
            $password = 'password'
        );

        self::assertNotEmpty($user);

        self::assertEquals($name, $user->name);
        self::assertEquals($email, $user->email);

        self::assertNotEmpty($user->password);
        self::assertNotEquals($password, $user->password);
    }

    public function testVerify(): void
    {
        $user = User::register('name', 'email', 'password');
    }


}