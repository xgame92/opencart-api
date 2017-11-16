<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcUser.
 *
 * @property int $user_id
 * @property int $user_group_id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $image
 * @property string $code
 * @property string $ip
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 */
class OcUser extends Eloquent
{
    protected $table = 'oc_user';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $casts = [
        'user_group_id' => 'int',
        'status'        => 'bool',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'user_group_id',
        'username',
        'password',
        'salt',
        'firstname',
        'lastname',
        'email',
        'image',
        'code',
        'ip',
        'status',
        'date_added',
    ];
}
