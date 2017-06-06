<?php

namespace Tests\Unit;

use App\Follower;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FollowerTest extends TestCase
{
    /**
     * Test to create a Follower and make sure it's created successfully
     *
     * @return void
     */
    public function testExample()
    {
        $countBefore = Follower::count();
        $follower = factory('App\Follower')->create();
        $countAfter = $follower->count();

        $this->assertTrue((++$countBefore == $countAfter));

    }
}
