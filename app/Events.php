<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Events extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'name',
        'user_id'
    ];

    protected $hidden = [];

    public function guests()
    {
        return $this->hasManyThrough('App\User', 'App\UserEvent',
            'user_id',
            'id_event',
            'id',
            'id');
    }
}