<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcApi
 * 
 * @property int $api_id
 * @property string $username
 * @property string $key
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcApi extends Eloquent
{
	protected $table = 'oc_api';
	protected $primaryKey = 'api_id';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $dates = [
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'username',
		'key',
		'status',
		'date_added',
		'date_modified'
	];
}
