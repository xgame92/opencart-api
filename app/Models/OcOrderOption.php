<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderOption
 * 
 * @property int $order_option_id
 * @property int $order_id
 * @property int $order_product_id
 * @property int $product_option_id
 * @property int $product_option_value_id
 * @property string $name
 * @property string $value
 * @property string $type
 *
 * @package App\Models
 */
class OcOrderOption extends Eloquent
{
	protected $table = 'oc_order_option';
	protected $primaryKey = 'order_option_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'order_product_id' => 'int',
		'product_option_id' => 'int',
		'product_option_value_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'order_product_id',
		'product_option_id',
		'product_option_value_id',
		'name',
		'value',
		'type'
	];
}
