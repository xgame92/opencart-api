<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcZone
 * 
 * @property int $zone_id
 * @property int $country_id
 * @property string $name
 * @property string $code
 * @property bool $status
 *
 * @package App\Models
 */
class OcZone extends Eloquent
{
	protected $table = 'oc_zone';
	protected $primaryKey = 'zone_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'country_id',
		'name',
		'code',
		'status'
	];
}
