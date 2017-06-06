<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;


class Follower extends Eloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function accounts() {
        return $this->belongsToMany(Account::class, null, 'follower_ids', 'account_ids');
    }
}
