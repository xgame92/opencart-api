<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderShipment
 * 
 * @property int $order_shipment_id
 * @property int $order_id
 * @property \Carbon\Carbon $date_added
 * @property string $shipping_courier_id
 * @property string $tracking_number
 *
 * @package App\Models
 */
class OcOrderShipment extends Eloquent
{
	protected $table = 'oc_order_shipment';
	protected $primaryKey = 'order_shipment_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'order_id',
		'date_added',
		'shipping_courier_id',
		'tracking_number'
	];
}
