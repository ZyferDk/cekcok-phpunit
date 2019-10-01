<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest  extends TestCase
{
    // konsep TDD(test driven development)

    public $user;

    public function setUp(): void
    {
        $this->user = new User();
    }
   
    /** @test */
    public function get_first_username()
    {
        $this->user->setFirstName('zdk');
        $this->assertEquals($this->user->getFirstName(), 'zdk');
    }

    /** @test */
    public function get_last_username()
    {
        $this->user->setLastName('tuba');
        $this->assertEquals($this->user->getLastName(), 'tuba');
    }

    /** @test */
    public function firstname_and_lastname_trim()
    {
        $this->user->setFirstName(' zdk');
        $this->user->setLastName('tuba');
        $this->assertEquals($this->user->getFullName(), 'zdk tuba');
    }
}
