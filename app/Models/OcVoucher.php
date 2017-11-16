<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcVoucher.
 *
 * @property int $voucher_id
 * @property int $order_id
 * @property string $code
 * @property string $from_name
 * @property string $from_email
 * @property string $to_name
 * @property string $to_email
 * @property int $voucher_theme_id
 * @property string $message
 * @property float $amount
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 */
class OcVoucher extends Eloquent
{
    protected $table = 'oc_voucher';
    protected $primaryKey = 'voucher_id';
    public $timestamps = false;

    protected $casts = [
        'order_id'         => 'int',
        'voucher_theme_id' => 'int',
        'amount'           => 'float',
        'status'           => 'bool',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'order_id',
        'code',
        'from_name',
        'from_email',
        'to_name',
        'to_email',
        'voucher_theme_id',
        'message',
        'amount',
        'status',
        'date_added',
    ];
}
