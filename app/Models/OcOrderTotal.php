<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderTotal
 * 
 * @property int $order_total_id
 * @property int $order_id
 * @property string $code
 * @property string $title
 * @property float $value
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcOrderTotal extends Eloquent
{
	protected $table = 'oc_order_total';
	protected $primaryKey = 'order_total_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'value' => 'float',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'order_id',
		'code',
		'title',
		'value',
		'sort_order'
	];
}
