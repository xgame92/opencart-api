<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderProduct
 * 
 * @property int $order_product_id
 * @property int $order_id
 * @property int $product_id
 * @property string $name
 * @property string $model
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property float $tax
 * @property int $reward
 *
 * @package App\Models
 */
class OcOrderProduct extends Eloquent
{
	protected $table = 'oc_order_product';
	protected $primaryKey = 'order_product_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int',
		'price' => 'float',
		'total' => 'float',
		'tax' => 'float',
		'reward' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'name',
		'model',
		'quantity',
		'price',
		'total',
		'tax',
		'reward'
	];
}
