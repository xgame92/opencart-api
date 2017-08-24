<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcManufacturerToStore
 * 
 * @property int $manufacturer_id
 * @property int $store_id
 *
 * @package App\Models
 */
class OcManufacturerToStore extends Eloquent
{
	protected $table = 'oc_manufacturer_to_store';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'manufacturer_id' => 'int',
		'store_id' => 'int'
	];
}
