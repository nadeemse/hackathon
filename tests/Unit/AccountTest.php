<?php

namespace Tests\Unit;

use App\Account;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountTest extends TestCase
{
    /**
     * Test to create a account
     *
     * @return void
     */
    public function testExample()
    {
        $countBefore = Account::count();
        $newAccount = factory('App\Account')->create();
        $countAfter = $newAccount->count();

        $this->assertTrue((++$countBefore == $countAfter));

    }
}
