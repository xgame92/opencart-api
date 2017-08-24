<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcSession
 * 
 * @property string $session_id
 * @property string $data
 * @property \Carbon\Carbon $expire
 *
 * @package App\Models
 */
class OcSession extends Eloquent
{
	protected $table = 'oc_session';
	protected $primaryKey = 'session_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'expire'
	];

	protected $fillable = [
		'data',
		'expire'
	];
}
