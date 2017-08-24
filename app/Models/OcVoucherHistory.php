<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcVoucherHistory
 * 
 * @property int $voucher_history_id
 * @property int $voucher_id
 * @property int $order_id
 * @property float $amount
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcVoucherHistory extends Eloquent
{
	protected $table = 'oc_voucher_history';
	protected $primaryKey = 'voucher_history_id';
	public $timestamps = false;

	protected $casts = [
		'voucher_id' => 'int',
		'order_id' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'voucher_id',
		'order_id',
		'amount',
		'date_added'
	];
}
