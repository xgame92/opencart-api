<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCouponCategory.
 *
 * @property int $coupon_id
 * @property int $category_id
 */
class OcCouponCategory extends Eloquent
{
    protected $table = 'oc_coupon_category';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'coupon_id'   => 'int',
        'category_id' => 'int',
    ];
}
