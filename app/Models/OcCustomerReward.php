<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerReward.
 *
 * @property int $customer_reward_id
 * @property int $customer_id
 * @property int $order_id
 * @property string $description
 * @property int $points
 * @property \Carbon\Carbon $date_added
 */
class OcCustomerReward extends Eloquent
{
    protected $table = 'oc_customer_reward';
    protected $primaryKey = 'customer_reward_id';
    public $timestamps = false;

    protected $casts = [
        'customer_id' => 'int',
        'order_id'    => 'int',
        'points'      => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'customer_id',
        'order_id',
        'description',
        'points',
        'date_added',
    ];
}
