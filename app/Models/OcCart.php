<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCart.
 *
 * @property int $cart_id
 * @property int $api_id
 * @property int $customer_id
 * @property string $session_id
 * @property int $product_id
 * @property int $recurring_id
 * @property string $option
 * @property int $quantity
 * @property \Carbon\Carbon $date_added
 */
class OcCart extends Eloquent
{
    protected $table = 'oc_cart';
    protected $primaryKey = 'cart_id';
    public $timestamps = false;

    protected $casts = [
        'api_id'       => 'int',
        'customer_id'  => 'int',
        'product_id'   => 'int',
        'recurring_id' => 'int',
        'quantity'     => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'api_id',
        'customer_id',
        'session_id',
        'product_id',
        'recurring_id',
        'option',
        'quantity',
        'date_added',
    ];
}
