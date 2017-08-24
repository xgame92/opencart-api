<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCategoryPath
 * 
 * @property int $category_id
 * @property int $path_id
 * @property int $level
 *
 * @package App\Models
 */
class OcCategoryPath extends Eloquent
{
	protected $table = 'oc_category_path';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'path_id' => 'int',
		'level' => 'int'
	];

	protected $fillable = [
		'level'
	];
}
