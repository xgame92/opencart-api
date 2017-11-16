<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCouponHistory.
 *
 * @property int $coupon_history_id
 * @property int $coupon_id
 * @property int $order_id
 * @property int $customer_id
 * @property float $amount
 * @property \Carbon\Carbon $date_added
 */
class OcCouponHistory extends Eloquent
{
    protected $table = 'oc_coupon_history';
    protected $primaryKey = 'coupon_history_id';
    public $timestamps = false;

    protected $casts = [
        'coupon_id'   => 'int',
        'order_id'    => 'int',
        'customer_id' => 'int',
        'amount'      => 'float',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'coupon_id',
        'order_id',
        'customer_id',
        'amount',
        'date_added',
    ];
}
