<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Account extends Eloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function followers() {
        return $this->belongsToMany(Follower::class, null, 'account_ids', 'follower_ids');
    }
}
