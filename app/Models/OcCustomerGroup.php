<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerGroup
 * 
 * @property int $customer_group_id
 * @property int $approval
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcCustomerGroup extends Eloquent
{
	protected $table = 'oc_customer_group';
	protected $primaryKey = 'customer_group_id';
	public $timestamps = false;

	protected $casts = [
		'approval' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'approval',
		'sort_order'
	];
}
