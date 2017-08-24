<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductOption
 * 
 * @property int $product_option_id
 * @property int $product_id
 * @property int $option_id
 * @property string $value
 * @property bool $required
 *
 * @package App\Models
 */
class OcProductOption extends Eloquent
{
	protected $table = 'oc_product_option';
	protected $primaryKey = 'product_option_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'option_id' => 'int',
		'required' => 'bool'
	];

	protected $fillable = [
		'product_id',
		'option_id',
		'value',
		'required'
	];
}
