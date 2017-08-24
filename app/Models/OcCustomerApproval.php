<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerApproval
 * 
 * @property int $customer_approval_id
 * @property int $customer_id
 * @property string $type
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCustomerApproval extends Eloquent
{
	protected $table = 'oc_customer_approval';
	protected $primaryKey = 'customer_approval_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'customer_id',
		'type',
		'date_added'
	];
}
