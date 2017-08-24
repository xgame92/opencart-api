<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductOptionValue
 * 
 * @property int $product_option_value_id
 * @property int $product_option_id
 * @property int $product_id
 * @property int $option_id
 * @property int $option_value_id
 * @property int $quantity
 * @property bool $subtract
 * @property float $price
 * @property string $price_prefix
 * @property int $points
 * @property string $points_prefix
 * @property float $weight
 * @property string $weight_prefix
 *
 * @package App\Models
 */
class OcProductOptionValue extends Eloquent
{
	protected $table = 'oc_product_option_value';
	protected $primaryKey = 'product_option_value_id';
	public $timestamps = false;

	protected $casts = [
		'product_option_id' => 'int',
		'product_id' => 'int',
		'option_id' => 'int',
		'option_value_id' => 'int',
		'quantity' => 'int',
		'subtract' => 'bool',
		'price' => 'float',
		'points' => 'int',
		'weight' => 'float'
	];

	protected $fillable = [
		'product_option_id',
		'product_id',
		'option_id',
		'option_value_id',
		'quantity',
		'subtract',
		'price',
		'price_prefix',
		'points',
		'points_prefix',
		'weight',
		'weight_prefix'
	];
}
