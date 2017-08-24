<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLayoutRoute
 * 
 * @property int $layout_route_id
 * @property int $layout_id
 * @property int $store_id
 * @property string $route
 *
 * @package App\Models
 */
class OcLayoutRoute extends Eloquent
{
	protected $table = 'oc_layout_route';
	protected $primaryKey = 'layout_route_id';
	public $timestamps = false;

	protected $casts = [
		'layout_id' => 'int',
		'store_id' => 'int'
	];

	protected $fillable = [
		'layout_id',
		'store_id',
		'route'
	];
}
