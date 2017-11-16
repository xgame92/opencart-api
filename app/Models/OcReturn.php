<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcReturn.
 *
 * @property int $return_id
 * @property int $order_id
 * @property int $product_id
 * @property int $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $product
 * @property string $model
 * @property int $quantity
 * @property bool $opened
 * @property int $return_reason_id
 * @property int $return_action_id
 * @property int $return_status_id
 * @property string $comment
 * @property \Carbon\Carbon $date_ordered
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 */
class OcReturn extends Eloquent
{
    protected $table = 'oc_return';
    protected $primaryKey = 'return_id';
    public $timestamps = false;

    protected $casts = [
        'order_id'         => 'int',
        'product_id'       => 'int',
        'customer_id'      => 'int',
        'quantity'         => 'int',
        'opened'           => 'bool',
        'return_reason_id' => 'int',
        'return_action_id' => 'int',
        'return_status_id' => 'int',
    ];

    protected $dates = [
        'date_ordered',
        'date_added',
        'date_modified',
    ];

    protected $fillable = [
        'order_id',
        'product_id',
        'customer_id',
        'firstname',
        'lastname',
        'email',
        'telephone',
        'product',
        'model',
        'quantity',
        'opened',
        'return_reason_id',
        'return_action_id',
        'return_status_id',
        'comment',
        'date_ordered',
        'date_added',
        'date_modified',
    ];
}
