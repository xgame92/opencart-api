<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLanguage
 * 
 * @property int $language_id
 * @property string $name
 * @property string $code
 * @property string $locale
 * @property string $image
 * @property string $directory
 * @property int $sort_order
 * @property bool $status
 *
 * @package App\Models
 */
class OcLanguage extends Eloquent
{
	protected $table = 'oc_language';
	protected $primaryKey = 'language_id';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'name',
		'code',
		'locale',
		'image',
		'directory',
		'sort_order',
		'status'
	];
}
