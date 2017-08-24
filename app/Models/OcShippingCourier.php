<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcShippingCourier
 * 
 * @property int $shipping_courier_id
 * @property string $shipping_courier_code
 * @property string $shipping_courier_name
 *
 * @package App\Models
 */
class OcShippingCourier extends Eloquent
{
	protected $table = 'oc_shipping_courier';
	protected $primaryKey = 'shipping_courier_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'shipping_courier_id' => 'int'
	];

	protected $fillable = [
		'shipping_courier_code',
		'shipping_courier_name'
	];
}
