<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerActivity.
 *
 * @property int $customer_activity_id
 * @property int $customer_id
 * @property string $key
 * @property string $data
 * @property string $ip
 * @property \Carbon\Carbon $date_added
 */
class OcCustomerActivity extends Eloquent
{
    protected $table = 'oc_customer_activity';
    protected $primaryKey = 'customer_activity_id';
    public $timestamps = false;

    protected $casts = [
        'customer_id' => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'customer_id',
        'key',
        'data',
        'ip',
        'date_added',
    ];
}
