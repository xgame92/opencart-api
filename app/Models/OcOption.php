<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOption
 * 
 * @property int $option_id
 * @property string $type
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcOption extends Eloquent
{
	protected $table = 'oc_option';
	protected $primaryKey = 'option_id';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int'
	];

	protected $fillable = [
		'type',
		'sort_order'
	];
}
