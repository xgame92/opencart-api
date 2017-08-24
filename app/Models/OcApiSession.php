<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcApiSession
 * 
 * @property int $api_session_id
 * @property int $api_id
 * @property string $session_id
 * @property string $ip
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcApiSession extends Eloquent
{
	protected $table = 'oc_api_session';
	protected $primaryKey = 'api_session_id';
	public $timestamps = false;

	protected $casts = [
		'api_id' => 'int'
	];

	protected $dates = [
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'api_id',
		'session_id',
		'ip',
		'date_added',
		'date_modified'
	];
}
