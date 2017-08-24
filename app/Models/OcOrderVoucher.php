<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderVoucher
 * 
 * @property int $order_voucher_id
 * @property int $order_id
 * @property int $voucher_id
 * @property string $description
 * @property string $code
 * @property string $from_name
 * @property string $from_email
 * @property string $to_name
 * @property string $to_email
 * @property int $voucher_theme_id
 * @property string $message
 * @property float $amount
 *
 * @package App\Models
 */
class OcOrderVoucher extends Eloquent
{
	protected $table = 'oc_order_voucher';
	protected $primaryKey = 'order_voucher_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'voucher_id' => 'int',
		'voucher_theme_id' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'order_id',
		'voucher_id',
		'description',
		'code',
		'from_name',
		'from_email',
		'to_name',
		'to_email',
		'voucher_theme_id',
		'message',
		'amount'
	];
}
