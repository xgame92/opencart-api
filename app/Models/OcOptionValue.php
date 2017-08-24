<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOptionValue
 * 
 * @property int $option_value_id
 * @property int $option_id
 * @property string $image
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcOptionValue extends Eloquent
{
	protected $table = 'oc_option_value';
	protected $primaryKey = 'option_value_id';
	public $timestamps = false;

	protected $casts = [
		'option_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'option_id',
		'image',
		'sort_order'
	];
}
