<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerGroupDescription
 * 
 * @property int $customer_group_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 *
 * @package App\Models
 */
class OcCustomerGroupDescription extends Eloquent
{
	protected $table = 'oc_customer_group_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'customer_group_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description'
	];
}
