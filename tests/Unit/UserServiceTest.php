<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domain\Services\UserService;
use App\Domain\Repositories\UserRepository;
use Mockery;

class UserServiceTest extends TestCase
{
    public function test_get_all_users()
    {
        $userRepository = Mockery::mock(UserRepository::class);
        $userRepository->shouldReceive('getAll')->andReturn([]);

        $userService = new UserService($userRepository);
        $users = $userService->getAllUsers();

        $this->assertEmpty($users);
    }
}
