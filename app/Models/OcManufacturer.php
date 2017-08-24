<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcManufacturer
 * 
 * @property int $manufacturer_id
 * @property string $name
 * @property string $image
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcManufacturer extends Eloquent
{
	protected $table = 'oc_manufacturer';
	protected $primaryKey = 'manufacturer_id';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int'
	];

	protected $fillable = [
		'name',
		'image',
		'sort_order'
	];
}
