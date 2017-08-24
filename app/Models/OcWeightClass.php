<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcWeightClass
 * 
 * @property int $weight_class_id
 * @property float $value
 *
 * @package App\Models
 */
class OcWeightClass extends Eloquent
{
	protected $table = 'oc_weight_class';
	protected $primaryKey = 'weight_class_id';
	public $timestamps = false;

	protected $casts = [
		'value' => 'float'
	];

	protected $fillable = [
		'value'
	];
}
