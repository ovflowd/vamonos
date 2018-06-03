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

    protected $touches = ['user'];

    public function guests()
    {
        return $this->hasManyThrough('App\User', 'App\UserEvent',
            'event_id',
            'id',
            'id',
            'user_id');
    }

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function places()
    {
        return $this->hasMany('App\Places', 'event_id', 'id');
    }


}