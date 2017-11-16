<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCouponProduct.
 *
 * @property int $coupon_product_id
 * @property int $coupon_id
 * @property int $product_id
 */
class OcCouponProduct extends Eloquent
{
    protected $table = 'oc_coupon_product';
    protected $primaryKey = 'coupon_product_id';
    public $timestamps = false;

    protected $casts = [
        'coupon_id'  => 'int',
        'product_id' => 'int',
    ];

    protected $fillable = [
        'coupon_id',
        'product_id',
    ];
}
