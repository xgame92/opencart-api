<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerOnline
 * 
 * @property string $ip
 * @property int $customer_id
 * @property string $url
 * @property string $referer
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCustomerOnline extends Eloquent
{
	protected $table = 'oc_customer_online';
	protected $primaryKey = 'ip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'customer_id',
		'url',
		'referer',
		'date_added'
	];
}
