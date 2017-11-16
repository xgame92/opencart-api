<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderHistory.
 *
 * @property int $order_history_id
 * @property int $order_id
 * @property int $order_status_id
 * @property bool $notify
 * @property string $comment
 * @property \Carbon\Carbon $date_added
 */
class OcOrderHistory extends Eloquent
{
    protected $table = 'oc_order_history';
    protected $primaryKey = 'order_history_id';
    public $timestamps = false;

    protected $casts = [
        'order_id'        => 'int',
        'order_status_id' => 'int',
        'notify'          => 'bool',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'order_id',
        'order_status_id',
        'notify',
        'comment',
        'date_added',
    ];
}
