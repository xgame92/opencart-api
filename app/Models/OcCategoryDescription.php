<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCategoryDescription
 * 
 * @property int $category_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 *
 * @package App\Models
 */
class OcCategoryDescription extends Eloquent
{
	protected $table = 'oc_category_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'meta_title',
		'meta_description',
		'meta_keyword'
	];
}
