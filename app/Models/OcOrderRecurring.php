<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderRecurring.
 *
 * @property int $order_recurring_id
 * @property int $order_id
 * @property string $reference
 * @property int $product_id
 * @property string $product_name
 * @property int $product_quantity
 * @property int $recurring_id
 * @property string $recurring_name
 * @property string $recurring_description
 * @property string $recurring_frequency
 * @property int $recurring_cycle
 * @property int $recurring_duration
 * @property float $recurring_price
 * @property bool $trial
 * @property string $trial_frequency
 * @property int $trial_cycle
 * @property int $trial_duration
 * @property float $trial_price
 * @property int $status
 * @property \Carbon\Carbon $date_added
 */
class OcOrderRecurring extends Eloquent
{
    protected $table = 'oc_order_recurring';
    protected $primaryKey = 'order_recurring_id';
    public $timestamps = false;

    protected $casts = [
        'order_id'           => 'int',
        'product_id'         => 'int',
        'product_quantity'   => 'int',
        'recurring_id'       => 'int',
        'recurring_cycle'    => 'int',
        'recurring_duration' => 'int',
        'recurring_price'    => 'float',
        'trial'              => 'bool',
        'trial_cycle'        => 'int',
        'trial_duration'     => 'int',
        'trial_price'        => 'float',
        'status'             => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'order_id',
        'reference',
        'product_id',
        'product_name',
        'product_quantity',
        'recurring_id',
        'recurring_name',
        'recurring_description',
        'recurring_frequency',
        'recurring_cycle',
        'recurring_duration',
        'recurring_price',
        'trial',
        'trial_frequency',
        'trial_cycle',
        'trial_duration',
        'trial_price',
        'status',
        'date_added',
    ];
}
