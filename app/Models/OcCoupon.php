<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCoupon
 * 
 * @property int $coupon_id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property float $discount
 * @property bool $logged
 * @property bool $shipping
 * @property float $total
 * @property \Carbon\Carbon $date_start
 * @property \Carbon\Carbon $date_end
 * @property int $uses_total
 * @property string $uses_customer
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCoupon extends Eloquent
{
	protected $table = 'oc_coupon';
	protected $primaryKey = 'coupon_id';
	public $timestamps = false;

	protected $casts = [
		'discount' => 'float',
		'logged' => 'bool',
		'shipping' => 'bool',
		'total' => 'float',
		'uses_total' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'date_start',
		'date_end',
		'date_added'
	];

	protected $fillable = [
		'name',
		'code',
		'type',
		'discount',
		'logged',
		'shipping',
		'total',
		'date_start',
		'date_end',
		'uses_total',
		'uses_customer',
		'status',
		'date_added'
	];
}
