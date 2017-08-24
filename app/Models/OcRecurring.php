<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcRecurring
 * 
 * @property int $recurring_id
 * @property float $price
 * @property string $frequency
 * @property int $duration
 * @property int $cycle
 * @property int $trial_status
 * @property float $trial_price
 * @property string $trial_frequency
 * @property int $trial_duration
 * @property int $trial_cycle
 * @property int $status
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcRecurring extends Eloquent
{
	protected $table = 'oc_recurring';
	protected $primaryKey = 'recurring_id';
	public $timestamps = false;

	protected $casts = [
		'price' => 'float',
		'duration' => 'int',
		'cycle' => 'int',
		'trial_status' => 'int',
		'trial_price' => 'float',
		'trial_duration' => 'int',
		'trial_cycle' => 'int',
		'status' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'price',
		'frequency',
		'duration',
		'cycle',
		'trial_status',
		'trial_price',
		'trial_frequency',
		'trial_duration',
		'trial_cycle',
		'status',
		'sort_order'
	];
}
