<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcReturnHistory
 * 
 * @property int $return_history_id
 * @property int $return_id
 * @property int $return_status_id
 * @property bool $notify
 * @property string $comment
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcReturnHistory extends Eloquent
{
	protected $table = 'oc_return_history';
	protected $primaryKey = 'return_history_id';
	public $timestamps = false;

	protected $casts = [
		'return_id' => 'int',
		'return_status_id' => 'int',
		'notify' => 'bool'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'return_id',
		'return_status_id',
		'notify',
		'comment',
		'date_added'
	];
}
