<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerHistory.
 *
 * @property int $customer_history_id
 * @property int $customer_id
 * @property string $comment
 * @property \Carbon\Carbon $date_added
 */
class OcCustomerHistory extends Eloquent
{
    protected $table = 'oc_customer_history';
    protected $primaryKey = 'customer_history_id';
    public $timestamps = false;

    protected $casts = [
        'customer_id' => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'customer_id',
        'comment',
        'date_added',
    ];
}
