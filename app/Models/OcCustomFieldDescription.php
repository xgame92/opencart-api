<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomFieldDescription
 * 
 * @property int $custom_field_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class OcCustomFieldDescription extends Eloquent
{
	protected $table = 'oc_custom_field_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'custom_field_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'name'
	];
}
