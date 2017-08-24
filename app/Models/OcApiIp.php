<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcApiIp
 * 
 * @property int $api_ip_id
 * @property int $api_id
 * @property string $ip
 *
 * @package App\Models
 */
class OcApiIp extends Eloquent
{
	protected $table = 'oc_api_ip';
	protected $primaryKey = 'api_ip_id';
	public $timestamps = false;

	protected $casts = [
		'api_id' => 'int'
	];

	protected $fillable = [
		'api_id',
		'ip'
	];
}
