<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcTranslation
 * 
 * @property int $translation_id
 * @property int $store_id
 * @property int $language_id
 * @property string $route
 * @property string $key
 * @property string $value
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcTranslation extends Eloquent
{
	protected $table = 'oc_translation';
	protected $primaryKey = 'translation_id';
	public $timestamps = false;

	protected $casts = [
		'store_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'store_id',
		'language_id',
		'route',
		'key',
		'value',
		'date_added'
	];
}
