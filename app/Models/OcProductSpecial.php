<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductSpecial.
 *
 * @property int $product_special_id
 * @property int $product_id
 * @property int $customer_group_id
 * @property int $priority
 * @property float $price
 * @property \Carbon\Carbon $date_start
 * @property \Carbon\Carbon $date_end
 */
class OcProductSpecial extends Eloquent
{
    protected $table = 'oc_product_special';
    protected $primaryKey = 'product_special_id';
    public $timestamps = false;

    protected $casts = [
        'product_id'        => 'int',
        'customer_group_id' => 'int',
        'priority'          => 'int',
        'price'             => 'float',
    ];

    protected $dates = [
        'date_start',
        'date_end',
    ];

    protected $fillable = [
        'product_id',
        'customer_group_id',
        'priority',
        'price',
        'date_start',
        'date_end',
    ];
}
