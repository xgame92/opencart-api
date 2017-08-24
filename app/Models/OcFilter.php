<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcFilter
 * 
 * @property int $filter_id
 * @property int $filter_group_id
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcFilter extends Eloquent
{
	protected $table = 'oc_filter';
	protected $primaryKey = 'filter_id';
	public $timestamps = false;

	protected $casts = [
		'filter_group_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'filter_group_id',
		'sort_order'
	];
}
