<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcBanner
 * 
 * @property int $banner_id
 * @property string $name
 * @property bool $status
 *
 * @package App\Models
 */
class OcBanner extends Eloquent
{
	protected $table = 'oc_banner';
	protected $primaryKey = 'banner_id';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'name',
		'status'
	];
}
