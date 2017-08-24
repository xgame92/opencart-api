<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcAttributeDescription
 * 
 * @property int $attribute_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class OcAttributeDescription extends Eloquent
{
	protected $table = 'oc_attribute_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'attribute_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'name'
	];
}
