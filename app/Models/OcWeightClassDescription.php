<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcWeightClassDescription
 * 
 * @property int $weight_class_id
 * @property int $language_id
 * @property string $title
 * @property string $unit
 *
 * @package App\Models
 */
class OcWeightClassDescription extends Eloquent
{
	protected $table = 'oc_weight_class_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'weight_class_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'title',
		'unit'
	];
}
