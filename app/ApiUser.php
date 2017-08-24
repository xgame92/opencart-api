<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'api_user';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
