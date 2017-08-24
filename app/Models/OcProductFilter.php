<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductFilter
 * 
 * @property int $product_id
 * @property int $filter_id
 *
 * @package App\Models
 */
class OcProductFilter extends Eloquent
{
	protected $table = 'oc_product_filter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'filter_id' => 'int'
	];
}
