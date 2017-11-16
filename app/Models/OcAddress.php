<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcAddress.
 *
 * @property int $address_id
 * @property int $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $company
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $postcode
 * @property int $country_id
 * @property int $zone_id
 * @property string $custom_field
 */
class OcAddress extends Eloquent
{
    protected $table = 'oc_address';
    protected $primaryKey = 'address_id';
    public $timestamps = false;

    protected $casts = [
        'customer_id' => 'int',
        'country_id'  => 'int',
        'zone_id'     => 'int',
    ];

    protected $fillable = [
        'customer_id',
        'firstname',
        'lastname',
        'company',
        'address_1',
        'address_2',
        'city',
        'postcode',
        'country_id',
        'zone_id',
        'custom_field',
    ];
}
