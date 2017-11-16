<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerIp.
 *
 * @property int $customer_ip_id
 * @property int $customer_id
 * @property string $ip
 * @property \Carbon\Carbon $date_added
 */
class OcCustomerIp extends Eloquent
{
    protected $table = 'oc_customer_ip';
    protected $primaryKey = 'customer_ip_id';
    public $timestamps = false;

    protected $casts = [
        'customer_id' => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'customer_id',
        'ip',
        'date_added',
    ];
}
