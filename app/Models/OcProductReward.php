<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductReward.
 *
 * @property int $product_reward_id
 * @property int $product_id
 * @property int $customer_group_id
 * @property int $points
 */
class OcProductReward extends Eloquent
{
    protected $table = 'oc_product_reward';
    protected $primaryKey = 'product_reward_id';
    public $timestamps = false;

    protected $casts = [
        'product_id'        => 'int',
        'customer_group_id' => 'int',
        'points'            => 'int',
    ];

    protected $fillable = [
        'product_id',
        'customer_group_id',
        'points',
    ];
}
