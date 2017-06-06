Problem: Create a database schema to store Accounts(Influencers) & Followers data and relation ship. also make sure that one follower can not follow a memeber twice.
and make sure that Followers records can not be repeat in followship table.


Solution: We have to create two collections 1: Accounts, 2: Followers and every follower data will be inside followers collection and every account date will be
in accounts collections. accounts collection can keep only object ID's from followers table.

i.e
    one account(influencer) can be followed by many followers and one follower can follow to the many accounts(influencers).
    So to avoid duplication of follower detail records we will have to use many to many relation and need to store objects id's only.


    So.

    Account has many followers (Many to Many)
    Follower has following many accounts (Many To Many)


Technology and tools.
    1: Laravel 5.4 (https://laravel.com/docs/5.4/)
    2: MongoDb laravel Extension(https://github.com/jenssegers/laravel-mongodb)

Dependencies:

Kindly run "composer install" command to install required dependencies


Models:
Account, Follower

Controller:
AccountsController, FollowerController

Available Routes:
yourdomain/accounts
Route::resource('accounts', 'AccountController'); // Resource controller for account

yourdomain/accounts/_ID/follower/FOLLOWER_ID
Route::get('/accounts/{id}/follower/{follower_id}', 'AccountController@follow'); // Follow a account

yourdomain/follower/_ID/
Route::get('/follower/{id}', 'FollowerController@show'); // Show a follower

yourdomain/accounts/_ID/
Route::get('/accounts/{id}', 'AccountController@show'); // Show a Account

yourdomain/followers
Route::resource('followers', 'FollowerController'); // followers resurce controller

TestCases:
RunTest Cases: vendor/bin/phpunit

unit / FollowerTest, unit / AccountTest, unit / AccountFollowerTest

FollowerTest
command --> vendor/bin/phpunit
This test case will make sure that Followers are created on followers collection successfully or not


FollowerTest
command --> vendor/bin/phpunit
This test case will make sure that Followers are created on followers collection successfully or not


AccountTest
command --> vendor/bin/phpunit
This test case will try to create a account and return true or false

AccountFollowerTest
command --> vendor/bin/phpunit
This test case will try to test following functionality


Database Configuration:
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=hackathonDb
DB_USERNAME=superAdmin
DB_PASSWORD=admin123

