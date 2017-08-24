<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerTransaction
 * 
 * @property int $customer_transaction_id
 * @property int $customer_id
 * @property int $order_id
 * @property string $description
 * @property float $amount
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCustomerTransaction extends Eloquent
{
	protected $table = 'oc_customer_transaction';
	protected $primaryKey = 'customer_transaction_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'order_id' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'customer_id',
		'order_id',
		'description',
		'amount',
		'date_added'
	];
}
