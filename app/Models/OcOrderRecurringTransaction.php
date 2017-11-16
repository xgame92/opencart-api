<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderRecurringTransaction.
 *
 * @property int $order_recurring_transaction_id
 * @property int $order_recurring_id
 * @property string $reference
 * @property string $type
 * @property float $amount
 * @property \Carbon\Carbon $date_added
 */
class OcOrderRecurringTransaction extends Eloquent
{
    protected $table = 'oc_order_recurring_transaction';
    protected $primaryKey = 'order_recurring_transaction_id';
    public $timestamps = false;

    protected $casts = [
        'order_recurring_id' => 'int',
        'amount'             => 'float',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'order_recurring_id',
        'reference',
        'type',
        'amount',
        'date_added',
    ];
}
