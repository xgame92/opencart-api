<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerLogin
 * 
 * @property int $customer_login_id
 * @property string $email
 * @property string $ip
 * @property int $total
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcCustomerLogin extends Eloquent
{
	protected $table = 'oc_customer_login';
	protected $primaryKey = 'customer_login_id';
	public $timestamps = false;

	protected $casts = [
		'total' => 'int'
	];

	protected $dates = [
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'email',
		'ip',
		'total',
		'date_added',
		'date_modified'
	];
}
