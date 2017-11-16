<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomer.
 *
 * @property int $customer_id
 * @property int $customer_group_id
 * @property int $store_id
 * @property int $language_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $password
 * @property string $salt
 * @property string $cart
 * @property string $wishlist
 * @property bool $newsletter
 * @property int $address_id
 * @property string $custom_field
 * @property string $ip
 * @property bool $status
 * @property bool $safe
 * @property string $token
 * @property string $code
 * @property \Carbon\Carbon $date_added
 */
class OcCustomer extends Eloquent
{
    protected $table = 'oc_customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    protected $casts = [
        'customer_group_id' => 'int',
        'store_id'          => 'int',
        'language_id'       => 'int',
        'newsletter'        => 'bool',
        'address_id'        => 'int',
        'status'            => 'bool',
        'safe'              => 'bool',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $hidden = [
        'password',
        'token',
    ];

    protected $fillable = [
        'customer_group_id',
        'store_id',
        'language_id',
        'firstname',
        'lastname',
        'email',
        'telephone',
        'fax',
        'password',
        'salt',
        'cart',
        'wishlist',
        'newsletter',
        'address_id',
        'custom_field',
        'ip',
        'status',
        'safe',
        'token',
        'code',
        'date_added',
    ];
}
