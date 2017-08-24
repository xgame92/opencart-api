<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductDiscount
 * 
 * @property int $product_discount_id
 * @property int $product_id
 * @property int $customer_group_id
 * @property int $quantity
 * @property int $priority
 * @property float $price
 * @property \Carbon\Carbon $date_start
 * @property \Carbon\Carbon $date_end
 *
 * @package App\Models
 */
class OcProductDiscount extends Eloquent
{
	protected $table = 'oc_product_discount';
	protected $primaryKey = 'product_discount_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'customer_group_id' => 'int',
		'quantity' => 'int',
		'priority' => 'int',
		'price' => 'float'
	];

	protected $dates = [
		'date_start',
		'date_end'
	];

	protected $fillable = [
		'product_id',
		'customer_group_id',
		'quantity',
		'priority',
		'price',
		'date_start',
		'date_end'
	];
}
