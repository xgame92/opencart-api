<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductRecurring.
 *
 * @property int $product_id
 * @property int $recurring_id
 * @property int $customer_group_id
 */
class OcProductRecurring extends Eloquent
{
    protected $table = 'oc_product_recurring';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'product_id'        => 'int',
        'recurring_id'      => 'int',
        'customer_group_id' => 'int',
    ];
}
