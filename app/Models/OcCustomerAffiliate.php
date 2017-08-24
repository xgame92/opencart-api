<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerAffiliate
 * 
 * @property int $customer_id
 * @property string $company
 * @property string $website
 * @property string $tracking
 * @property float $commission
 * @property string $tax
 * @property string $payment
 * @property string $cheque
 * @property string $paypal
 * @property string $bank_name
 * @property string $bank_branch_number
 * @property string $bank_swift_code
 * @property string $bank_account_name
 * @property string $bank_account_number
 * @property string $custom_field
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCustomerAffiliate extends Eloquent
{
	protected $table = 'oc_customer_affiliate';
	protected $primaryKey = 'customer_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'commission' => 'float',
		'status' => 'bool'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'company',
		'website',
		'tracking',
		'commission',
		'tax',
		'payment',
		'cheque',
		'paypal',
		'bank_name',
		'bank_branch_number',
		'bank_swift_code',
		'bank_account_name',
		'bank_account_number',
		'custom_field',
		'status',
		'date_added'
	];
}
