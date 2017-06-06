<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountFollowerTest extends TestCase
{
    /**
     * Add a Follower to account
     *
     * @return void
     */
    public function testExample()
    {
        $follower = factory('App\Follower')->create();
        $account = factory('App\Account')->create();

        $account->followers()->save($follower);

        $this->assertTrue(($account->followers()->count() > 0));
    }
}
